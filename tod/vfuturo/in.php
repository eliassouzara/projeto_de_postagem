<?php
 session_start();

include_once('conexao.php');
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
 
}
$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $mysqli->query($sql);

print_r($result);
 
            

          

           

        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vaga</title>
</head>
<body>
    bem vindo <?php echo $_SESSION['nome']; ?>. 
    <p>
        
        <a href="logout.php">Sair</a>
    </p>
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nome</th>
      <th scope="col">oque</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    while($user_data = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$user_data['oque']."</td>";
}
?>
  </tbody>
</table>
</div>
</body>
</html>