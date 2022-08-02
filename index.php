<?php
$servername = "";
$username = "adminuser@bra-mysqlserver";
$password = "Password123!";
$db = "bra-mysqlserverdb";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   echo "Falha na conexão";
}
echo "Conectado com Sucesso";
?>
