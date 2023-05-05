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
      <div class="animated fadeIn">
        <div class="row">

          <div class="col-md-25">
            <div class="card">
              <div class="card-header">
                <strong class="card-title"><?= $judul; ?></strong>
                <a class="btn btn-sm btn-primary float-right" href="<?= base_url('anak/tambah') ?>"> <i class="fa fa-plus-square-o"></i> Tambah </a>
              </div>
              <div class="card-body table-responsive">
                <?php if ($this->session->has_userdata('success')) : ?>
                  <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Success</span>
                    <?= $this->session->flashdata('success'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                <?php endif; ?>
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered dt-responsive nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <!--<th>Foto Anak</th>-->
                      <th>NIK Anak</th>
                      <th>NISN</th>
                      <th>Nama</th>
                      <!--- <th>Alamat lengkap</th>
                  <th>No HP</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Umur</th>
                  <th>Tahun Masuk</th>
                  <th>Nama Ibu</th>
                  <th>Nama Bapak</th>
                  <th>Pekerjaan Ibu</th>
                  <th>Pekerjaan Ayah</th>
                  <th>Agama</th> -->
                      <th>Whatsapp</th>
                      <!--<th>No HP</th>-->
                      <th>Kelas</th>
                      <th>tahun masuk</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($data as $row) { ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <!--<td> <?php if ($row['foto_anak'] != null) { ?>
                        <img src="<?= base_url('upload/foto_anak/' . $row['foto_anak']) ?>" alt="" width="80px">
                      <?php } elseif ($row['foto_anak'] != null) { ?>
                        <img src="<?php echo base_url() ?>/assets/images/placeholder.png" width="80px">
                      <?php } ?>

                    </td>-->
                        <td><?php echo $row['nik_anak']; ?></td>
                        <td><?php echo $row['NISN']; ?></td>
                        <td><?php echo ucwords($row['nama_anak']); ?></td>
                        <td><a href="https://wa.me/<?php echo $row['no_hp']; ?>" class="btn btn-success text-white">Whatsapp <i class="bi bi-whatsapp"></i></a></td>
                        <!--<td><?php echo $row['no_hp']; ?></td>-->
                        <!-- <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['no_hp']; ?></td>
                    <td>
                      <?php if ($row['jk_anak'] == 'L') { ?>
                        <span class="badge badge-primary">Laki-laki</span>
                      <?php } else { ?>
                        <span class="badge badge-danger">Perempuan</span>
                      <?php } ?>
                    </td>
                    <td><?php echo ucwords($row['tempat_lahir_anak'] . ', ' . date_indo($row['tgl_lahir_anak'])); ?></td>
                    <td><?php echo hitung_umur($row['tgl_lahir_anak']) ?></td>
                    <td><?php echo date($row['tahun_masuk']); ?></td>
                    <td><?php echo ucwords($row['nama_ibu_kandung']); ?></td>
                    <td><?php echo ucwords($row['nama_bapak_kandung']); ?></td>
                    <td><?php echo ucwords($row['pekerjaan_ibu']); ?></td>
                    <td><?php echo ucwords($row['pekerjaan_ayah']); ?></td>
                    <td>
                      <?php if ($row['agama'] == 1) { ?>
                        <span class="badge badge-primary">Islam</span>
                      <?php } ?>
                    </td> -->
                        <td>
                          <?php echo ucwords($row['pendidikan']); ?>
                        </td>
                        <!-- <td> <?php if ($row['foto_anak'] != null) { ?>
                        <img src="<?= base_url('upload/scan_ijasah/' . $row['scan_ijasah']) ?>" alt="" width="80px">
                      <?php } ?>
                    </td>
                    <td><?php if ($row['scan_kk'] != null) { ?>
                        <img src="<?= base_url('upload/scan_kk/' . $row['scan_kk']) ?>" alt="" width="80px">
                      <?php } ?>
                    </td>
                    <td><?php if ($row['scan_akte'] != null) { ?>
                        <img src="<?= base_url('upload/scan_akte/' . $row['scan_akte']) ?>" alt="" width="80px">
                      <?php } ?>
                    </td>
                    <td><?php if ($row['ktp'] != null) { ?>
                        <img src="<?= base_url('upload/ktp/' . $row['ktp']) ?>" alt="" width="80px">
                      <?php } ?>
                    </td> -->
                        <td><?php echo ucwords($row['tahun_masuk']); ?> </td>
                        <td>
                          <?php if ($row['status'] == '1') { ?>
                            <a href="<?= site_url('anak/tidak_aktif/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-primary">Aktif</span></a>
                          <?php } elseif ($row['status'] == '2') { ?>
                            <a href="<?= site_url('anak/aktif/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-secondary">Tidak Aktif</span></a>
                          <?php } elseif ($row['status'] == '3') { ?>
                            <a href="<?= site_url('anak/alumni/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-success">Alumni</span></a>
                          <?php } elseif ($row['status'] == '4') { ?>
                            <a href="<?= site_url('anak/belum_diverifikasi/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-warning">Masih Dalam Seleksi</span></a>
                          <?php } else { ?>
                            <a href="<?= site_url('anak/tidak_diterima/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-danger">Tidak diterima</span></a>
                          <?php } ?>
                        </td>

                        <td>
                          <!-- <a class="btn btn-sm btn-secondary" href="<?= base_url('anak/cetak/' . $row['nik_anak']) ?>"> <i class="fa fa-file-pdf-o"></i> Cetak</a> -->
                          <a class="btn btn-sm btn-primary" href="<?= base_url('anak/detail/' . $row['nik_anak']) ?>"> <i class="fa fa-eye"></i> Detail </a>
                          <a class="btn btn-sm btn-success" href="<?= base_url('anak/edit/' . $row['nik_anak']) ?>"> <i class="fa fa-edit"></i> Edit </a>
                          <a class="btn btn-sm btn-danger" href="<?= base_url('anak/delete/' . $row['nik_anak']) ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"> <i class="fa fa-trash-o"></i> Delete </a>
                        </td>

                      </tr>
                    <?php $no++;
                    }  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


        </div>
      </div><!-- .animated -->
    </div><!-- .content -->










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