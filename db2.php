<?php
$servername = "bra-mysqlserver.mysql.database.azure.com";
$username = "adminuser@bra-mysqlserver";
$password = "Password123!";

try {
  $conn = new PDO("mysql:host=$servername;dbname=bra-mysqlserverdb", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
