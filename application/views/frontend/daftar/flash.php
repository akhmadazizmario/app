<main id="main">
    <div class="breadcrumbs bg-light">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-dark">Status Pendaftaran</h2>
            </div>

        </div>
    </div>
    <section>
        <div class="container" data-aos="fade-up">
            <div class="alert alert-info" role="alert"><i class="bx bx-info-circle"></i><strong> Selamat, Pendaftaran Anda sudah
                    Berhasil <i class="bi bi-emoji-smile"></i></strong>
            </div><br><br>
            <h5> Silahkan Setelah Mendaftar, Calon Siswa <strong style="color: red;">WAJIB!</strong> Klik / Gabung Tautan/Link Group Whatsapp Calon Siswa Baru Dibawah Agar Tidak Ketinggalan Informasi:</h5>
            <br><br>
            <?php
            foreach ($data as $data) { ?>
                <center>
                    <a href="<?php echo ucwords($data['link_grup_whatsapp']); ?>" class="btn btn-success">
                        <h3>Group Whatsapp Calon Siswa Baru <i class="bi bi-whatsapp"></i></h3>
                    </a>
                    <br><br>
                    <p>atau bisa lewat link dibawah ini :</p>
                    <p><a href="<?php echo ucwords($data['link_grup_whatsapp']); ?>"><?php echo ucwords($data['link_grup_whatsapp']); ?></a></p>
                </center>

            <?php } ?>
            <!--<?php if ($this->session->has_userdata('success')) : ?>
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success text-dark">Success</span>
                    <?= $this->session->flashdata('success'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="bx bxl-wink-smile"></i></span>
                    </button>
                </div>
            <?php endif; ?>-->
        </div>
    </section>
</main>