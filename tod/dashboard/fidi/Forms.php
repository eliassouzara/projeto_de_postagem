<?php  include("./conexao.php"); ?>

<?php
 
      $username = $_POST['username'];
      $password = $_POST['password'];
     
       
       
       
       

       $sql = "INSERT INTO feed(username,password)
       VALUES('$username','$password')";




       if (mysqli_query($conn, $sql)){
            header("location: sus.php");
       }else{
            echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
       } 
       
mysqli_close($conn);

$sql = Mysqli



    ?>