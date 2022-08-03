<?php
   define('DB_SERVER', 'bra-mysqlserver.mysql.database.azure.com');
   define('DB_USERNAME', 'adminuser@bra-mysqlserver');
   define('DB_PASSWORD', 'Password123!');
   define('DB_DATABASE', 'bra-mysqlserverdb');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
