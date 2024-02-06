if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
        echo "emaill";

    } else if(strlen($_POST['senha']) == 0){
        echo "senha";
    } else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code ="SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("falha" . $mysqli->error);

        $quantidade = $sql_query->num_rows;
        
        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(password_verify($senha, $usuario['senha'])){
                echo "Usuario logado!";

            }else{
                echo "Falha ao logar! Senha ou e-mail incorretos";
            }

            if(!isset($_SESSION)) {
                session_start();
            }
            

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            

            header("Location: inicio.php");

        } else{
            echo"falha ao logar";
        }

    }
}