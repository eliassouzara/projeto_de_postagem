<?php  include("./conexao.php"); ?>

<?php
        $seu_id = $_POST['seu_id'];
      $nomecompleto = $_POST['nomecompleto'];
      $suaconta = $_POST['suaconta'];
      $emailpaypal = $_POST['emailpaypal'];
      $emailmercadopago = $_POST['emailmercadopago'];
      $chavepix = $_POST['chavepix'];
       $valor = $_POST['valor'];
       
       
       
       

       $sql = "INSERT INTO sacar(seu_id,nomecompleto,suaconta,emailmercadopago,valor)
       VALUES('$seu_id','$nomecompleto','$suaconta','$emailmercadopago','$valor')";




       if (mysqli_query($conn, $sql)){
            header("location: ../Successsaque5786748=true.php");
       }else{
            echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
       } 
       
mysqli_close($conn);

$sql = Mysqli



    ?>