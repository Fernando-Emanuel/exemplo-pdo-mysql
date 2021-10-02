<?php
namespace ExemploPDOMySQL;

class MySQLConnection extends \PDO {
    public function __construct() {
        parent::__construct('mysql:host=localhost;dbname=biblioteca', 'root', '');
    }
}