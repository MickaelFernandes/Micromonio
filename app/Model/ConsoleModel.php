<?php

namespace Model;

// Toujours nommer la classe selon le nom de la table : TableModel
class ConsoleModel extends \W\Model\Model {
    // Si la primary key n'est pas "id", alors il faut la définir
    public function __construct() {
        parent::__construct();

        // Modification de la primary key
        $this->setPrimaryKey('con_id');
    }
}
