<?php

namespace Controller;

use \W\Controller\Controller;

class ConsoleController extends Controller {

	public function consoles() {
		// J'instancie le model
		$varConsoles = new \Model\ConsoleModel();
		// J'appelle la méthode find($id) sur le model
		$consolesInfos = array();
		$consolesInfos = $varConsoles->findAll();

		// Je lance le moteur de template, en passant des variables dans le 2e argument
		$this->show('console/consoles.php', array(
			'consolesInfos' => $consolesInfos,
		));
	}

	public function get_console($id)	{

		// to get the consoles :
		$varConsoles = new \Model\ConsoleModel();

		$consolesInfos = array();
		$consolesInfos = $varConsoles->find($id);


		// to get the games :
		$sqlColomn = array('console_con_id' => $id);
		$gameInfos = array();

		$varGames = new \Model\VideoGameModel();

		$gameInfos = $varGames->search($sqlColomn);


		// display everything :
		$this->show('console/game_of_console.php', array(
			'consolesInfos' => $consolesInfos,
			'gameInfos' => $gameInfos,
		));
	}
}
