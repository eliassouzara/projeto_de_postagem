<?php
include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Olá  <?php echo $_SESSION ['nome'];?>
    <?php echo $_SESSION ['email'];?>
    <?php echo $_SESSION ['arquivo'];?>
     
    <p>
        
        <a href="logout.php">Sair</a>
</body>
</html>