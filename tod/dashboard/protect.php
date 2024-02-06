<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
  
    die("Desculpa mais você não pode acessar está pagina porque você não está logado.<p><a href=\"./index.php\">Entrar</a></p>");
}



if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['email'])){
    die("");
}





?>