<?php
$servername = "bra-mysqlserver.mysql.database.azure.com";
$username = "adminuser@bra-mysqlserver";
$password = "Password123!";
$db = "bra-mysqlserverdb";
// Create connection
$conn = mysqli_reconnect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "   Conectado com sucesso !!!";

function query($query) {
   $connection = $conn['global_connection'];
   if(empty($connection) || mysqli_connect_errno()) $connection = connect();

   try {
        $result = mysqli_query($connection, $query);
   } catch(Exception $e) {
        if(!mysqli_ping($connection)) {
           $connection = connect(); // reestablish the connection
           $conn['global_connection'] = $connection; // update global connection value
           $result = mysqli_query($connection, $query); // requery using the new connection
        }
   }

   return $result;
}

?>
