    <main id="main">

        <div class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="text-dark">Berita Sekolah</h2>
                    <ol>
                        <li><a href="<?php echo base_url('utama') ?>">Home</a></li>
                        <li class="text-dark">Blog</li>
                    </ol>
                </div>

            </div>
        </div>


        <!-- List Artikel -->
        <section id="blog" class="blog bg-light">
            <div class="container" data-aos="fade-up">
                <div class="row">


                    <div class="mb-5">
                        <div class="sidebar bg-white">
                            <div class="sidebar-item search-form">
                                <h3 class="sidebar-title">Cari Judul Berita</h3>
                                <form action="" class="mt-3" method="post">
                                    <input type="text" class="rounded" placeholder="Cari Berita ....." name="keyword">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row gy-4 posts-list">
                            <?php $no = 1;
                            foreach ($data as $data) { ?>
                                <div class="col-lg-4">

                                    <article class="d-flex flex-column rounded bg-white">


                                        <div class="post-img">
                                            <img src="<?php echo base_url(); ?>assets/images/upload/<?= $data['image']; ?>" alt="" class="img-fluid rounded-top">
                                        </div>

                                        <h2 class="title">
                                            <a href=""><?php echo substr($data['judul'], 0, 40) . '...'; ?></a><br>
                                        </h2>

                                        <div class="content">
                                            <p>
                                                <?php echo substr($data['isi'], 0, 200) . '...'; ?>
                                            </p>
                                        </div>

                                        <div class="read-more mt-auto align-self-end">
                                            <a class="bg-light text-dark" href="#"><i class="bi bi-calendar-date">&nbsp;</i><?= $data['tanggal']; ?></a>
                                            <a href="<?php echo base_url('utama/detail/' . $data['id_berita']) ?>">Baca Berita</a>
                                        </div>


                                    </article>
                                </div>
                            <?php $no++;
                            } ?>
                        </div>
                    </div>




                </div>
            </div>
        </section>
    </main>