<?php include"cone.php"; ?>

<?php
        
      $nome = $_POST['nome'];
       $conta = $_POST['conta'];
       $valor = $_POST['valor'];
      

       $sql = "INSERT INTO receber (nome,conta,valor)
       VALUES('$nome','$conta','$valor'";

       if (mysqli_query($conn, $sql)){
            header("location: Success.php");
       }else{
            echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
       }
mysqli_close($conn);

$sql = Mysqli



    ?>