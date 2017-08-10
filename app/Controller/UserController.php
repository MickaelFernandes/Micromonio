<?php

namespace Controller;

use \W\Controller\Controller;

class UserController extends Controller {

    public function signin() {
        $this->show('user/signin.php');
    }

    public function signinPost() {

        // // Récupération des données
        $username = isset($_POST['signin_username']) ? trim($_POST['signup_username']) : '';
        $email = isset($_POST['signin_email']) ? trim($_POST['signin_email']) : '';
        $pw = isset($_POST['signin_password']) ? trim($_POST['signin_password']) : '';

        // Validation des données
        $formValid = true;

        if (empty($email)) {
            $this->flash('Email vide', 'danger'); // Attention, un seul message en session :(
            $formValid = false;
        }

        if (empty($pw)) {
            $this->flash('Mot de passe vide', 'danger'); // Attention, un seul message en session :(
            $formValid = false;
        }

        // Si tout est ok => on vérifie dans la DB
        if ($formValid) {

            $authModel = new \W\Security\AuthentificationModel();
            $userId = $authModel->isValidLoginInfo($email, $pw);

            // Utilisateur existant
            if ($userId > 0) {
                // Je récupère les données en DB
                $usersModel = new \Model\UserModel();
                $userInfos = $usersModel->find($userId);

                // passer en session
                $authModel->logUserIn($userInfos);

                // Rediriger vers la home
                $this->redirectToRoute('default_home');
            }
            else {
                $this->flash('Utilisateur/Mot de passe non reconnu', 'danger');
            }
        }

        // On affiche la vue, mais on arrivera ici que si erreur
        $this->show('user/signin');
    }

    public function signup() {
        // Begin :
        if (!empty($_POST)) {
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
            }
            else if (!preg_match('/^[A-Za-z0-9_]{3,}$/', $username)) {
                $this->flash('Username incorrect (au moins 3 caractères alphanumériques)', 'danger'); // Attention, un seul message en session :(
                $formValid = false;
            }
            // email
            if (empty($email)) {
                $this->flash('Email vide', 'danger');
                $formValid = false;
            }
            else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $this->flash('Email incorrect', 'danger');
                $formValid = false;
            }
            // password 1 & 2
            if (empty($pw1) || empty($pw2)) {
                $this->flash('Mot de passe vide', 'danger');
                $formValid = false;
            }
            else if ($pw1 != $pw2) {
                $this->flash('Les 2 mots de passe sont différents', 'danger');
                $formValid = false;
            }

            // Si tout est ok
            if ($formValid) {
                // vérifier si email et/ou username existe déjà
                $usersModel = new \Model\UserModel();

                // d'autres' verifications
                if ($usersModel->getUserByUsernameOrEmail($email) !== false) {
                    $this->flash('L\'email existe déjà', 'danger');
                    $formValid = false;
                }
                else if ($usersModel->getUserByUsernameOrEmail($username) !== false) {
                    $this->flash('Le username existe déjà', 'danger');
                    $formValid = false;
                }


                if ($formValid) {
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
                        // connexion de l'utilisateur
                        $authModel->logUserIn($data);

                        // afficher message success
                        $this->flash('Inscription réussie', 'success');

                        // rediriger vers la home
                        $this->redirectToRoute('default_home');
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

    public function signout() {
        $authModel = new \W\Security\AuthentificationModel();
        $authModel->logUserOut();

        // $this->flash('Déconnecté', 'info');
        $this->redirectToRoute('default_home');
    }
}
