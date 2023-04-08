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

    <!-- Bagian Detail Halaman -->
    <section>
        <?php
        foreach ($data as $data) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <strong><img class="img-fluid" width="70px" height="70px" src="<?= base_url() ?>assets/images/sdn.jfif" alt="">
                            SDN MEJASEM BARAT 01
                        </strong> <br><br>
                        <h6 class="text-dark"> <strong>Assalamualaikum wr.wb</strong></h6>
                        <p style="width: 90%; text-align: justify;">
                            Salam sejahtera selalu untuk kita semua. Selamat datang di SD Negeri Mejasem Barat 01. Dengan kemajuan zaman dan berkembangnya teknologi yang sangat pesat
                            kami terus berinovasi memberikan pelayanan yang terbaik untuk masyarakat dan siswa dengan perubahan dan tuntutan kebutuhan jaman saat ini.
                            Kami ingin terus maju dan meningkatkan seluruh aspek. visi kami ingin Mewujudkan siswa yang bertaqwa, berprestasi, berbudaya, dan berjiwa nasionalis. Dan misi kami ingin
                            Menumbuhkembangkan penghayatan dan pengamalan ajaran agama yang dianut peserta didik,
                            Mengembangkan dan melaksanakan model pembelajaran Aktif, Inovatif, Kreatif, Efektif Serta menyenangkan,
                            Mengembangkan budaya kompetitif dikalangan peserta didik dalam upaya meningkatkan prestasi,
                            Menanamkan budaya tertib, budaya bersih, budaya membaca dan budaya belajar,
                            Melestarikan dan mengembangkan seni budaya daerah,
                            Mengembangkan pribadi yang cinta tanah air.

                        </p>
                    </div>

                    <div class="col-lg-3">
                        <div class="text-center card shadow-none rounded p-4">
                            <div class="member-card pt-2 pb-2">
                                <h4 class="fw-bold mb-3" style="color: #5fcf80;">Kepala Sekolah</h4>
                                <div class="thumb-lg member-thumb mx-auto">
                                    <img src="<?= base_url() ?>assets/images/upload/<?php echo ucwords($data['image']); ?>" class="rounded-circle img-thumbnail" alt="profile-image" style="width: 100px;">
                                </div>
                                <div class="mt-3">
                                    <span><strong><?php echo ucwords($data['nama_kepala_ponpes']); ?></strong></span>
                                </div>
                                <span>______</span>
                                <div class="captions mt-2 fs-6">
                                    <p>Puji syukur kepada Allah SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan anugerahnya sehingga
                                        website ini dapat terus berkiprah dan eksis di dunia maya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>

</main>