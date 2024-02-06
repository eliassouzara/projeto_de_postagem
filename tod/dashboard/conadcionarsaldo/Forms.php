<?php  include("./conexao.php"); ?>

<?php
        $id_dequemvaireceber = $_POST['id_dequemvaireceber'];
      $nomedapessoa = $_POST['nomedapessoa'];
      $nomedaempresa = $_POST['nomedaempresa'];
       $valor = $_POST['valor'];
       
       
       
       

       $sql = "INSERT INTO adcionarsaldo(id_dequemvaireceber,nomedapessoa,nomedaempresa,valor)
       VALUES('$id_dequemvaireceber','$nomedapessoa','$nomedaempresa','$valor')";




       if (mysqli_query($conn, $sql)){
            header("location: ../Successadd444=true.php");
       }else{
            echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
       } 
       
mysqli_close($conn);

$sql = Mysqli



    ?>