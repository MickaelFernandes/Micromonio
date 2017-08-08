<?php

$w_config = [
   	//information de connexion à la bdd
	'db_host' => 'localhost',						//hôte (ip, domaine) de la bdd
    'db_user' => 'root',							//nom d'utilisateur pour la bdd
    'db_pass' => '',								//mot de passe de la bdd
    'db_name' => 'micromonio',								//nom de la bdd
    'db_table_prefix' => '',						//préfixe ajouté aux noms de table

	//authentification, autorisation
	'security_user_table' => 'user',				//nom de la table contenant les infos des utilisateurs
	'security_id_property' => 'usr_id',					//nom de la colonne pour la clef primaire
	'security_username_property' => 'usr_username',		//nom de la colonne pour le "pseudo"
	'security_email_property' => 'usr_email',			//nom de la colonne pour l'"email"
	'security_password_property' => 'usr_password',		//nom de la colonne pour le "mot de passe"
	'security_role_property' => 'usr_role',				//nom de la colonne pour le "role"

	// not sure if this works
	'security_login_route_name' => 'user_signin',			//nom de la route affichant le formulaire de connexion

	// configuration globale
	'site_name'	=> 'Micromonio', 								// contiendra le nom du site
];

require('routes.php');
