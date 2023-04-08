  <!-- ======= Hero Section ======= -->
  <section id="hero" style="background-color: rgb(2, 5, 161);">

      <div class="container">
          <div class="row justify-content-between">
              <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                  <div data-aos="zoom-out">


                      <h1 style="color: white;">SDN MEJASEM BARAT 01 </h1>
                      <p class="text-white">
                          <?php
                            date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
                            echo date('G:i') . " WIB - "; // menampilkan jam sekarang
                            ?>
                          <script>
                              var h = (new Date()).getHours();
                              var m = (new Date()).getMinutes();
                              var s = (new Date()).getSeconds();
                              if (h >= 4 && h < 10) document.writeln(" Hallo Selamat pagi 👋");
                              if (h >= 10 && h < 15) document.writeln("Hallo Selamat siang 👋");
                              if (h >= 15 && h < 18) document.writeln("Hallo Selamat sore 👋");
                              if (h >= 18 || h < 4) document.writeln("Hallo Selamat malam 👋");
                          </script>
                      </p>
                      <p class="text-white"> Selamat Datang di Website Resmi
                          Sebagai media informasi dan komunikasi Web SDN Mejasem Barat 01
                          dibangun dan dikembangkan dalam rangka meningkatkan layanan sekolah kepada peserta didik, orang tua, dan masyarakat.</p>
                      <div class="text-center text-lg-start">
                          <a href="<?php echo base_url('daftar/siswabaru') ?>" class="btn-get-started scrollto" style="background-color:green;">Daftar Peserta Didik Baru <i class="bi bi-receipt"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                  <img src="<?php echo base_url() ?>assets/images/sd.png" class="img-fluid animated" alt="">
              </div>
          </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
          <defs>
              <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
          </defs>
          <g class="wave1">
              <use xlink:href="#wave-path" x="50" y="3" fill="#D6E8EE">
          </g>
          <g class="wave2">
              <use xlink:href="#wave-path" x="50" y="0" fill="#97CADB">
          </g>
          <g class="wave3">
              <use xlink:href="#wave-path" x="50" y="9" fill="#01BABE">
          </g>
      </svg>


  </section><!-- End Hero -->


  <!-- ======= Section ======= -->
  <section id="">
      <div class="container">
          <div class="row">


              <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                          <img src="<?php echo base_url() ?>/assets/images/bg10.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                          <img src="<?php echo base_url() ?>/assets/images/bg14.jpeg" class="d-block w-100" alt="...">
                      </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                  </button>
              </div>



          </div>
      </div>
  </section>


  <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about bg-light">
          <div class="container-fluid">
              <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded bg-white">
                  <div class="row"><br><br>
                      <?php
                        foreach ($data as $data) { ?> <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="fade-right">
                              <img src="<?= base_url() ?>assets/images/upload/<?php echo ucwords($data['image']); ?>" alt="" height="450px" width="60%">

                          </div>

                          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                              <h3>Sambutan Kepala Sekolah</h3>
                              <p>Assalamu‘alaikum Warohmatullahi Wabarokkatuh. <br>

                                  Selamat datang di situs web SDN Mejasem Barat 01, Kecamatan Kramat Kabupaten Tegal Jawa Tengah. Saya mengucapkan terima kasih kepada semua guru, staf, siswa, dan orang tua yang telah berkontribusi dalam memajukan sekolah kami. Sekolah ini telah berkembang pesat dan mencapai tujuan pendidikannya dengan baik. Kami bertekad untuk terus memberikan pelayanan terbaik bagi siswa dan orang tua. Semoga kunjungan Anda dan anggota keluarga di website ini dapat memberikan informasi yang membantu Anda untuk mengetahui lebih banyak tentang kami, termasuk program-program unggulan yang kami miliki. Terima kasih.

                                  Wassalamu'alaikum Warahmatullahi Wabarakatuh. <br><br> Salam Hangat, <br>

                              <h4><strong><?php echo ucwords($data['nama_kepala_ponpes']); ?></strong></h4>

                              Kepala Sekolah, <br>

                              SDN Mejasem Barat 01, Kecamatan Kramat, Kabupaten Tegal, Jawa Tengah.</p>
                              <!-- <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                              <defs>
                                  <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                              </defs>
                              <g class="wave1">
                                  <use xlink:href="#wave-path" x="50" y="3" fill="#D6E8EE">
                              </g>
                              <g class="wave2">
                                  <use xlink:href="#wave-path" x="50" y="0" fill="#97CADB">
                              </g>
                              <g class="wave3">
                                  <use xlink:href="#wave-path" x="50" y="9" fill="#01BABE">
                              </g>
                          </svg>-->



                          </div>
                  </div>
              </div>

          </div>
      </section><!-- End About Section -->
      <!-- ======= Details Section ======= -->
      <section id="details" class="details">
          <div class="container">
              <div class="row content">
                  <div class="col-md-4 order-1 order-md-2" data-aos="fade-up">
                      <?php
                            foreach ($brosur as $br) { ?>
                          <img src="<?php echo base_url(); ?>assets/images/upload/<?= $br['image']; ?>" width="100%" height="500px" alt="...">
                      <?php } ?>

                  </div>
                  <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                      <h3>VISI DAN MISI</h3><br>
                      <h5>VISI</h5>
                      <p class="fst-italic">
                          Mewujudkan siswa yang bertaqwa, berprestasi, berbudaya, dan berjiwa nasionalis.
                      </p><br>
                      <h5>MISI</h5>
                      <p>
                          <i class="bi bi-check"></i> Menumbuhkembangkan penghayatan dan pengamalan ajaran agama yang dianut peserta didik. <br>
                          <i class="bi bi-check"></i> Mengembangkan dan melaksanakan model pembelajaran Aktif, Inovatif, Kreatif, Efektif Serta menyenangkan. <br>
                          <i class="bi bi-check"></i> Mengembangkan budaya kompetitif dikalangan peserta didik dalam upaya meningkatkan prestasi. <br>
                          <i class="bi bi-check"></i> Menanamkan budaya tertib, budaya bersih, budaya membaca dan budaya belajar. <br>
                          <i class="bi bi-check"></i> Melestarikan dan mengembangkan seni budaya daerah. <br>
                          <i class="bi bi-check"></i> Mengembangkan pribadi yang cinta tanah air. <br>
                      </p>
                  </div>
              </div>


          </div>
      </section><!-- End Details Section -->


      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing bg-light">
          <div class="container">

              <div class="row" data-aos="fade-left">

                  <div class="col-lg-4 col-md-6 ">
                      <div class="box" data-aos="zoom-in" data-aos-delay="200" style="height: 350px;">
                          <h3 style="color:white;background-color:black;">Informasi Pendaftaran</h3><br>
                          <p>Dibuka Pendaftaran Peserta Didik : <br>
                              <font color="blue"><?php echo ucwords($data['pendaftaran_awal']); ?> </font><br>
                              Batas Pendaftaran : <br>
                              <font color="red"> <?php echo ucwords($data['batas_akhir']); ?> </font><br>
                              Tahun ajar : <?php echo ucwords($data['periode']); ?>
                          </p>

                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                      <div class="box" data-aos="zoom-in" data-aos-delay="100" style="height: 350px;">
                          <h3 style="color:white;background-color:black;">Bantuan ?</h3><br>
                          <p style="color: black;">Jika Calon Siswa mengalami kesulitan untuk mendaftar di website, anda bisa Klik Bantuan dibawah ini.</p>
                          <div class="btn-wrap bg-white">
                              <a href="<?php echo base_url('utama/kesulitanMendaftar') ?>" class="btn-buy">Bantuan ?</a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                      <div class="box" data-aos="zoom-in" data-aos-delay="300" style="height: 350px;">
                          <h3 style="color:white;background-color:black;">Alamat Sekolah</h3><br><br>
                          <p>Jl. Semanggi IV, Sibata, Mejasem Tim., Kec. Kramat, Kabupaten Tegal, Jawa Tengah 12930</p>

                      </div>
                  </div>



              </div>

          </div>
      </section><!-- End Pricing Section -->


  <?php } ?>




  <!-- Bagian Peta -->
  <section id="features" class="features">
      <div class="container" data-aos="fade-up"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.052863321928!2d109.1537895762534!3d-6.884271399858403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb838fbcf6ed1%3A0x8c2e4ab8aa3df2d3!2sSD%20Negeri%2001%20Mejasem%20Barat!5e0!3m2!1sid!2sid!4v1678801346105!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
  </section>

  </main>