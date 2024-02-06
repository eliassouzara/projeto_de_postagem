<?php

    include('config.php');

    $msg = false;
 
 if(isset($_FILES['arquivo'])){

    $extensao = strtolower(substr ($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "../upload";


    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

    $sql_code = "INSERT INTO arquivo (codigo, arquivo) VALUES (null, '$novo_nome', NOW()";
    if($mysqli-> query($sql_code))
    $msg = "Arquivo enviado com sucesso!";
    else
    $msg = "Falha ao enviar arquivo";
 }
   

?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color:cornflowerblue ;

        }
        .box{
            color: #ffff;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            background-color: black;
            padding: 15px;
            border-radius: 5px;
            
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            color: #ffff;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelinput, .inputUser:valid ~ .labelinput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image:linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            cursor: pointer;
            font-size: 15px;
            border-radius: 6px;

        }
        #submit:hover{
            background-image:linear-gradient(to right, rgb(0, 92, 197), rgb(80, 19, 110));
        }
    </style>
</head>
<body>
    <div class="box">

    <?php

    if(isset($_POST['submit']) && $_POST['form'] == 'f_form'){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash ($_POST['senha'], PASSWORD_DEFAULT);

        $cpfcnpj = $_POST['cpfcnpj'];
        $oque = $_POST['oque'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $telefone = $_POST['telefone'];
        $arquivo = $_POST['arquivo'];
        $saldo = $_POST['saldo'];

        if($nome == ''){
            From::alert('erro', 'Nome está vazio');
        }else if($email == ''){
            Form::alert('erro','Email está vazio');
        }else if($senha == ''){
            Form::alert('erro','Senha está vazio');
        }else if($cpfcnpj == ''){
            Form::alert('erro','CPF/CNPJ está vazio');
        }else if($data_nascimento == ''){
            Form::alert('erro','Data de nascimento está vazio');
        }else if($cidade == ''){
            Form::alert('erro','Cidade está vazio');
        }else if($estado == ''){
            Form::alert('erro','Estado está vazio');
        }else if($telefone == ''){
            Form::alert('erro','Telefone está vazio');
        }else{
            Form::cadastrar($nome,$email,$senha,$cpfcnpj,$oque,$data_nascimento,$cidade,$estado,$telefone,$saldo);
            Form::alert('sucesso','usuario' .$nome. 'cadastrado com sucesso!');
            
            $sqlUsuario = Mysql::conectar()->prepare("SELECT * FROM 'usuariosy' WHERE 'usuariosy' = ?");
            $sqlUsuario-> execute(array($email));
       
            if($sqlUsuario->rowCount() == 1) {
                 echo "Usuario já cadastrado";
            } 
        }
    }
 
  


    ?>
    <br>
    <br>
        <form  method="POST" name="usuario" action="Forms.php" enctype="/multipart/from-data"  >
            <fieldset>
                <legend><b>Fazer Conta</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome completo</label>
                </div>
                
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email"  class="labelinput">Gmail</label>
                </div>
                <br>
                
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha"  class="labelinput">Senha</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cpfcnpj" id="cpfcnpj" class="inputUser" required>
                    <label for="cpfcnpj"  class="labelinput">CPF/CNPJ</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cpfcnpj" id="cpfcnpj" class="inputUser" required>
                    <label for="cpfcnpj"  class="labelinput">CPF/CNPJ</label>
                </div>
                <br>
                
               
                <p>Tipos:</p>
                <input type="radio"  id="oque" name="oque" value="contratar" >
                <label for="contratar">Contratar</label>
                <br>
                <input type="radio"  id="oque" name="oque" value="busco_um_emprego">
                <label for="busco_um_emprego">Busco um Emprego</label>
                <br>
               
                <br>
                <p>como nós conheceu</p>
                <input type="radio"  id="balance" name="balance" value="0" >
                <label for="0">por amigo</label>
                <br>
                <input type="radio"  id="balance" name="balance" value="0">
                <label for="0">por anucio</label>
                <br>
                <br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br>
                <br>
                
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelinput">Cidade</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelinput">Estado</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelinput">Telefone</label>
                </div>

                <br>
                
                <br>
                
                
                <input type="submit" name="submit" id="submit" value="submit">
                <input type="hidden" name="form" id="f_form">
                <a href="login.php">já tenho conta</a>
            </fieldset>
        </form>
    </div>
</body>
</html>