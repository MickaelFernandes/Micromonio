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
	);
