<?php
$servername = "bra-mysqlserver.mysql.database.azure.com";
$username = "adminuser@bra-mysqlserver";
$password = "Password123!";
$db = "bra-mysqlserverdb";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "   Conectado com sucesso !!!";

  
?>

<button onclick="myFunction()">Copy Text</button>

<script>
function myFunction() {
    mysqli_reconnect($servername, $username, $password,$db);
}
</script>
