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
    <link rel="stylesheet" href="<?= base_url('assets/front-end/vendor/bootstrap-4.4.1/css/bootstrap.min.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/front-end/fonts/font-awesome/css/font-awesome.min.css') ?>">
    </link>

    <style>
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
    </style>
    <!-- Custom styles for this template -->
    <!-- <link href="carousel.css" rel="stylesheet"> -->
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
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
        </nav>
    </header>

    <main role="main">