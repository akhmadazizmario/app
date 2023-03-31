  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="footer-top">
          <div class="container">
              <div class="row">

                  <div class="col-lg-4 col-md-6">
                      <div class="footer-info">
                          <h3>SDN MEJASEM BARAT 01</h3>
                          <a href="#"><img src="<?php echo base_url() ?>assets/images/kw.jpg" alt="" height="100px" width="100px"></a>
                          <div class="social-links mt-3">
                              <?php
                                foreach ($footer as $data) { ?>
                                  <a href="<?php echo ucwords($data['youtube']); ?>" class="youtube"><i class="bx bxl-youtube"></i></a>
                                  <a href="<?php echo ucwords($data['facebook']); ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                                  <a href="<?php echo ucwords($data['instagram']); ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                                  <a href="https://wa.me/<?php echo ucwords($data['whatsapp']); ?>" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
                              <?php } ?>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-2 col-md-6 footer-links">
                      <h4>Halaman Kami</h4>
                      <ul>
                          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('utama') ?>">Beranda</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('utama/tentangKami') ?>">Tentang kami</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('utama/galeri') ?>">Galeri</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('utama/blog') ?>">Berita Sekolah</a></li>
                      </ul>
                  </div>

                  <div class="col-lg-2 col-md-6 footer-links">
                      <h4>Pendafataran</h4>
                      <ul>
                          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('utama/tataCaraMendaftar') ?>">Tata cara Pendaftaran</a></li>
                      </ul>
                  </div>

                  <div class="col-lg-4 col-md-6 footer-newsletter">
                      <h4>Hubungi Kami</h4>
                      <p>
                          <?php
                            foreach ($footer as $data) { ?>
                              <strong><i class='bx bx-phone'></i> : <?php echo ucwords($data['no_hp']); ?></strong><br>
                              <strong><i class='bx bxl-gmail'></i> : <?php echo ucwords($data['email']); ?></strong><br>
                              <strong><i class='bx bxl-whatsapp'></i> : <?php echo ucwords($data['whatsapp']); ?></strong> <br><br>
                          <?php } ?>
                      </p>
                  </div>

              </div>
          </div>
      </div>

      <div class="container">
          <div class="copyright">
              &copy; Copyright <strong><span> SDN MEJASEM BARAT 01. <script type="text/javascript">
                          var creditsyear = new Date();
                          document.write(creditsyear.getFullYear());
                      </script></span></strong>. All Rights Reserved
          </div>

      </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>assets/frontend/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url() ?>assets/frontend/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url() ?>assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/frontend/vendor/php-email-form/validate.js"></script>

  <!-- Blog Vendor JS Files -->
  <script src="<?php echo base_url() ?>assets/blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/blog/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url() ?>assets/blog/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url() ?>assets/blog/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>assets/blog/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/blog/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>assets/frontend/js/main.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>assets/blog/js/main.js"></script>

  </body>

  </html>