<?php
  include_once 'ProduitC.php';
  if (isset($_POST["id"])){
  $p = new ProduitC();
  $liste = $p->afficherProduitParId($_POST["id"]);
  $c = $p->afficherCategorie();
 
?>
<?php
/*
* Author: Rohit Kumar
* Website: iamrohit.in
* Date: 09-03-2016
* App Name: Star rating system
* Description: Star rating demo using Jquery, PHP and Mysql
*/
include_once('ratingg.php')
?>
<!doctype html>
<html class="no-js" lang="">
  
<!-- Mirrored from themeim.com/demo/vigo/demo/vigo-red/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2018 14:32:44 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VIGO-Health Supplement Landing Page HTML5 Template</title>
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
    <link rel="stylesheet" href="css/range.css">

    <!-- =========================
        Loding Main Theme Style
    ============================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">

    <!-- =========================
        Header Loding JS Script
    ============================== -->
    <script src="js/modernizr.js"></script>

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
<link href="css2/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.js"></script>
    
    <script src="js2/star-rating.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/rech.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


   
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
                        <button type="button" class="btn btn-primary media bg-white black cursor-pointer pd-0 border-transparent border-0 focus-none header-meta-main-btn" data-toggle="modal" data-target="#header-login">
                            <i class="fa fa-user mr-auto" aria-hidden="true"></i>
                            <span class="d-flex align-self-xl-center">
                                <span class="media-body d-none d-xl-block white">
                                    Account Log In
                                </span>
                            </span>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="header-login" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group col-12 pd-0 mr-0">
                                                <input type="text" class="form-control" placeholder="User Name">
                                            </div>
                                            <div class="form-group col-12 pd-0 mr-0">
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="col-12 pd-0">
                                                <button type="submit" class="btn btn-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none cursor-pointer">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-meta bg-white media d-flex align-items-center d-inline-flex">
                        <button type="button" class="btn btn-primary media bg-white black cursor-pointer pd-0 border-transparent border-0 focus-none header-meta-main-btn" data-toggle="modal" data-target="#header-faq">
                            <i class="fa fa-question mr-auto" aria-hidden="true"></i>
                            <span class="d-flex align-self-xl-center">
                                <span class="media-body d-none d-xl-block white">
                                    Ask Your Question
                                </span>
                            </span>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="header-faq" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group col-12 pd-0 mr-0">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group col-12 pd-0 mr-0">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group col-12 pd-0 mr-0">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Envoyez votre massage"></textarea>
                                            </div>
                                            <div class="col-12 pd-0">
                                                <button type="submit" class="btn btn-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none cursor-pointer">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-meta header-meta-ph bg-white media d-flex align-items-center d-inline-flex">
                        <i class="fa fa-phone mr-auto" aria-hidden="true"></i>
                        <div class="media-body d-none d-xl-block">
                           <a href="tel:+0011421426" class="white">+001 142 1426</a>
                        </div>
                    </div>
                    <div class="header-meta header-meta-search-btn media d-flex align-items-center d-none d-lg-block d-inline-flex">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary header-meta-search-icon media bg-white black cursor-pointer pd-0 border-transparent border-0 focus-none header-meta-main-btn" data-toggle="modal" data-target="#header-search">
                            <i class="fa fa-search mr-auto" aria-hidden="true"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="header-search" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form class="search-form">
                                            <div class="form-group col-12 pd-0 mr-0">
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                            <div class="col-12 pd-0">
                                                <button type="submit" class="btn btn-primary bg-green border-transparent focus-none"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <a class="navbar-brand mr-0" href="index-2.html">
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
                                      
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="#about-section">Supplement</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="#features">Feature</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="#vigo-price">Price</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="#ingredients">Ingredient</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="#vigo-product">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="#footer">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </nav>     
        </div>
    </section>

    <!-- ==============================
        Slider Section
    =================================== -->
   
    
    <!-- ==============================
        Call To Action Section
    =================================== -->
   

    <!-- ==============================
        Features Section
    =================================== -->
   

    <!-- ==============================
        Services Section
    =================================== -->
   

    <!-- ==============================
        About Section
    =================================== -->
   

    <!-- ==============================
        Product Features Section
    =================================== -->
  

    <!-- ==============================
        Recommended Section
    =================================== -->
   

    <!-- ==============================
        Newsletter Section
    =================================== -->
   

    <!-- ==============================
        Gallery Section
    =================================== -->
   <!-- <section class="gallery">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        <h5 class="page-sub-title mr-0">Our Best</h5>
                        <h3 class="page-main-title mr-0">Product Gallery</h3>

<h1>Recherche de Produit </h1>
 <form  action="test.php" method="GET" style="margin:auto;max-width:300px">
                                          <input type="text" placeholder="Search.." name="nom" >
                                           <button type="submit" value="rechercher" name="recherche"><i class="fa fa-search"></i></button>
                                                 </form>

                    </div>
                </div>

                <div class="col-12 col-sm-10 col-md-11 col-lg-12 col-xl-12">
                   
                    <div  class="btn-group gallery-filter-btn-group">

                        <div class="gallery-menu-box">
                           <button type="button"  data-filter="all" class="ral btn border-0   btn-secondary cursor-pointer focus-none">
                            All</button>
                            <button type="button" data-filter=".category-a" class="ral btn border-0 btn-secondary cursor-pointer focus-none" value="">Protein</button>
                            <button type="button" data-filter=".category-b" class="ral btn border-0 btn-secondary cursor-pointer focus-none" value="">Life Style</button>
                            <button type="button" data-filter=".category-c" class="ral btn border-0 btn-secondary cursor-pointer focus-none" value="">Nutrition</button>
                            <button type="button" data-filter=".category-d" class="ral btn border-0 btn-secondary cursor-pointer focus-none">Vitamins</button>
                        </div>
                    
                    </div>

                    <div class="mixitup row">
                    <?php foreach($c  as $l){ 
                        ?>
                        <form method="GET" action="produit_categorie.php">
                          <div class="mix category-a col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" data-order="1">
                            <div class="filtr-item">

                                  
                                <div class="gallery-hover">
                                    <div class="gallery-img-box pos-r">
                                        <!--<a href="../../uploads/<?php echo $l['image'] ?>" class="image-link gallery-overlay" >-
                                            
                                           <!--<div class="search-icon">
                                               <h6>Description: <?php echo $l['description'] ?></h6>
                                           </div>
                                            <img class="img-fluid" src="../../uploads/<?php echo $l['image'] ?>" alt="sample image">-
                                        </a>
                                    </div>
                                    <div class="gallery-content-box text-center">
                                        <input type="hidden" name="id" value="<?php echo  $l['id_categorie']?>">
                                        <input type="submit" name="n" value="<?php echo $l['nom_categorie'] ?>">
                                        
                                        <!--<p class="gallery-category ral mr-0" >Price: <?php echo $l['prix'] ?></p>--
                                    </div>
                                </div>
                            </div>
                        </div>  

                        </form>
                        
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- ==============================
        Price Section
    =================================== -->
   

    <!-- ==============================
        Process Section
    =================================== -->
   
    <!-- ==============================
        Ingredients Section
    =================================== -->
   

    <!-- ==============================
        Testimonial Section
    =================================== -->
   

    <!-- ==============================
        Product Section
    =================================== -->
    <section class="vigo-product" id="vigo-product">
        <div class="container custom-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        <h5 class="page-sub-title mr-0">Feature Product</h5>
                        <h3 class="page-main-title mr-0">Burm Fat With VIGO</h3>
                    </div>
                </div>
                
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                   
                    <div class="product-box">
                        <!-- Place somewhere in the <body> of your page -->
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <?php foreach($liste as $l){ ?>
                                <li>
                                    <img src="uploads/<?php  echo $l['image'] ?>" class="cursor-pointer"  alt="product image">
                                    
                                </li>
                                
                               
                                <!-- items mirrored twice, total of 12 -->
                                <?php }} ?>
                            </ul>
                        </div>
                    </div>
                 

                </div>

                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 product-box-content">
                    <div class="d-flex flex-column-reverse flex-md-column">
                        <div class="product-box">
                            <div class="product-box-title">
                                <h5><?php echo $l["nom"]?></h5>                            
                            </div>
                            <div class="d-flex justify-content-center justify-content-md-start">
                            <div class="product_rating d-flex">
                               <input value="<?= getRatingByProductId(connect(), $l["id"]); ?>" type="number" class="rating" min=0 max=5 
    step=0.1 data-size="md" data-stars="5" productId=<?php echo $l["id"]?>>
    </td>
    </tr></table>

     <script type="text/javascript">
        $(function(){
               $('.rating').on('rating.change', function(event, value, caption) {

                productId = $(this).attr('productId');
                $.ajax({
                  url: "ratingg.php",
                  dataType: "json",
                  data: {vote:value, productId:productId, type:'save'},
                  success: function( data ) {
                     alert("rating saved");
                  },
              error: function(e) {
                // Handle error here
                console.log(e);
              },
              timeout: 30000  
            });
              });

           


        });
    </script>
                               
                            </div>
                            </div>
                            <div class="product-price green lato">
                                 <?php foreach($liste as $l){ ?>
                               <p> Price:<?php echo $l['prix'] ?> DT </p>
                                 <?php } ?>
                            </div>
                            <div class="product-content">
                                A weight loss pill that focuses on only one element of your weight loss just won’t cut it. To get the body you deserve you need a solution that works from all angles. And that’s something you won’t get from most other weight loss products. A weight loss pill that focuses on only one element of your weight loss just won’t cut it. 
                            </div>
                            <div class="product-quantity">
                                <form class="container">
                                    <div class="row d-flex justify-content-center justify-content-md-start">
                                        <div class="col-3 col-lg-1 pd-0 d-flex align-items-stretch">
                                            <input type="number" class="form-control border-transparent black focus-none" placeholder="1">
                                        </div>
                                        <div class="col-4">
                                            <a href="https://www.amazon.com/" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none">ORDER NOW</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="product-view">
                            
                            <div id="carousel" class="flexslider">
                                <ul class="slides vigo-small-img">
                                    <?php foreach($liste as $l){ ?>
                                    <li>
                                       <img  src="uploads/<?php  echo $l['image'] ?>" class="cursor-pointer"  alt="product image">
                                    </li>
                                   
                                   
                                    <!-- <li>
                                        <img src="img/product-img-3.jpg" class="cursor-pointer" alt="product img">
                                    </li> -->
                                    <!-- items mirrored twice, total of 12 -->
                                    <?php } ?>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Certification Section
    =================================== -->
   
    <!-- ==============================
        footer Section
    =================================== -->
    <footer id="footer">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                    <div class="footer-box white">
                        <h4 class="footer-title pos-r">
                            à propos de nous
                        </h4>
                        <p class="footer-content">
                            Complément alimentaire : protéines/vitamines , accessoires et textiles musculation.
                        </p>
                        <h6>Méthodes De Payement</h6>
                        <div class="payment-method row">
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-1.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-2.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-3.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-4.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-5.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-6.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-7.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-8.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 d-none d-xl-block footer-box-border"></div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-5 col-xl-4">
                    <div class="footer-box footer-contact-form">
                        <h4 class="footer-title vigo-send-message pos-r white">
                                Envoyez votre massage
                        </h4>
                        <form>
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <input type="text" class="form-control focus-none" placeholder="Votre Nom">
                                </div>
                                <div class="col-12 col-xl-6">
                                    <input type="email" class="form-control focus-none" placeholder="Votre E-mail">
                                </div>
                                <div class="col-12 col-xl-12">
                                    <textarea class="form-control focus-none" placeholder="Votre Message"></textarea>
                                    <button type="button" class="btn btn-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none cursor-pointer">Envoyer le massage</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 d-none d-xl-block footer-box-border"></div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                    <div class="footer-box white mr-0">
                        <h4 class="footer-title pos-r">
                            Contactez nous
                        </h4>
                        <div class="contact-office-hours">
                            <p>Heures d'ouverture:</p>
                            <p>Lun - Ven: 9.00-6.00</p>
                            <p>
                                Dimanche: 9.00-4.00
                            </p>
                        </div>
                        <div class="contact-address">
                            <ul class="list-group white">
                                <li class="list-group-item pd-0 bg-transparent border-transparent">
                                    <a href="tel:+21658995261" class="white"><i class="fa fa-phone" aria-hidden="true"></i> +(216) 58 995 261 </a>
                                </li>
                                <li class="list-group-item pd-0 bg-transparent border-transparent">
                                    <a href="mailto:Houcem_bansalem@live.fr" class="white"><i class="fa fa-envelope" aria-hidden="true"></i> Houcem_bansalem@live.fr</a>
                                </li>
                                <li class="list-group-item pd-0 bg-transparent border-transparent d-flex align-items-start border-0">
                                   <i class="fa fa-map-marker" aria-hidden="true"></i>
                                   <p class="display-inline-block mr-0">Complex Saphir 9AV Hbib Thamer <br>,Manouba, Tunisie</p>
                                </li>
                            </ul>
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
                            Copyright &copy; <a href="http://themeim.com/" class="white" target="_blank">ThemeIM</a>  2017. All Right Reserved
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 footer-logo d-md-flex align-items-md-center justify-content-md-end">
                    <a href="index-2.html">
                        <img src="img/footer-logo.png" class="img-fluid" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- =========================
        Main Loding JS Script
    ============================== -->
    
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
