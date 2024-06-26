<?php
include('./conexao.php');
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>vaga</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicoin.png">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
      <!-- header-start -->
      <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="inicio.php">
                                        <img style="width: 40px; height: 40px;" src="img/hb.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul  id="navigation">
                                            <li><a href="inicio.php">Casa</a></li>
                                            <li><a href="curso.php">curso </a></li>
                                            <li><a href="dashboard/dashboard.php">dashboard</a></li>
                                            <li><a href="rendaextra.php">Renda Extra</a></li>
                                            <li><a href="list.php">Ver vagas</a></li>
                                            <li><a href="sobre.php">sobre </a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="phone_num d-none d-xl-block">
                               
                                    </div>
                                    
                                    
                                    <div class="d-none d-lg-block"> 
                                   
        
         
                                        <a class="boxed-btn3" href="dashboard/dashboard.php">
                                            dashboard</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->




<?php
//aqui vamos chamar os duas pastas aonde ter as configurações
		require_once './post/system/config.php';
		require_once './post/system/database.php';
//aqui vemos se o id foi enviado com suscesso
	if (!isset($_GET['id']) || empty($_GET['id']))
		header('Location: list.php');
	else {
//aqui vamos pegar as duas variaveis pela foi eita uma prevenção de ataques de injeção SQL
		$id 	= DBEscape (strip_tags(trim($_GET['id'])));
		$post 	= DBRead('posts', "WHERE id = '{$id}' LIMIT 1");

		if ($post) {
			$post = $post[0];
			$upVisitas = array(
				'visitas' => $post['visitas'] + 1
			);
            //aqui vamos fazer um up nos post caso o usuário visitar
			DBUpdate('posts', $upVisitas, "id = '{$id}'");
            $_SESSION['visited_post_' . $id] = true;
		}

	}
?>



	<?php if ($post): ?>

	

	<?php endif; ?>


 <!-- bradcam_area  -->
 <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3><?php echo $post['titulo']; ?>
					</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <?php
include_once('./config.php');




if(!empty($_GET['id']))

{
  

  $id = $_GET['id'];

  $sqlSelect = "SELECT * FROM usuariosy WHERE id=$id";

  $result = $conn ->query($sqlSelect);

  if($result->num_rows > 0)
  {

  }




while($user_data = mysqli_fetch_assoc($result))
{
  $cidade = $user_data['cidade'];
  
}
}




?>
	

    <div class="job_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="job_details_header">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/1.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="#"><h4><?php echo $post['titulo']; ?></h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i><?php echo $cidade; ?></p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> Tempo parcial</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="descript_wrap white-bg">
                        <div class="single_wrap">
                            <h4>Descrição do trabalho</h4>
                            <p><?php echo $post['conteudo']; ?></p>
                            <p></p>
                        </div>
                        <div class="single_">
                            <h4></h4>
                            <ul>
                                <li> 
                                </li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="single_">
                            <h4></h4>
                            <ul>
                                <li>
                                </li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="single_wrap">
                            <h4></h4>
                            <p></p>
                        </div>
                    </div>
                    <div class="apply_job_form white-bg">
                        <h4>Candidate-se
                        </h4>
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                  
                                </div>
                             
                                <div class="col-md-12">
                                    <div class="submit_btn">
									<a  style="float: right;" href="<?php echo $post['autor']; ?>" class="boxed-btn3 w-100"> Fale comigo Agora </a>
										 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="job_sumary">
                        <div class="summery_header">
                            <h3>Trabalho</h3>
                        </div>
                        <div class="job_content">
                            <ul>
                                <li>Publicado em:
                                    <span><?php echo date('d/m/Y', strtotime($post['data'])) ?></span></li>
                                <li>Quando precisa?: <span>Hoje</span></li>
                           
                                <li>Localização: <span><?php echo $cidade; ?></span></li>
                                <li>Natureza do trabalho: <span> Parcial</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="share_wrap d-flex">
                        
                    </div>
                    <div class="job_location_wrap">
                        <div class="job_lok_inner">
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

   <!-- footer start -->
   <footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="footer_logo">
                            <a href="#">
                                <img style="width: 49px;
                                height: 45px
                            px
                            ;" src="img/hb.png" alt="">
                            </a>
                        </div>
                        <p>
                            vagasurgentebr@gmail.com <br>
                            +55************** <br>
                            600/D, Brasil, São paulo
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                        <h3 class="footer_title">
                            Companhia
                        </h3>
                        <ul>
                            <li><a href="sobre.html">sobre nós </a></li>
                            <li><a href="#"> </a></li>
                            <li><a href="mandarprojeto.html">Publicar Um Trabalho
                            </a></li>
                            <li><a href="sobre.html">FAQ</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <h3 class="footer_title">
                            Categoria
                        </h3>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                        <h3 class="footer_title">
                            Se Inscrever
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Se Inscrever</button>
                        </form>
                        <p class="newsletter_text">deseja receber novidades do nosso site manda o seu email para nós, fique tranquilo nós também não gostamos de spam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="inicio.html">vagasurgentebr</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
</body>

</html>

