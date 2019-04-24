<?php
    require('config.php');
    include_once 'ProduitC.php';
  $p = new ProduitC();

    session_start(); 
    if(!isset($_SESSION['username']))
    {
        header("location: index2.php");
    }
   
    $username=$_SESSION['username'];
    $email=$_SESSION['email'];
    $name=$_SESSION['name'];
    $password=$_SESSION['password'];

    

?>

<!doctype html>
<html class="no-js" lang="">
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BBN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->


    <!-- =========================
        Loding All Stylesheet
    ============================== -->
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- =========================
        Loding Main Theme Style
    ============================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">

    <!-- =========================
        Header Loding JS Script
    ============================== -->
    <script src="js/modernizr.js"></script>
  </head>
  <body id="vigo_body">
  

    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="vigo-loder">
        <div class="sk-rotating-plane"></div>
    </div>

    <!-- ==============================
        Header top
    =================================== -->
    <header class="header-top navbar navbar-light bg-light bg-green">
        <div class="container custom-container pd-0">
            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 pd-0 d-flex justify-content-md-start align-items-xl-center">
                <div class="social-media display-inline-block">
                    <a href="#"><i class="white fa fa-skype" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/channel/UC8eMyfhie1Omof-wQmOiJtg" target="_blank"><i class="white fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/wditsolution/" target="_blank"><i class="white fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/wditsolutions" target="_blank"><i class="white fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="white fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-8 col-lg-6 col-xl-8 pd-0 d-flex justify-content-end">
                <div class="header-info d-flex flex-nowrap">
                    <div class="header-meta bg-white media text-center d-flex align-items-center d-inline-flex">

                        
                        <a href="#"  class="btn  btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none">
                             <img src=<?php echo $_SESSION['image']; ?> class="img-circle profile_img" alt=""  class="img-circle profile_img" width="30" height="30">
                        <?php  echo $username; ?></a>
                        
                        <a href="logout.php"  class="btn  btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none">Logout </a>

                    </div>


                    <div class="header-meta header-meta-search-btn media d-flex align-items-center d-none d-lg-block d-inline-flex">

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==============================
        Main Navbar
    =================================== -->
    <section class="main-nav bg-white" id="sticker">
        <div class="container custom-container">
            <nav class="navbar-expand-lg navbar-light d-lg-flex justify-content-lg-end pos-r">
                <div class="main-logo text-center d-lg-inline-flex justify-content-start d-lg-flex align-items-lg-center">
                    <a class="navbar-brand mr-0" href="index.php">
                        <img src="img/logo.png" class="img-fluid header-logo" alt="Vigo Logo">
                    </a>
                </div>
                <div class="d-flex justify-content-between d-lg-inline-flex justify-content-lg-between">
                    <div class="p-2">
                        <button class="navbar-toggler cursor-pointer focus-none" type="button" data-toggle="collapse" data-target="#header-nav-btn" aria-controls="header-nav-btn" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="header-nav-btn">
                            <div class="navbar-nav mr-auto mt-2 mt-lg-0"></div>
                            <div class="my-2 my-lg-0">
                                <ul class="navbar-nav" id="nav">
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="index.php#about-section">Produits</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link lato" href="index.php#footer">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 d-lg-flex align-items-lg-center">
                        <a href="https://www.amazon.com/" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none">ORDER</a>
                    </div>
                </div>
            </nav>     
        </div>
    </section>

   

    <!-- ==============================
        footer Section
    =================================== -->
    <footer id="footer">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                    <div class="footer-box white mr-0">
                        <!-- To change after Image upload -->
                        <img src=<?php echo $_SESSION['image']; ?> class="img-circle profile_img" alt="" width="100" height="100"> 
                        <h5 class="footer-title pos-r">

                            Bonjour <?php echo $username; ?>,
                        </h5>
                        <div class="contact-address">
                            <ul class="list-group white">
                                <li class="list-group-item pd-0 bg-transparent border-transparent">
                                    <a href="tel:+21658995261" class="white"><i class="fa fa-phone" aria-hidden="true"></i> +(216) <?php echo $phone; ?> </a>
                                </li>
                                <li class="list-group-item pd-0 bg-transparent border-transparent">
                                    <a href="mailto:Houcem_bansalem@live.fr" class="white"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $email; ?></a>
                                </li>
                                <li class="list-group-item pd-0 bg-transparent border-transparent d-flex align-items-start border-0">
                                   <i class="fa fa-map-marker" aria-hidden="true"></i>
                                   <p class="display-inline-block mr-0"><?php echo $address; ?> <br>,Tunisie</p>
                                </li>
                                <li class="list-group-item pd-0 bg-transparent border-transparent d-flex align-items-start border-0">
                                    <a class="btn btn-warning" style="margin-right:13px;" href="modifierprofile.php">Modifier</a> <br>
                                    <form method="POST" action="deactivate.php">
                                        <input type="hidden" value="<?php echo $email; ?>" name="email">
                                        <button class="btn btn-danger" type="submit">Désactiver</button>
                                    </form>
                                     <br>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 d-none d-xl-block footer-box-border"></div>
                
                    <div class="footer-box footer-contact-form" style="margin-left: 50px;">
                        <h4 class="footer-title vigo-send-message pos-r white">
                                 Mes Produits Favoris 
                         </h4><br>

                    <div class="mixitup row">
                    <?php foreach($liste as $l){ ?>
                        <div class="mix category-a col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" data-order="1">
                            <div class="filtr-item">         
                                <div class="gallery-hover">
                                    <div class="gallery-img-box pos-r">
                                        <a href="../../uploads/<?php echo $l['image']?>" class="image-link gallery-overlay" >
                                            
                                            <img class="img-fluid" src="uploads/<?php echo $l['image'] ?>" alt="sample image">
                                        </a>
                                    </div>
                                    <div class="gallery-content-box text-center">
                                        <h6 style="color: white;" class="item-desc ral mr-0"><?php echo $l['nom'] ?></h6>
                                        <p style="color: white;" class="gallery-category ral mr-0" >Price: <?php echo $l['prix'] ?></p>
                                        <div class="social-media display-inline-block">
                                               


                                         </div>
                                    </div>
                              
                         </div>
                         </div>
                        </div>

                    <?php } ?>
                    </div>
                    </div>
                </div>
   

            </div>
        </div>
    </footer>
    <div class="copyright bg-black">
        <div class="container custom-container text-center">
            <div class="row">
                <div class="col-12 col-md-8 d-xl-flex justify-content-start">
                    <div class="copyright-box">
                        <div class="social-media display-inline-block">
                            <a href="#"><i class="white fa fa-skype" aria-hidden="true"></i></a>
                            <a href="#"><i class="white fa fa-youtube-play" aria-hidden="true"></i></a>
                            <a href="#"><i class="white fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="white fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="white fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <p class="copyright-text white">
                            Copyright &copy; W-Product 2018. All Right Reserved
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- =========================
        Main Loding JS Script
    ============================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplePlayer.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>


  </body>

<!-- Mirrored from themeim.com/demo/vigo/demo/vigo-red/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2018 14:33:51 GMT -->
</html>
