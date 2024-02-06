<?php
  //envio o charset para evitar problemas com acentos
  header("Content-Type: text/html; charset=UTF-8");


  $mysqli = new mysqli('localhost', 'root', '', 'from');

  $user = filter_input(INPUT_GET, 'cpfcnpj');
  $sql = "SELECT * FROM `usuariosy` WHERE `cpfcnpj` = '{$user}'"; //monto a query
  


  $query = $mysqli->query( $sql ); //executo a query

  if( $query->num_rows > 0 ) {//se retornar algum resultado
    echo ' CPF/CNPJ Está em uso ';
  } else {
    echo '';
  }