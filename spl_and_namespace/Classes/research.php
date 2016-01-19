<?php
namespace Classes;

use Classes\Database\Database;

class Research extends Database {
    public function __construct() {
        echo __CLASS__ . ' loaded<br/>';
        parent::connect();
    }
}
