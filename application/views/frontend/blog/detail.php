<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-dark"><?= $judul ?></h2>
                <ol>
                    <li class="text-white"><a href="<?php echo base_url('utama/blog') ?>">Beranda</a></li>
                    <li class="text-dark"><?= $judul ?></li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <h1><?= $row['judul'] ?> </h1><br>
            <div class="row">
                <div class="container">
                    <img src="<?php echo base_url(); ?>assets/images/upload/<?= $row['image']; ?>" width="100%" alt="" class="img-fluid rounded">
                    <br><br>
                    <p><?= $row['isi'] ?> </p>
                    <br>
                    <p>Dipublish pada : &nbsp; <?= $row['tanggal']; ?> </p>
                </div>

            </div>
        </div>
    </section>
</main>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?php echo base_url() ?>assets/blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/blog/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/blog/vendor/aos/aos.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/blog/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/blog/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Variables CSS Files. Uncomment your preferred color scheme -->
<link href="<?php echo base_url() ?>assets/blog/css/variables.css" rel="stylesheet">
<!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

<!-- Template Main CSS File -->
<link href="<?php echo base_url() ?>assets/blog/css/main.css" rel="stylesheet">

<!-- =======================================================
  * Template Name: HeroBiz - v2.2.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<!-- Vendor JS Files -->
<script src="<?php echo base_url() ?>assets/blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/blog/vendor/aos/aos.js"></script>
<script src="<?php echo base_url() ?>assets/blog/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url() ?>assets/blog/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>assets/blog/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/blog/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url() ?>assets/blog/js/main.js"></script>