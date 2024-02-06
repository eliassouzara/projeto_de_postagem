<?php  include("./conexao.php"); ?>

<?php
        $arquivo = $_POST['arquivo'];
      $meuid = $_POST['meuid'];
      $valor = $_POST['valor'];
      
       
       
       
       

       $sql = "INSERT INTO addsaldo(arquivo,meuid,valor)
       VALUES('$arquivo','$meuid','$valor')";




       if (mysqli_query($conn, $sql)){
            header("location: ../Successsaque5786748=true.php");
       }else{
            echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
       } 
       
mysqli_close($conn);

$sql = Mysqli



    ?>