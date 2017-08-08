<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller {

	public function home() {
		// to get the games :
		$gameInfos = array();
		$varGames = array();

		$varGames = new \Model\VideoGameModel();

		$gameInfos = $varGames->findAll();


		// display everything :
		$this->show('default/home', array(

			'gameInfos' => $gameInfos,
		));
	}
}
