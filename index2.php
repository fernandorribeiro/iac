<?php

while(true)
{
$mysqli = new mysqli("bra-mysqlserver.mysql.database.azure.com", "adminuser@bra-mysqlserver", "Password123!", "bra-mysqlserverdb");
}

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/* check if server is alive */
if ($mysqli->ping()) {
    printf ("Our connection is ok!\n");
} else {
    printf ("Error: %s\n", $mysqli->error);
}

/* close connection */
$mysqli->close();
?>
