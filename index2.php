<html lang="pt">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
    Aplicacao Piloto
  </title>
</head>
<div class="header"><img src="https://salvadortradecenter.com.br/wp-content/uploads/2020/07/09-e-10-Bradesco-1.jpg" width="236" height="100"/>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>  
<body>

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
echo "Conectado com sucesso !!!";
?>

</body>
</html>
