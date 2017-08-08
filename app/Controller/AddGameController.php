<?php

namespace Controller;

use \W\Controller\Controller;

class AddGameController extends Controller {

	public function add() {
		// // J'instancie le model
		// $varConsoles = new \Model\ConsoleModel();
		// // J'appelle la méthode find($id) sur le model
		// $consolesInfos = array();
		// $consolesInfos = $varConsoles->findAll();

		// Je lance le moteur de template, en passant des variables dans le 2e argument
		$this->show('add/add.php', array(
			// 'consolesInfos' => $consolesInfos,
		));
	}
}

?>
