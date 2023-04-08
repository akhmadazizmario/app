<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Website Resmi SDN MEJASEM BARAT 01</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/images/logo.png" rel="icon">
    <link href="<?= base_url() ?>assets/images/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts --->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() ?>assets/frontend2/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/frontend2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/frontend2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/frontend2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/frontend2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/frontend2/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/frontend2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() ?>assets/frontend2/css/style.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <!-- Blog CSS Vendor -->
    <link href="<?php echo base_url() ?>assets/blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/blog/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/blog/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/blog/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/blog/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="<?php echo base_url() ?>assets/blog/css/variables.css" rel="stylesheet">


    <link href="<?php echo base_url() ?>assets/blog/css/main.css" rel="stylesheet">

    <script src="<?php echo base_url() ?>assets/vendors/ckeditor/ckeditor.js"></script>

    <!-- Custom CSS -->
    <!-- =======================================================
  * Template Name: Bootslander
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent" style="background-color: rgb(2, 5, 161);">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <strong class="text-dark"><a href="#"><img src="<?php echo base_url() ?>assets/images/kw.jpg" alt=""></a></strong>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?php echo base_url('utama') ?>" style="color:white;">Home</a></li>
                    <li><a href="<?php echo base_url('utama/blog') ?>" style="color:white;">Berita </a></li>
                    <li><a href="<?php echo base_url('utama/galeri') ?>" style="color:white;">Galeri</a></li>
                    <li><a href="<?php echo base_url('utama/tentangKami') ?>" style="color:white;">Tentang kami</a></li>
                    <li><a href="<?php echo base_url('auth') ?>" style="color:white;">Login</a></li>
                    <?php
                    foreach ($footer as $data) { ?>
                        <li><a href="https://wa.me/<?php echo ucwords($data['whatsapp']); ?>" class="btn btn-success text-white">Whatsapp Kami <i class="bi bi-whatsapp"></i></a></li>
                    <?php } ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle" style="color: tosca; background-color: white;"></i>

            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->