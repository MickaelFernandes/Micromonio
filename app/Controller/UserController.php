<?php

namespace Controller;

use \W\Controller\Controller;

class UserController extends Controller {

    public function signin() {
        $this->show('user/signin.php');
    }

    public function signinPost() {
        debug($_POST);
        echo "1st condition <br />";

        // Récupération des données
        $username = isset($_POST['signin_username']) ? trim($_POST['signup_username']) : '';
        $email = isset($_POST['signin_email']) ? trim($_POST['signup_email']) : '';
        $pw = isset($_POST['signin_pw']) ? trim($_POST['signup_pw']) : '';

        // Validation des données
        $formValid = true;

        if (empty($email)) {
            $this->flash('Email vide', 'danger'); // Attention, un seul message en session :(
            $formValid = false;
            echo "error 1 <br />";
        }

        if (empty($pw)) {
            $this->flash('Mot de passe vide', 'danger'); // Attention, un seul message en session :(
            $formValid = false;
            echo "error 2 <br />";
        }

        // Si tout est ok => on vérifie dans la DB
        if ($formValid) {
            echo "2st condition <br />";

            $authModel = new \W\Security\AuthentificationModel();
            $userId = $authModel->isValidLoginInfo($email, $pw);

            // Utilisateur existant
            if ($userId > 0) {
                echo "3st condition <br />";
                // Je récupère les données en DB
                $usersModel = new \Model\UsersModel();
                $userInfos = $usersModel->find($userId);

                // passer en session
                $authModel->logUserIn($userInfos);

                // TODO rediriger vers la home
                $this->redirectToRoute('default_home');
            }
            else {
                $this->flash('Utilisateur/Mot de passe non reconnu', 'danger');
                echo "error 3 <br />";
            }
        }

        // On affiche la vue, mais on arrivera ici que si erreur
        $this->show('user/signin');
    }

    public function signup() {
        // Begin :
        if (!empty($_POST)) {
            echo "first if <br />";
            // Récupération des données
            $username = isset($_POST['signup_username']) ? trim($_POST['signup_username']) : '';
            $email = isset($_POST['signup_email']) ? trim($_POST['signup_email']) : '';
            $pw1 = isset($_POST['signup_pw1']) ? trim($_POST['signup_pw1']) : '';
            $pw2 = isset($_POST['signup_pw2']) ? trim($_POST['signup_pw2']) : '';


            // Validation des données
            $formValid = true;
            // username
            if (empty($username)) {
                $this->flash('Username vide', 'danger'); // Attention, un seul message en session :(
                $formValid = false;
                echo "error 1 <br />";
            }
            else if (!preg_match('/^[A-Za-z0-9_]{3,}$/', $username)) {
                $this->flash('Username incorrect (au moins 3 caractères alphanumériques)', 'danger'); // Attention, un seul message en session :(
                $formValid = false;
                echo "error 2 <br />";
            }
            // email
            if (empty($email)) {
                $this->flash('Email vide', 'danger');
                $formValid = false;
                echo "error 3 <br />";
            }
            else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $this->flash('Email incorrect', 'danger');
                $formValid = false;
                echo "error 4 <br />";
            }
            // password 1 & 2
            if (empty($pw1) || empty($pw2)) {
                $this->flash('Mot de passe vide', 'danger');
                $formValid = false;
                echo "error 5 <br />";
            }
            else if ($pw1 != $pw2) {
                $this->flash('Les 2 mots de passe sont différents', 'danger');
                $formValid = false;
                echo "error 6 <br />";
            }

            // Si tout est ok
            if ($formValid) {
                echo "second if <br />";
                // vérifier si email et/ou username existe déjà
                $usersModel = new \Model\UserModel();

                // d'autres' verifications
                if ($usersModel->getUserByUsernameOrEmail($email) !== false) {
                    $this->flash('L\'email existe déjà', 'danger');
                    $formValid = false;
                    echo "error 1 <br />";
                }
                else if ($usersModel->getUserByUsernameOrEmail($username) !== false) {
                    $this->flash('Le username existe déjà', 'danger');
                    $formValid = false;
                    echo "error 2 <br />";
                }


                if ($formValid) {
                    echo "third if <br />";
                    // insertion dans la DB
                    $authModel = new \W\Security\AuthentificationModel();
                    $data = $usersModel->insert(
                        array(
                            'usr_username' => $username,
                            'usr_email' => $email,
                            'usr_role' => 'user',
                            'usr_password' => $authModel->hashPassword($pw1)
                        )
                    );

                    // Si insertion ok
                    if ($data !==false) {
                        echo "4th if <br />";
                        // connexion de l'utilisateur
                        $authModel->logUserIn($data);

                        // afficher message success
                        $this->flash('Inscription réussie', 'success');

                        // rediriger vers la home
                        // TODO new redirction to do -johnny this one works :
                        // $this->redirectToRoute('default_home');
                    }
                    else {
                        $this->flash('Erreur dans l\'insertion', 'danger');
                    }
                }
            }
        }

        $this->show('user/signup', array(
            'username' => isset($username) ? $username : '',
            'email' => isset($email) ? $email : ''
        ));
    }

    // public function signout() {
    //     $authModel = new \W\Security\AuthentificationModel();
    //     $authModel->logUserOut();
    //
    //     $this->flash('Déconnecté', 'info');
    //     $this->redirectToRoute('default_home');
    // }
}
