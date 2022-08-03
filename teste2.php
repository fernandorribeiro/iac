<?php

$servername = "bra-mysqlserver.mysql.database.azure.com";
$username = "adminuser@bra-mysqlserver";
$password = "Password123!";
$db = "bra-mysqlserverdb";

class databaseClass {
    var $conn;
    var $db;

    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $this->conn = mysql_connect($servername, $username, $password);
        $this->db = mysql_select_db($db, $this->conn);
    }

    public function disconnect() {
        mysql_close($this->conn);
    }

    public function reconnect() {
        $this->disconnect();
        $this->connect();
    }

}

?>
