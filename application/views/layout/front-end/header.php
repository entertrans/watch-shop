<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Carousel Template · Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="<?= base_url('assets/front-end/vendor/bootstrap-4.4.1/css/bootstrap.min.css') ?>"> -->
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="<?= base_url('assets/front-end/fonts/font-awesome/css/font-awesome.min.css') ?>"> -->
    

    <!-- DAILY SHOP THEME -->

    <!-- Font awesome -->
    <link href="<?= base_url('assets/daily-shop-theme/css/font-awesome.css') ?>" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?= base_url('assets/daily-shop-theme/css/bootstrap.css') ?>" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="<?= base_url('assets/daily-shop-theme/css/jquery.smartmenus.bootstrap.css') ?>" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/daily-shop-theme/css/jquery.simpleLens.css') ?>">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/daily-shop-theme/css/slick.css') ?>">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/daily-shop-theme/css/nouislider.css') ?>">
    <!-- Theme color -->
    <link id="switcher" href="<?= base_url('assets/daily-shop-theme/css/theme-color/default-theme.css') ?>" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="<?= base_url('assets/daily-shop-theme/css/sequence-theme.modern-slide-in.css') ?>" rel="stylesheet" media="all">
    <!-- Main style sheet -->
    <link href="<?= base_url('assets/daily-shop-theme/css/style.css') ?>" rel="stylesheet">    
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

 <!--    <style>
        body {
            margin-top: 50px
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .container,
        hr {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style> -->
    <!-- Custom styles for this template -->
    <!-- <link href="carousel.css" rel="stylesheet"> -->
</head>

<body style="zoom:1;">
    <div id="wpf-loader-two" style="display: none;">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div>
    <a class="scrollToTop" href="#" style="display: none;"><i class="fa fa-chevron-up"></i></a>

    <header id="aa-header">
        <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <?php $header = $this->db->get('tbl_header')->row_array(); 
                  $nm_toko = explode(" ",$header['nama_toko']);
                  // var_dump(explode(" ",$header['nama_toko']));

                  ?>
                  <p><span class="fa fa-whatsapp"></span><?= $header['no_wa'];  ?></p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
            </div>
          </div>
        </div>
      </div>
    </div>
        <div class="aa-header-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="aa-header-bottom-area">
                  <!-- logo  -->
                  <div class="aa-logo">
                    <!-- Text based logo -->
                    <!-- base_url().'assets/daily-shop-theme/img/' -->
                    <a href="<?= site_url('home') ?>">
                      <span><img width="50px" src="<?= base_url().'assets/daily-shop-theme/img/'.$header['logo_toko']; ?>"></span>
                      <p><?= $nm_toko[0]." "  ?><strong><?= $nm_toko[1]  ?></strong> <span><?= $header['slogan'];  ?></span></p>
                  </a>
                  <!-- img based logo -->
                  <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
              <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-notify">2</span>
              </a>
              <div class="aa-cartbox-summary" style="display: none;">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/woman-small-2.jpg') ?>" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                    </div>
                    <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                </li>
                <li>
                  <a class="aa-cartbox-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/woman-small-1.jpg') ?>" alt="img"></a>
                  <div class="aa-cartbox-info">
                    <h4><a href="#">Product Name</a></h4>
                    <p>1 x $250</p>
                </div>
                <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
            </li>                    
            <li>
              <span class="aa-cartbox-total-title">
                Total
            </span>
            <span class="aa-cartbox-total-price">
                $500
            </span>
        </li>
    </ul>
    <a class="aa-cartbox-checkout aa-primary-btn" href="<?= site_url('checkout') ?>">Checkout</a>
</div>
</div>
<!-- / cart box -->           
</div>
</div>
</div>
</div>
</div>
        <!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="<?= site_url('home') ?>">Whatch'out</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= $this->uri->segment('1') == 'home' ? 'active' : '' ?>" href="<?= site_url('home') ?>">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav" style="padding-right: 50px">
                    <li class="nav-item">
                        <a class="nav-link <?= $this->uri->segment('1') == 'checkout' ? 'active' : '' ?>" href="<?= site_url('checkout') ?>"><i class="fa fa-fw fa-shopping-cart"></i> Shooping Cart</a>
                    </li>
                </ul>
            </div>
        </nav> -->
    </header>
    <main role="main">