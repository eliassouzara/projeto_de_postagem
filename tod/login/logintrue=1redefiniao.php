<?php



include('../conexao.php');





if(isset($_POST['email'])){
    $email = $_POST['email'];
    
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM usuariosy WHERE email  = '$email' LIMIT 1";
 
    $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);

    $usuario = $sql_exec->fetch_assoc();
    if(password_verify($senha, $usuario['senha'])){

        echo "Usuario logado!";
        header("Location: ../inicio.php");
    }else{
        echo "Falha ao logar! Senha ou e-mail incorretos";
        header("Location: loginfalse+href=908234.php");
    }
    if(!isset($_SESSION)) {
        session_start();
    }
    

    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome'];
    $_SESSION['email'] = $usuario['email'];
    $_SESSION['saldo'] = $usuario['saldo'];
    $_SESSION['oque'] = $usuario['oque'];
    $_SESSION['cidade'] = $usuario['cidade'];
    $_SESSION['codigo'] = $usuario['codigo'];
    $_SESSION['arquivo'] = $usuario['arquivo'];
    

  
}

?>

<!DOCTYPE html>


<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../lo/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../img/favicoin.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../lo/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../lo/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../lo/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../lo/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../lo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../lo/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../lo/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../lo/assets/js/config.js"></script>
  </head>

  <body>
  <style>
    .alert {
  padding: 20px;
  background-color: #04AA6D;
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
    </style>
    <!-- Content -->
    <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  foi enviado um email de redefinição com sucesso 🎉 
</div>
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <svg
                      width="25"
                      viewBox="0 0 25 42"
                      version="1.1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                      <defs>
                        <path
                          d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                          id="path-1"
                        ></path>
                        <path
                          d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                          id="path-3"
                        ></path>
                        <path
                          d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                          id="path-4"
                        ></path>
                        <path
                          d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                          id="path-5"
                        ></path>
                      </defs>
                      
                    </svg>
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">vagasurgentes</span>
                </a>
              </div>
              <!--/logo -->
              <h4 class="mb-2">Bem-vindo ao vagasurgentes ! 👋</h4>
              <p class="mb-4">Faça login na sua conta e comece a aventura</p>

              <form id="formAuthentication" class="mb-3" action="" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">EMAIL</label>
                  <input
                    
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Digite seu e-mail"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">SENHA</label>
                  
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="senha"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Lembre de mim </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Entrar</button>
                </div>
              </form>

              <p class="text-center">
                <span>Novo(a) em nossa plataforma?</span>
                <a href="cadastro.php">
                  <span>Crie a sua conta aqui</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../lo/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../lo/assets/vendor/libs/popper/popper.js"></script>
    <script src="../lo/assets/vendor/js/bootstrap.js"></script>
    <script src="../lo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../lo/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../lo/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
