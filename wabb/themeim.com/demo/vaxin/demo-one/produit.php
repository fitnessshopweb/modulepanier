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

   

    <!-- ==============================
        Header top
    =================================== -->
   

    <!-- ==============================
        Main Navbar
    =================================== -->
    <section class="main-nav bg-white" id="sticker">
        <div class="container custom-container">

            <nav class="navbar-expand-lg navbar-light d-lg-flex justify-content-lg-end pos-r">

                <div class="main-logo text-center d-lg-inline-flex justify-content-start d-lg-flex align-items-lg-center">
                    <a class="navbar-brand mr-0" href="index-2.html">
                        <img src="assets/img/hm-two-logo.png" class="img-fluid header-logo" alt="Vigo Logo">
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
                        <h5 class="page-sub-title mr-0">Nos produits</h5>
                        
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
