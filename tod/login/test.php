<?php



date_default_timezone_set("America/Sao_Paulo");

ini_set('smtp_port', '587');
    include('../conexao.php');
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
  <?php 
  if(isset($_POST['acao']) && $_POST['acao'] == 'recuperar'):
    $email = strip_tags(filter_input(INPUT_POST, 'emailRecupera', FILTER_SANITIZE_STRING));

    $verificar = mysql_query("SELECT 'email' FROM 'usuarioss' WHERE email = '$email'");
    if(mysql_num_rows($verificar) == 1){
      $codigo = base64_encode($email);
      $data_expirar = date('Y-m-d H:i:s', strtotime('+1 Day'));

      $mensagem = '<p>Recebemos uma  tentativa de recuperação de senha para este e-email, caso não tenha sido você desconsidere este e-mail, caso contrário clique no link abaixo 
      <a href="./recuperar.php?codigo='.$codigo.'">Recuperar Senha</a></p>';

      $email_remetente = 'vagasurgentes@recuperaçãodesenhas.com';

      $headers = "MIME-Version: 1.1\n";
      $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
      $headers .= "From: $email_remetente\n";
      $headers .= "Return-Path: $email_remetente\n";
      $headers .= "Reply-To: $email\n";
      $inserir = mysql_query ("INSERT INTO  'codigos' SET codigo = '$codigo' data = '$data_expirar'");
      if(mail("$email", "Assunto", "$mensagem", $headers, "-f$email_remetente")){
        echo 'Enviamos um e-mail com um link para recuperação de senha';
      }
    }
   
  endif;
  ?>
  <form action="" method="post" enctype="multipart/form-data">
<?php 

if(isset($_GET['recuperar']) && $_GET['recuperar'] == 'sim'){
 ?>
 <input type="text" name="emailRecupera" value=""/>
 <input type="hidden" name="acao" value="recuperar"/>
 <input type="submit" value="Recuperar Senha"/>
 <a href="index.html">logar</a>
 <?php }else{?>
  <input type="text"name="emailLoga" value="">
  <input type="password" name="senhaLoga" value=""/>
  <input type="hidden" name="acao" value="logar"/>
  <input type="submit
  " value="Logar"/>
  <a href="?recuperar=sim">Esqueceu</a>

                <?php }?>
              </form>
</body>
</html>

