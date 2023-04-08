<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta charset="UTF-8">
  <meta name="keywords" content="E-SEKOLAH">
  <meta name="author" content="HNF">
  <meta name="description" content="E-SEKOLAH">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage <?= $this->fungsi->user_login()->nama ?> SDN MEJASEM BARAT 01</title>

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/images/logo.png" rel="icon">
  <link href="<?= base_url() ?>assets/images/logo.png" rel="apple-touch-icon">
  <!-- Favicons -->
  <link rel="icon" type="image/png" href="<?= base_url() ?>assets/frontend/img/.jpg" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/themify-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/selectFX/css/cs-skin-elastic.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">

  <!-- TinyMCE -->
  <script src="<?= base_url() ?>assets/vendors/tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
  <!--ICON BOOTSTRAP-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom CSS -->
  <style>
    .content {
      max-width: 1080px !important;
    }

    @media screen and (max-width: 767px) {
      .navbar-brand {
        display: none !important;
      }

      #header {
        padding: 10px !important;
      }
    }
  </style>

</head>

<body>

  <!-- Bagian Sidebar -->
  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <div class="navbar-header">
        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand p-2" href="<?= site_url('Dashboard') ?>"><img class="rounded" src="<?= base_url() ?>assets/images/sdn.jfif" alt="" style="width: 50px;"> &nbsp; E-SEKOLAH</a>
      </div>

      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <h3 class="menu-title">Fitur utama</h3>
          <li class="">
            <a href="<?= base_url('dashboard') ?>"><i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
          </li>

          <!-- Role Admin -->
          <?php if ($this->fungsi->user_login()->role == 0) { ?>

            <!-- Manajemen Pengguna, Pengurus, dan Santri -->
            <li>
              <a href="<?= base_url('user') ?>"> <i class="menu-icon ti ti-user"></i>Manajemen Pengguna</a>
            </li>
            <li>
              <a href="<?= base_url('pengurus') ?>"> <i class="menu-icon fa fa-group"></i>Manajamen Pengurus</a>
            </li>

            <li>
              <a href="<?= base_url('guru') ?>"> <i class="menu-icon fa fa-group"></i>Manajamen Guru</a>
            </li>

            <!-- Bagian Dropdown Manajemen Data -->
            <!-- <li class="menu-item-has-children dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list-alt"></i> Manajemen Asatidz/Guru </a>
              <ul class="sub-menu children dropdown-menu">
                <li><i class="ti ti-user"></i><a href="<?= base_url('assatidz') ?>">Ponpes</a></li>
                <li><i class="ti ti-user"></i><a href="<?= base_url('') ?>">RA</a></li>
                <li><i class="ti ti-user"></i><a href="<?= base_url('') ?>">MDTU/MDTW</a></li>
                <li><i class="ti ti-user"></i><a href="<?= base_url('') ?>">Pendidikan Kesetaraan</a></li>
                <li><i class="ti ti-user"></i><a href="<?= base_url('') ?>">RTQ</a></li>
                <li><i class="ti ti-user"></i><a href="<?= base_url('') ?>">PAUD-QU</a></li>
              </ul>
            </li> -->

          <?php } ?>
          <!-- Akhir Role Admin -->

          <!-- Role Pengurus -->
          <?php if ($this->fungsi->user_login()->role != 2) { ?>
            <li>
              <a href="<?= base_url('anak') ?>"> <i class="menu-icon fa fa-female"></i>Manajamen Siswa</a>
            </li>
          <?php } ?>
          <!-- Akhir Role -->

          <!-- Awal Role -->
          <?php if ($this->fungsi->user_login()->role != 1) { ?>
            <li>
              <a href="<?= base_url('donatur') ?>"> <i class="menu-icon ti ti-id-badge"></i>Manajamen Donatur</a>
            </li>
            <li>
              <a href="<?= base_url('keuangan') ?>"> <i class="menu-icon fa fa-money"></i>Manajamen Dana Keuangan</a>
            </li>
          <?php } ?>
          <!-- Akhir Role -->

          <!-- Awal Role -->
          <?php if ($this->fungsi->user_login()->role != 2) { ?>
            <!-- Dropdown Arsip -->
            <li class="menu-item-has-children dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder-open-o"></i>Manajamen Kearsipan</a>
              <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-inbox"></i><a href="<?= base_url('surat_masuk') ?>">Surat Masuk</a></li>
                <li><i class="fa fa-share"></i><a href="<?= base_url('surat_keluar') ?>">Surat Keluar</a></li>
              </ul>
            <li>
              <a href="<?= base_url('inventaris') ?>"> <i class="menu-icon fa fa-edit"></i>Inventaris</a>
            </li>
            <li>
              <a href="<?= base_url('buku_tamu') ?>"> <i class="menu-icon fa fa-book"></i>Buku Tamu</a>
            </li>
            </li>
          <?php } ?>
          <!-- Akhir Role -->

          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file-text"></i>Laporan</a>
            <ul class="sub-menu children dropdown-menu">
              <?php if ($this->fungsi->user_login()->role == 0) { ?>
                <li><i class="fa fa-file-o "></i><a href="<?= base_url('lap_pengurus') ?>">Pengurus</a></li>
                <li><i class="fa fa-file-o"></i><a href="<?= base_url('lap_anak') ?>">Siswa</a></li>
                <li><i class="fa fa-file-o"></i><a href="<?= base_url('lap_donatur') ?>">Donatur</a></li>
                <li><i class="fa fa-file-o"></i><a href="<?= base_url('lap_keuangan') ?>">Keuangan</a></li>
                <li><i class="fa fa-file-o"></i><a href="<?= base_url('lap_surat_masuk') ?>">Surat Masuk</a></li>
                <li><i class="fa fa-file-o"></i><a href="<?= base_url('lap_surat_keluar') ?>">Surat Keluar</a></li>
                <li><i class="fa fa-file-o"></i><a href="<?= base_url('lap_inventaris') ?>">Inventaris</a></li>
                <li><i class="fa fa-file-o"></i><a href="<?= base_url('lap_buku_tamu') ?>">Buku Tamu</a></li>
              <?php } ?>
              <?php if ($this->fungsi->user_login()->role == 1) { ?>
                <li><i class="fa fa-file-o"></i><a href="<?= base_url('lap_anak') ?>">Anak</a></li>
                <li><i class="fa fa-file-o"></i><a href="<?= base_url('lap_surat_masuk') ?>">Surat Masuk</a></li>
                <li><i class="fa fa-file-o"></i><a href="<?= base_url('lap_surat_keluar') ?>">Surat Keluar</a></li>
                <li><i class="fa fa-file-o"></i><a href="<?= base_url('lap_inventaris') ?>">Inventaris</a></li>
                <li><i class="fa fa-file-o"></i><a href="<?= base_url('lap_buku_tamu') ?>">Buku Tamu</a></li>
              <?php } ?>
              <?php if ($this->fungsi->user_login()->role == 2) { ?>

                <li><i class="fa fa-file-o"></i><a href="<?= base_url('lap_keuangan') ?>">Keuangan</a></li>
              <?php } ?>
            </ul>
          </li>

          <!-- Pengaturan Website -->
          <li>
            <a href="<?= base_url('brosur') ?>"> <i class="menu-icon fa fa-file-text"></i>Brosur</a>
          </li>

          <?php if ($this->fungsi->user_login()->role == 0) { ?>

            <!-- Pengaturan Website -->
            <li>
              <a href="<?= base_url('pengaturan') ?>"> <i class="menu-icon fa fa-cog"></i>Pengaturan website</a>
            </li>
          <?php } ?>

          <!-- Jurnalistik -->
          <h3 class="menu-title">Jurnalistik</h3>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-newspaper-o"></i>Manajamen Berita</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="fa ti-pencil-alt"></i><a href="<?= base_url('blog/tambah') ?>">Tambah Berita</a></li>
              <li><i class="fa fa-list-alt"></i><a href="<?= base_url('blog') ?>">Daftar Berita Sekolah</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('galeri/read') ?>"><i class="fa fa-picture-o"></i> Manajemen Galery</a></li>

          <!-- Logout Akun -->
          <h3 class="menu-title">Logout</h3>
          <li>
            <a href="<?= base_url('Auth/logout') ?>"> <i class="menu-icon fa fa-sign-out"></i> Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </aside>
  <!-- Akhir Sidebar -->

  <!-- Navbar Main Panel -->
  <div id="right-panel" class="right-panel">
    <header id="header" class="header shadow-sm">
      <div class="header-menu">
        <div class="col-sm-7">
          <div class="header-left">
            <h5 class="mt-2">
              <?php
              date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
              echo date('G:i') . " WIB - "; // menampilkan jam sekarang
              ?>
              <script>
                var h = (new Date()).getHours();
                var m = (new Date()).getMinutes();
                var s = (new Date()).getSeconds();
                if (h >= 4 && h < 10) document.writeln("Selamat pagi, <?= $this->fungsi->user_login()->nama ?> 👋");
                if (h >= 10 && h < 15) document.writeln("Selamat siang, <?= $this->fungsi->user_login()->nama ?> 👋");
                if (h >= 15 && h < 18) document.writeln("Selamat sore, <?= $this->fungsi->user_login()->nama ?> 👋");
                if (h >= 18 || h < 4) document.writeln("Selamat malam, <?= $this->fungsi->user_login()->nama ?> 👋");
              </script>
            </h5>
          </div>
        </div>

        <div class="col-sm-5">
          <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="user-avatar rounded-circle" src="<?php base_url() ?>assets/images/su.png">
            </a>

            <div class="user-menu dropdown-menu shadow">
              <a class="nav-link" href="<?= base_url('Profil/view/' . $this->fungsi->user_login()->id_user) ?>"><i class="fa fa-user"></i> My Profile</a>

              <a class="nav-link" href="<?= base_url('Auth/logout') ?>"><i class="fa fa-power-off"></i> Logout</a>
            </div>
          </div>
        </div>
      </div>

    </header>
    <!-- Header-->

    <!-- Dashboard Breadcrumbs -->
    <div class="breadcrumbs">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1><?= $judul; ?> </h1>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Dashboard Content -->
    <div class="content mt-3">
      <?php echo $contents; ?>
    </div>
  </div>


  <!-- Javascript Custom -->

  <!-- Main Script -->
  <script src="<?= base_url() ?>assets/js/main.js"></script>

  <!-- Javascript Vendor -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="<?= base_url() ?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/jszip/dist/jszip.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>

  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>

  <!-- TinyEditor Initialized -->
  <script>
    tinymce.init({
      selector: 'textarea#tiny'
    });
  </script>

  <!-- DataTables -->
  <script type="text/javascript">
    $('#bootstrap-data-table-export').DataTable({
      responsive: true
    });
  </script>



</body>

</html>