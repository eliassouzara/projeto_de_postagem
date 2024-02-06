<?php include"config.php"; ?>

<?php

        $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = password_hash ($_POST['senha'], PASSWORD_DEFAULT);
       $cpfcnpj = $_POST['cpfcnpj'];
       $oque = $_POST['oque'];
       $data_nascimento = $_POST['data_nascimento'];
       $cidade = $_POST['cidade'];

       $estado = $_POST['estado'];
       $telefone = $_POST['telefone'];
       $saldo = $_POST['saldo'];
       
       

       $sql = "INSERT INTO usuariosy(nome,email,senha,cpfcnpj,oque,data_nascimento,cidade,estado,telefone,saldo)
       VALUES('$nome','$email','$senha','$cpfcnpj','$oque','$data_nascimento','$cidade','$estado','$telefone','$saldo')";




       if (mysqli_query($conn, $sql)){
            header("location: ./login/logintrue=+63232323298.php");
       }else{
            echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
       } 
       
mysqli_close($conn);

$sql = Mysqli



    ?>