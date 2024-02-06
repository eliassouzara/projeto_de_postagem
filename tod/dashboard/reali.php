<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "from";

   $mysqli = new mysqli($host, $usuario, $senha, $database);
    
    if($mysqli->error){
        die ("Erro" . $mysqli->error);
   }
   

?>

	<html>
	<head>
	<meta http-equiv="content-Type" content="text/html"; charset="utf-8" />
	<title>Realizar Deposito</title>
	</head>
	
	<body>
<?php
$idConta=$_POST['idConta'];
$valor=$_POST['valor'];

$mysqli="insert into trasacoes (idConta,valor) value ('$idConta','$valor')";
$result=mysql_query($mysqli);

?>

<?php
$idConta=$_POST['idConta'];
$valor=$_POST['valor'];

$up = mysql_query("UPDATE conta SET saldo='$valor'  WHERE idConta=$idConta");



?>