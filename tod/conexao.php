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

