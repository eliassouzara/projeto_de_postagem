


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

    <title>Register</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../favicoin.png" />
     <!-- Google Font -->
     <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="stylep.css" />
  

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
    <?php
// Verificar se o formulário foi enviado e é o formulário correto
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
        
        $sqlUsuario = Mysql::conectar()->prepare("SELECT * FROM `usuariosy` WHERE `usuariosy` = ?");

        $sqlUsuario->execute(array($email));

        if ($sqlUsuario->rowCount() > 0) {
            Form::alert('erro', 'E-mail já cadastrado');
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          Form::alert('erro', 'Formato de e-mail inválido');
      }
      
}


}


?>

  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.php" class="app-brand-link gap-2">
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
                  <span class="app-brand-text demo text-body fw-bolder">Vagasurgentes</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">A aventura começa aqui 🚀</h4>
              <p class="mb-4">Falta poucos passos para seguir :D</p>


            

    <form  method="POST" name="usuario" action="../Forms.php" enctype="/multipart/from-data"  >
                <div class="mb-3">
                  <label for="username" class="form-label">
                    Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>

              
                <div class="mb-3">


               
 
                  
                  <label for="email" class="form-label">Email</label>
                  <input type="text" name="email" id="email" class="form-control" required>
                  
                  <div style="color: red;" id="resultado"></div>
                </div>

                
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Senha</label>
                  <div class="input-group input-group-merge">
                  <input type="password" name="senha" id="senha" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" class="form-control" aria-describedby="password" required>
                    
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3 form-password-toggle">
                 
    
   
                  <div class="input-group input-group-merge">
                  
                   
                    
                  </div>
                </div>
                <label>Gênero:</label>
      <select class="form-control" name="gen" required>
        <option value="CG">Escolha o sexo..</option>
        <option value="Male">Masculino</option>
        <option value="Female">Feminino</option>
        <option value="Others">Outros</option>
      </select>

     <br>
      <div class="inputBox">
      <label for="cpfcnpj"  class="labelinput">CNPJ/CPF</label><span class="error">*</span>
                    <input type="text" name="cpfcnpj" id="cpfcnpj" class="form-control" >
                    
                </div>
                <br>
               
                
                <div class="containerp">
      <div class="inp-wrapperd">
        <div class="date-wrapperd">
          <label for="date-12">Data de Nascimento:</label>
          
          <input type="date" name="data_nascimento" class="form-control" required>
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
            
              
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Cidade</label>
                  <div class="input-group input-group-merge">
                  <input type="text" name="cidade"  class="form-control"  required>
                    
                  </div>
                </div>
             
                
                
                <div class="inputBox">
                <label for="estado" class="labelinput">Estado</label>
                    <input type="text" name="estado" id="estado" class="form-control" required>
                   
                </div>
                
                <br>
                <div class="inputBox">
                <label for="telefone" class="labelinput">Telefone</label>
                    <input type="text" name="telefone" id="telefone" class="form-control" required>
                   
                </div>

                <br>
                
                <br>
                </div>
                
                    
                  </div>
                
                

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required/>
                    <label class="form-check-label" for="terms-conditions">
                    Eu concordo com
                      <a href="javascript:void(0);">a política de privacidade & os termos </a>
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary d-grid w-100" name="update" id="update" >Entra</button>
                
   
            
              </form>
             

              <p class="text-center">
                <span>Já tem uma conta?</span>
                <a href="login.php">
                  <span>Faça login em vez disso</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../lo/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../lo/assets/vendor/libs/popper/popper.js"></script>
    <script src="../lo/assets/vendor/js/bootstrap.js"></script>
    <script src="../lo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../lo/assets/vendor/js/menu.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">

$("input[name='email']").on('blur', function(){
  var email = $(this).val();
  $.get('ati.php?email=' + email, function(data){
    $('#resultado').html(data);
  });
});

$("input[name='cpfcnpj']").on('blur', function(){
  var cpfcnpj = $(this).val();
  $.get('ati2.php?cpfcnpj=' + cpfcnpj, function(data){
    $('#resultadoc').html(data);
  });
});

</script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../lo/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
