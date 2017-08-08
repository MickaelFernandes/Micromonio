<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		['GET', '/console/', 'Console#consoles', 'console_consoles'],
		['GET', '/console', 'Console#consoles', 'console_consoles2'],

		// game_of_console.php
		['GET', '/console/[i:id]-[a:consolessss]/', 'Console#get_console', 'console_get_the_console'],
		['GET', '/console/[i:id]-[a:consolessss]', 'Console#get_console', 'console_get_the_console2'],

		// game.php
		['GET', '/game/[i:id]/', 'VideoGame#get_game', 'game_get_game'],

		// add.php
		['GET', '/add/', 'AddGame#add', 'add_add_game'],
		['GET', '/add/', 'AddGame#add', 'add_add_game2'],

		['POST', '/add/', 'AddGame#addPost', 'add_add_game_post'],
		['POST', '/add/', 'AddGame#addPost', 'add_add_game_post2'],

		// Users signin & signup
		['GET', '/signin/', 'User#signin', 'user_signin'],
		['GET', '/signin', 'User#signin', 'user_signin2'],

		['POST', '/signin/', 'User#signinPost', 'user_signin_post'],
		['POST', '/signin', 'User#signinPost', 'user_signin_post2'],

		['GET|POST', '/signup/', 'User#signup', 'user_signup'],
		['GET|POST', '/signup', 'User#signup', 'user_signup2'],

	);
