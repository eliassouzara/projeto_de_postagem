<?php
	require '../system/config.php';
	require '../system/database.php';
	
?>
<!DOCTYPE html>


<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="./lo/assets/"
  data-template="vertical-menu-template-free"
>
  <head>

    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Adicionar Postagem</title>

    <meta name="description" content="" />

	
	
	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	<script>tinymce.init({selector:'textarea'});</script>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./lo/assets/img/favicon/favicon.ico" />
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
    <link rel="stylesheet" href="./lo/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./lo/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./lo/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="./lo/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./lo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="./lo/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="./lo/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./lo/assets/js/config.js"></script>
   
  </head>


<body>
	
	<h2>
		Adicionar Postagem 
	</h2>
	<hr>
	<?php
		
		if(isset($_POST['publicar'])){
		$form ['id'] 	= DBEscape(strip_tags( trim($_POST['id'])));
		$form ['titulo'] 	= DBEscape(strip_tags( trim($_POST['titulo'])));
		$form ['autor'] 	= DBEscape(strip_tags( trim($_POST['autor'])));
	
		$form ['status'] 	= DBEscape(strip_tags( trim($_POST['status'])));
		$form ['data']		= date('Y-m-d H:i:s');
		$form ['conteudo'] 	= str_replace('\r\n', "\n", DBEscape(trim($_POST['conteudo'])));
		$form = DBEscape ($form);

		if (empty($form['titulo']))
			echo "Preencha o campo Título.";
		else if (empty($form['autor']))
			echo "Preencha o campo Autor.";
		else if (empty($form['status']) && $form['status'] != '0')
			echo "Preencha o campo status.";
		else if (empty($form['conteudo']))
			echo "Preencha o campo conteúdo.";
		else{

			$dbCheck = DBRead( 'posts', "WHERE titulo = '". $form['titulo']  ."'");
			if ($dbCheck)
				echo "Desculpe mas já existe uma postagem com este título.";
				
			else {

				if (DBCreate('posts', $form))
					echo "Sua postagem foi enviada com sucesso!";
					
				else
					echo "Desculpe, ocorreu um erro...";
			}
		}
		

	echo '<hr>';
	}
	?>



</body>
</html>




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
                  <span class="app-brand-text demo text-body fw-bolder">
		Adicionar Postagem 
	</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Insira aqui á baixo as informações adicionais desejadas</h4>
              <p class="mb-4"></p>



              <form id="formAuthentication" class="mb-3" method="POST" action="" >
                <div class="mb-3">
                  <label for="username" class="form-label">
				  Titulo do anúncio</label>
                  <input
                    type="text"
                    class="form-control"
                    id="titulo"
                    name="titulo"
                    placeholder=""
                    autofocus
                  />
                </div>
                <div class="mb-3">


               
 
                  
                  <label for="email" class="form-label">seu id</label>
                  <input type="text" class="form-control" id="id" name="id" placeholder="" required />
               
                  
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Autor</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="text"
                      id="autor"
                      class="form-control"
                      name="autor"
                      
                     required
                    />
                 
                  </div>
                </div>
                

                <div class="mb-3">
                  <label for="cpfcnpj" class="form-label">Conteúdo</label>
				  <textarea placeholder="Aqui pode dizer toda a descrição da vaga." class="form-control" name="conteudo" cols="50" rows="15" ></textarea> 
                  <div  style="color: red;" id="resultadoc"></div>
                </div>
               
				<label>Status</label><br>
			
			<select name="status">
				<option value="1" selected>Ativo</option>
			
			</select>

   

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required/>
                    <label class="form-check-label" for="terms-conditions">
                    Eu concordo com
                      <a href="javascript:void(0);" require>a política de privacidade & os termos </a>
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary d-grid w-100" name="publicar" id="submit" value="verificar">Publicar Agora!</button>
                
   
            
              </form>
             

             
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>
    

    <!-- / Content -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="./lo/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./lo/assets/vendor/libs/popper/popper.js"></script>
    <script src="./lo/assets/vendor/js/bootstrap.js"></script>
    <script src="./lo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="./lo/assets/vendor/js/menu.js"></script>
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
    <script src="./lo/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
