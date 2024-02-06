<?php  include("./conexao.php"); ?>

<?php
        $id_dequemvaireceber = $_POST['id_dequemvaireceber'];
      $nomedapessoa = $_POST['nomedapessoa'];
      $nomedaempresa = $_POST['nomedaempresa'];
      $meuid = $_POST['meuid'];
       $valor = $_POST['valor'];
       
       
       
       

       $sql = "INSERT INTO transicaoempresa_pessoas(id_dequemvaireceber,nomedapessoa,nomedaempresa,meuid,valor)
       VALUES('$id_dequemvaireceber','$nomedapessoa','$nomedaempresa','$meuid','$valor')";




       if (mysqli_query($conn, $sql)){
            header("location: ../Success.php");
       }else{
            echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
       } 
       
mysqli_close($conn);

$sql = Mysqli



    ?>