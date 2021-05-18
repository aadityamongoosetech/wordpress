<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>New Vision HTML CSS Template</title>
    <link href="<?php  echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" /> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" /> <!-- https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans -->
    <link href="<?php  echo get_template_directory_uri();?>/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="<?php  echo get_template_directory_uri();?>/slick/slick.css" rel="stylesheet" /> <!-- https://kenwheeler.github.io/slick/ -->
    <link href="<?php  echo get_template_directory_uri();?>/slick/slick-theme.css" rel="stylesheet" />
	<link href="<?php  echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com -->
	<link href="<?php  echo get_template_directory_uri();?>/css/templatemo-new-vision.css" rel="stylesheet" />

</head>
<body>
    <!-- Page Header -->
    <div class="container-fluid">
        <div class="tm-site-header">
            <div class="row">
                <div class="col-12 tm-site-header-col">
                    <div class="tm-site-header-left">
                        <i class="far fa-2x fa-eye tm-site-icon"></i>
                        <h1 class="tm-site-name">New Vision</h1>
                    </div>
                    <div class="tm-site-header-right tm-menu-container-outer">
                        
                        <!--Navbar-->
                        <nav class="navbar navbar-expand-lg">
                        
                          <!-- Collapse button -->
                          <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                class="fas fa-bars fa-1x"></i></span></button>
                        
                          <!-- Collapsible content -->
                          <div class="collapse navbar-collapse tm-nav" id="navbarSupportedContent1">
                        
                            <!-- Links -->
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                <?php  wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'nav'))?>
                            <!-- Links -->
                        
                          </div>
                          <!-- Collapsible content -->
                        
                        </nav>
                        <!--/.Navbar-->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="tm-main-bg"></div>        
            </div>
        </div>