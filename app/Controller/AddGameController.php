<?php

namespace Controller;

use \W\Controller\Controller;

class AddGameController extends Controller {

	public function add() {
		$this->show('add/add.php', array());
	}

	public function addPost() {
		// récuperation du formulaire
		$name = isset($_POST['name']) ? trim($_POST['name']) : '';
		$year = isset($_POST['year']) ? trim($_POST['year']) : '';
		$editor = isset($_POST['editor']) ? trim($_POST['editor']) : '';
		$image = isset($_POST['image']) ? trim($_POST['image']) : '';
		$console = isset($_POST['console']) ? trim($_POST['console']) : '';
		$genre = isset($_POST['genre']) ? trim($_POST['genre']) : '';

		// Validation des données
		$formValid = true;
		if (empty($name)) {
			$this->flash('Name est vide', 'danger');
			$formValid = false;
		}

	}
}

?>
