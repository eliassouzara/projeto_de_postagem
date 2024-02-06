<?php
include("conexao.php");

 $msg = false;
 
 if(isset($_FILES['arquivo'])){

    $extensao = strtolower(substr ($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "upload/";


    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

    $sql_code = "INSERT INTO arquivo (codigo, arquivo,) VALUES (null, '$novo_nome', NOW()";
    if($mysqli-> query($sql_code))
    $msg = "Arquivo enviado com sucesso!";
    else
    $msg = "Falha ao enviar arquivo";
 }6
?>




<h1>Upload</h1>
<?php if($msg != false) echo "<p>$msg </p>";?>
<from action="fotoosupload.php" method="POST" enctype="/multipart/from-data">
   Arquivo: <input type="file" name="arquivo">
<input type="submit" value="Salvar">

</from>