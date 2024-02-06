

<?php

include('../protect.php');


if(!isset($_SESSION)){
    session_start();
}




?>

<!DOCTYPE html>
<html>
<head>
	<title>comentários</title>
	<link rel="stylesheet" href="../style.css">
	<!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="../stylee.css">
</head>
<body>
	
<form  method="POST"  action="../dashboard.php"  >
		<input type="checkbox">
		<br>
		<p style="color: #ffff ; margin-top: 18px;">Sinta-se à vontade para compartilhar sua opinião sobre nossa plataforma. Comentários construtivos e positivos poderão ser destacados em nossas recomendações no site. Agradecemos por contribuir para o aprimoramento contínuo da nossa comunidade</p>
		<br>
        <br>
        <br>

   <h1 style="color: #ffff;">email:vagasurgentebr@gmail.com</h1>

     <button>SUBMIT</button></a>
    </form>
    <!--Script-->
    <script src="script.js"></script>
</body>
</html>