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
            <div class="alert alert-info" role="alert"><i class="bx bx-info-circle"></i><strong> Pendaftaran Anda sudah
                    berhasil dan sedang di cek oleh admin SD NEGERI MEJASEM BARAT 01. setelahnya silahkan cek whatsapp atau pesan untuk
                    pemberitahuan yang lebih lanjut lagi,
                    karena kami akan memberitahukan pengumuman lewat
                    whatsapp / sms ke nohp yang anda kirim.</strong>
            </div><br><br>
            <?php if ($this->session->has_userdata('success')) : ?>
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success text-dark">Success</span>
                    <?= $this->session->flashdata('success'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="bx bxl-wink-smile"></i></span>
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>