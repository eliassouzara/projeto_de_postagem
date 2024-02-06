<?php  include("./conexao.php"); ?>

<?php
        $seu_id = $_POST['seu_id'];
      $nomecompleto = $_POST['nomecompleto'];
      $suaconta = $_POST['suaconta'];

      $chavepix = $_POST['chavepix'];
       $saldo = $_POST['saldo'];
       
       
       
       

       $sql = "INSERT INTO sacar(seu_id,nomecompleto,suaconta,chavepix,saldo)
       VALUES('$seu_id','$nomecompleto','$suaconta','$chavepix','$saldo')";




       if (mysqli_query($conn, $sql)){
            header("location: ../Successsaque5786748=true.php");
       }else{
            echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
       } 
       
mysqli_close($conn);

$sql = Mysqli



    ?>