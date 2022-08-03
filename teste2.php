<?php
$servername = "bra-mysqlserver.mysql.database.azure.com";
$username = "adminuser@bra-mysqlserver";
$password = "Password123!";
$db = "bra-mysqlserverdb";
 
// Creating connection
$conn = mysqli_connect($servername, $username, $password, $db);
 
// Checking connection
if (!$conn) {
    die("Connection to the server failed: " . mysqli_connect_error());
}
 
/* check if server is alive */
if (mysqli_ping($conn)) {
    printf ("Successful Connection!\n");
} else {
    printf ("Error: %s\n", mysqli_error($conn));
}
 
/* close connection */
mysqli_close($conn);
?>
