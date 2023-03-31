<main id="main">
  <div class="breadcrumbs bg-white">
    <div class="container">

    </div>
  </div>

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2 style="color: black;">Galeri</h2>
        <p>SDN MEJASEM BARAT 01</p>
      </div>

      <div class="row" data-aos="fade-left">
        <?php foreach ($data as $data) : ?>
          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="<?php echo base_url(); ?>assets/images/upload/<?= $data['image']; ?>" class="img-fluid" alt=""></div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

    </div>
  </section><!-- End Team Section -->


</main>