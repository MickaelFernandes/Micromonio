<?php

namespace Controller;

use \W\Controller\Controller;

class VideoGameController extends Controller {

    public function get_game($id) {
        // to get the games :
        $sqlColomn = array('vid_id' => $id);
        $gameInfos = array();

        $varGames = new \Model\VideoGameModel();

        $gameInfos = $varGames->search($sqlColomn);

        foreach ($gameInfos as $currentRow) {
            # code...
        }


        // display everything :
        $this->show('game/game.php', array(
            'currentRow' => $currentRow,
        ));
    }
}
