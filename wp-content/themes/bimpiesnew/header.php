<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--title-->
    <title>
        <?php if (is_home()) { ?>
            <?php bloginfo('description'); ?>
            :
            <?php bloginfo('name'); ?>
            <?php }  ?>

        <?php if (is_page()) { ?>
            <?php the_title(' '); ?>
            <?php if(wp_title(' ', false)) { echo ' : '; } ?>
            <?php bloginfo('name'); ?>
            <?php }  ?>

        <?php if (is_404()) { ?>
            Page not found :
            <?php bloginfo('name'); ?>
            <?php }  ?>
        <?php if (is_archive()) { ?>
            <?php wp_title(' '); ?>
            <?php if(wp_title(' ', false)) { echo ' : '; } ?>
            <?php bloginfo('name'); ?>
            <?php }  ?>
        <?php if(is_search()) { ?>
            <?php echo wp_specialchars($s, 1); ?>:
            <?php bloginfo('name');
            } elseif (is_single()){ 
                { 
                    wp_title(' ');
                    if(wp_title(' ', false)) { echo ' '; }
                    single_cat_title();
                    echo " : "; 
                    bloginfo('name');
            } ?>
            <?php } ?>
    </title>
    <!--CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/preset/red.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">        

    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <?php wp_head(); ?>
</head><!--/head-->
<body>
<!-- Page Loader -->
<div class="preloader">
    <div id="loaderImage"></div>
</div>  

<div id="home-section" class="image-bg">
    <div class="container">
        <div class="home-content padding">
            <img class="img-responsive" src="images/slider-logo.png" alt="" />                
            <h2>Explore the world through someone else's eyes.</h2>                
            <div class="button">
                <a href="#" class="btn btn-primary btn-animated">Free Trail</a>
                <a href="#" class="btn btn-primary btn-animated">Buy Now</a>
            </div>
            <div class="app-icons text-center">
                <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-desktop"></i></a></li>
                    <li><a href="#"><i class="fa fa-apple"></i></a></li>
                    <li><a href="#"><i class="fa fa-windows"></i></a></li>
                    <li><a href="#"><i class="fa fa-android"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!--/#home-section--> 

<header id="navigation">
    <div class="navbar" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.html">
                    <img class="main-logo img-responsive" src="images/logo-red.png" alt="">
                </a> 

            </div> 
            <nav id="mainmenu" class="collapse navbar-collapse navbar-right">         
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home-section">HOME</a></li>
                    <li><a href="#whatsit">What’s it</a></li>
                    <li><a href="#whats-special">Special</a></li>
                    <li><a href="#compatibility">App Info</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#screenshots">SCREENSHOTS</a></li>
                    <li><a href="#price">Price & plan</a></li>
                    <li><a href="#team">Who we are</a></li>
                    <li><a class="btn btn-primary" href="#">Download</a></li>
                </ul>         
            </nav>               
        </div>
    </div>
        </header><!--/#navigation--> 