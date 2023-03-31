<main id="main">

    <!-- Bagian Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-dark"><?= $judul; ?></h2>
                <ol>
                    <li><a href="<?php echo base_url('utama') ?>">Home</a></li>
                    <li class="text-dark"><?= $judul; ?></li>
                </ol>
            </div>

        </div>
    </div>

    <!-- Bagian Tata Cara Pendaftaran -->
    <section id="about" class="about section-bg bg-white">
        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">
                <h1><strong class="text-dark">Tata Cara pendaftaran</strong> </h1>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?php echo base_url() ?>assets/frontend/img/form.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center bg-white" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-lg-6">
                            <p><i class="bi bi-check"></i> Masuk Ke Website SDN MEJASEM BARAT 01</p>
                            <P><i class="bi bi-check"></i> Persiapkan Terlebih Dahulu berkas-berkasnya</P>
                            <p><i class="bi bi-check"></i> Klik Tombol Pendaftaran Peserta Didik</p>
                            <p><i class="bi bi-check"></i> Isi formulir pendaftaran dengan data yang Valid!</p>
                            <p><i class="bi bi-check"></i> Jika sudah diisi lalu klik Daftar Makas akan muncul pesan "Pendaftaran berhasil"</p>
                            <p><i class="bi bi-check"></i> Pendaftaran sudah diproses, untuk pemberitahuan selanjutnya akan diberitahu melalui <strong>No HP/Whatsapp</strong> calon siswa.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</main>