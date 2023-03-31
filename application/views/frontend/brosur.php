<section id="about" class="card about bg-light">
    <div class="class container">
        <div class="class row">
            <?php
            foreach ($brosur as $br) { ?>
                <img src="<?php echo base_url(); ?>assets/images/upload/<?= $br['image']; ?>" width="100%" height="100%">
            <?php } ?>
        </div>
    </div>
</section>

<!-- Vendor CSS Files -->
<link href="<?php echo base_url() ?>assets/frontend2/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontend2/vendor/aos/aos.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontend2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontend2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontend2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontend2/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/frontend2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Blog CSS Vendor -->
<link href="<?php echo base_url() ?>assets/blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/blog/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/blog/vendor/aos/aos.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/blog/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/blog/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Variables CSS Files. Uncomment your preferred color scheme -->
<link href="<?php echo base_url() ?>assets/blog/css/variables.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="<?php echo base_url() ?>assets/frontend2/css/style.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/blog/css/main.css" rel="stylesheet">

<script src="<?php echo base_url() ?>assets/vendors/ckeditor/ckeditor.js"></script>