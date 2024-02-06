<?php

    include('../conexao.php');

    if(isset($_GET['codigo'])){
        $codigo = $_GET['codigo'];
        $email_codigo = base64_decode($codigo);

        $selecionar = mysql_query("SELECT * FROM 'codigos' WHERE codigo = '$codigo' AND data > NOW()");
        if(mysql_num_rows($selecionar) >= 1){
            if(isset($_POST['acao']) && $_POST[ acao] == 'mudar'){
                $nova_senha = $_POST['novasenha'];
                $atualizar = mysql_query("UPDATE 'usuariosy' SET 'senha' = '$novasenha' WHERE 'email' = '$email_codigo'");
                if($atualizar){
                    $mudar = mysql_query("DELETE FROM 'codigos' WHERE codigo = '$codigo'");
                    echo 'A senha foi modificada com sucesso!';
                }
            } 
?>

<h1>Digite a senha nova</h1>
<form action="" method="post" enctype="multipart/form-data">
<input type="password" name="novasenha" value=""/>
 <input type="hidden" name="acao" value="mudar"/>
 <input type="submit" value="Mudar Senha"/>
</form>

<?php
        }else{
            echo'<h1>Desculpe mais este link já expirou!</h1>';
        }
    }
?>
