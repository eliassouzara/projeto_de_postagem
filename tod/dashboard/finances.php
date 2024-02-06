<?php

include('../protect.php');

include('../conexao.php');
if(!isset($_SESSION)){
    session_start();
}
require_once '../post/system/config.php';
	require_once '../post/system/database.php';



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>finances || Vagas urgentes</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="./vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="../../css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../favicoin.png" />
    
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <style>
      #text-success {
    color: #28a745!important
}

#text-success:focus,
#text-success:hover {
    color: #1e7e34!important
}
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="dashboard.php">
            <img  style="max-width: 57%;
    height: 61px;" src="../hb.png" alt="logo" class="logo-dark" />
          </a>
          <a  style="max-width: 240%;
    height: 57px;"class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="../hb.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Bem-vindo painel 2022</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
             <!-- <i class="icon-magnifier"></i>
              

              <input type="search" class="form-control" placeholder="Search Here" title="Search here"> -->
            </form>
            <!--
                
             
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
            -->
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
               <!-- <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                  
                  
                </a>
              </div>
            </li>
            -->
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-3">
                  <i class="flag-icon flag-icon-br"></i>
                </div>
                <span class="profile-text font-weight-normal">Português</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-br"></i> Português </a>
                  <!--- 
                <a class="dropdown-item">

                  <i class="flag-icon flag-icon-fr"></i> French </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ae"></i> Arabic </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ru"></i> Russian </a>
              </div>
              -->
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="per.png" alt="Profile image"> <span class="font-weight-normal"> <?php echo $_SESSION ['nome']; ?> </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img style="margin-left: 2px;
    width: 91px;" class="img-md rounded-circle" src="per.png" alt="Profile image">
                  <br>
                  <br>
                  <?php echo $_SESSION ['nome']; ?>
                  <br>
</br>
                  <?php echo $_SESSION ['email']; ?> 

                 
                    
                    
                </div>
                <a class="dropdown-item" href="perfil.php"><i class="dropdown-item-icon icon-user text-primary"></i> Meu perfil </a>
                <a class="dropdown-item" href="suporte.php"><i class="dropdown-item-icon icon-speech text-primary"></i> Suporte </a>
                <a class="dropdown-item" href="finances.php"><span class="iconify" data-icon="bi:cash-coin" style="color: #3BDFE4; margin-right: 11px;"></span>   Saldo <span class="badge badge-pill badge-success">BETA</span> </a>
                <a class="dropdown-item" href="../sobre.php"> <i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a class="dropdown-item" href="../logout.php"><i class="dropdown-item-icon icon-power text-primary"></i> Sair</a>

                  
                </a>
                
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li style="
    margin-top: 28px;
" class="nav-item nav-profile">
              <a href="perfil.php" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="per.png" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $_SESSION ['nome']; ?></p>
                  <p class="designation">online</p>
                
                </div>
                <div class="icon-container">
                 
                  
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">PAINEL</span>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
              <li  class="nav-item">
              <a class="nav-link" href="../inicio.php">
                <span style="color: #b3b3b3;
    font-family: ;
    font-weight: 600;" class="menu-title">Voltar</span>
             
              </a>
             
            </li>
            <?php
  if(isset($_POST["txtValor"])){
  $string = $_POST["txtValor"];
  echo md5($string);
}
?>
            <li class="nav-item nav-category"><span class="nav-link">OPÇÕES</span></li>
            <li class="nav-item">
              <a class="nav-link" href="../post/exibe.php?id=<?php echo $_SESSION['id']; ?>">
              
		
                <span style="color: #b3b3b3;
    font-family: ;
    font-weight: 600;" class="menu-title">Ver Minhas Postagem</span>
                <i class="icon-layers menu-icon"></i>


             
	<?php
		$posts = DBRead('posts', "WHERE status = 1 ORDER BY data DESC");

		if (!$posts)
			echo '';
		else
			foreach ($posts as $post): 
	?>
	
		
    
		
		</a>
	

	
	
<?php endforeach; ?>
              </a>
            
              <li class="nav-item">
                <a class="nav-link" href="../post-project.php">
                  <span style="color: #b3b3b3;
    font-family: ;
    font-weight: 600;"  class="menu-title">Fazer postagem</span>
                  <i style="padding-left: 62px; color: #626262;" class="icon-arrow-up-circle" aria-hidden="true"></i>

                </a>
              
            <li class="nav-item">
              <a class="nav-link" href="finances.php">
                <span style="color: #b3b3b3;
    font-family: ;
    font-weight: 600;"  class="menu-title">Meu Saldo</span> <span class="badge badge-pill badge-success">BETA</span>
                <span class="iconify" data-icon="bi:cash-coin" style="margin-left: auto; color: #626262;"></span>
              </a>
            </li>
       
            <!---
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">ids</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartist.html">
                <span class="menu-title">Charts</span>
                <i class="icon-chart menu-icon"></i>
              </a>
            </li>
            -->
            
            <li class="nav-item">
              <a class="nav-link" href="../list.php">
                <span style="color: #b3b3b3;
    font-family: ;
    font-weight: 600;" class="menu-title">Ver Vagas</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./memoria/jogos.php">
                <span style="color: #b3b3b3;
    font-family: ;
    font-weight: 600;" class="menu-title">jogos</span>
           <svg style="margin-left: auto; color: #626262;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
  <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"/>
  <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
</svg>
              </a>
      </li>
            
            
            <li class="nav-item nav-category"><span class="nav-link">classificação</span></li>
            <li class="nav-item">
              <a class="nav-link" href="../dashboard/fidi/index.php">
                <span style="color: #b3b3b3;
    font-family: ;
    font-weight: 600;"  class="menu-title">Master</span>
                <i class="icon-doc menu-icon"></i>
              </a>
            
            </li>
           <!---  <li class="nav-item pro-upgrade">
              <span class="nav-link">
                <a class="btn btn-block px-0 btn-rounded btn-upgrade" href="https://www.bootstrapdash.com/product/stellar-admin-template/" target="_blank"> <i class="icon-badge mx-2"></i> Upgrade to Pro</a>
              </span>
            </li>
            -->
          </ul>
        </nav>
        <!-- partial -->
       
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row purchace-popup">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
     
         
             
              <span class="card-body d-lg-flex align-items-center">
                    
                    
                    
                  </span>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">SALDO ATUAL</h4>
                    
                    </p>
                   
                      <h1 style="text-align: center;">SALDO É:</h1>
                      <h1 style="font-size: 135px;
    text-align: center;">R$<?php echo $_SESSION ['saldo'];?></h1>


<a href=""> <button type="button" class="btn btn-success" >Sacar</button> </a>

<a href=""><button type="button" class="btn btn-info">adicionar saldo</button> </a>

<a href=""><button type="button" class="btn btn-primary">Pagar pessoa</button> </a>
<button type="button" class="btn btn-success">Histórico de transições</button>

  <button type="button" class="btn btn-danger">volar</button>
  <h4  style="color:red;"class="mb-lg-0">Esta área encontra-se em fase de desenvolvimento. O presente documento apresenta o layout previsto para a conclusão dos testes, no qual será possível receber compensações financeiras por serviços prestados. Empresas e indivíduos terão a capacidade de realizar transações, adicionar saldo e beneficiar-se de uma política isenta de taxas, assegurando que 100% do lucro seja direcionado ao beneficiário. <a href="" >Veja os termos de condições</a> </h4>
                  </div>
                </div>
              </div>
               
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:./partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © vagasurgentes 2022<br>
                </span>
              
                           
              </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./js/off-canvas.js"></script>
    <script src="./js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>