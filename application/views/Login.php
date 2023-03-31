<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk | E Sekolah</title>
    <meta content="Merupakan Website Resmi dari SD NEGERI MEJASEM BARAT 01 - Kabupaten Tegal" name="description">
    <meta content="sdn,sd negeri,school,kemenag,pp,sdit,sekolahdasar,islam,pendidikanislam,ifs" name="keywords">

    <!-- SEO -->
    <meta property="og:title" content="SD NEGERI MEJASEM BARAT 01 - Kab. Tegal">
    <meta property="og:description" content="Merupakan Website Resmi dari SD NEGERI MEJASEM BARAT 01- Kabupaten Tegal">
    <meta property="og:image" content="<?php echo base_url() ?>assets/frontend/img/p2.jpg">
    <meta property="og:url" content="<?php echo base_url() ?>">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/images/logo.png" rel="icon">
    <link href="<?= base_url() ?>assets/images/logo.png" rel="apple-touch-icon">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/style.css">

    <!-- Custom Internal CSS-->
    <style>
        .AppForm .AppFormRight {
            background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(14, 174, 87, 1) 0%, rgba(12, 116, 117, 1) 90%);
            height: 100%;
            background-size: cover;
            background-position: left;
        }

        @media screen and (max-width: 767px) {
            .AppForm .AppFormRight {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="container h-100">
        <!-- Section untuk satu card form -->
        <div class="row h-100 justify-content-center align-items-center">
            <form class="col-md-9 col-sm-12 col-xs-12" method="post" action="<?= site_url('Auth/Login') ?>">
                <!-- Card Formulir -->
                <div class="AppForm shadow-lg">
                    <div class="row">
                        <!-- Card Bagian Kiri -->
                        <div class="col-md-6 d-flex justify-content-center align-items-center rounded">
                            <div class="AppFormLeft">

                                <!-- Judul Aplikasi -->
                                <h1 class="my-4 text-center">
                                    E SEKOLAH
                                </h1>

                                <!-- Peringatan -->
                                <?php if ($this->session->has_userdata('error')) : ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Perhatian!</strong>
                                        <br>
                                        <?= $this->session->flashdata('error'); ?>
                                        <br>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>

                                <!-- Formulir Validasi -->
                                <div class="form-group position-relative mb-4">
                                    <input type="text" name="nama" class="form-control rounded-4 shadow-none" id="username" placeholder="Username" autofocus required oninvalid="this.setCustomValidity('Nama wajib diisi')" oninput="this.setCustomValidity('')">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="form-group position-relative mb-4">
                                    <input type="password" name="password" class="form-control rounded-4 shadow-none" id="password" placeholder="Password" required oninvalid="this.setCustomValidity('Password wajib diisi')" oninput="this.setCustomValidity('')">
                                    <i class="fa fa-lock"></i>
                                </div>

                                <!-- Lupa Kata Sandi -->
                                <div class="row mt-4 mb-4">
                                    <div class="col-md-6">
                                        <a style="color: #0c7475;" href="<?= site_url('auth/reset') ?>">
                                            Lupa Kata Sandi?
                                        </a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <!-- ClearFix untuk merapihkan form -->
                                    </div>
                                </div>

                                <!-- Tombol Login -->
                                <button class="btn btn-success btn-block shadow border-0 py-2 text-uppercase ">
                                    Login
                                </button>

                                <p class="text-center mt-5">
                                    <span>
                                        <div class="clear-bg" style="width: 290px;"></div>
                                    </span>
                                </p>

                            </div>

                        </div>

                        <!-- Card Bagian Kanan -->
                        <div class="col-md-6">
                            <div class="AppFormRight position-relative d-flex justify-content-center flex-column align-items-center text-center p-5 text-white">
                                <!-- Ucapan Selamat -->
                                <h2 class="position-relative px-4 pb-2 mb-3">
                                    <script>
                                        var h = (new Date()).getHours();
                                        var m = (new Date()).getMinutes();
                                        var s = (new Date()).getSeconds();
                                        if (h >= 4 && h < 10) document.writeln("Selamat pagi 👋");
                                        if (h >= 10 && h < 15) document.writeln("Selamat siang 👋");
                                        if (h >= 15 && h < 18) document.writeln("Selamat sore 👋");
                                        if (h >= 18 || h < 4) document.writeln("Selamat malam 👋");
                                    </script>
                                </h2>
                                <!-- Deskripsi Aplikasi -->
                                <p>Layanan Sistem Informasi Management SDN MEJASEM BARAT 01, Kecamatan Kramat.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>

</html>