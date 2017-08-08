<?php

namespace Model;

class UserModel extends \W\Model\UsersModel {
    // Si la primary key n'est pas "id", alors il faut la définir
    public function __construct() {
        parent::__construct();

        // Modification de la primary key
        $this->setTable('user');
        $this->setPrimaryKey('usr_id');
    }
}
