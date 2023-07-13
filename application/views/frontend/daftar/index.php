<main id="main">
    <div class="breadcrumbs bg-light">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-dark">Formulir Data Pendaftaran SDN MEJASEM BARAT 01</h2>
                <ol>
                    <li><a href="<?php echo base_url('utama') ?>">Home</a></li>
                    <li class="text-dark">Pendaftaran</li>
                </ol>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="content">
                <a class="btn btn-warning mb-5" href="<?= base_url() ?>assets/tutorial_pendaftaran.pdf">Tutorial Pendaftaran <i class="bi bi-blockquote-right"></i></a>
                <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <!--<strong class="card-title"><i class="bi bi-exclamation-circle"></i>&nbsp;<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="text-danger"> Klik Lihat Petunjuk Pendafatarn</a></strong>-->
                            <strong style="color:red;">Mohon isi formulir dengan Data yang benar !</strong>
                        </div>

                        <!-- Petunjuk Modal -->
                        <!--<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Petunjuk Pendaftaran</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Dimohon untuk mengisi formulir pendaftaran dengan data yang benar dan valid.
                                            <br><br>
                                            <strong>Notice : </strong><br>
                                            <i class="bi bi-check"></i> isi semua data yang ada tulisan <strong> (* wajib diisi ) </strong><br>
                                            <i class="bi bi-check"></i> Jika <strong> (* opsi/tidak wajib ) </strong> berarti tidak wajib diisi yah. <br>
                                            <i class="bi bi-check"></i> Jika ada kesalahan upload data, bisa hubungi kami secepatnya agar bisa diubah. <br>
                                            <i class="bi bi-check"></i> Klik Daftar. <br>
                                            <i class="bi bi-check"></i> Tunggu pemberitahuan lebih lanjut lewat whatsapp/no.hp yang terdaftar.
                                            <br><br>
                                            <strong>Catatan : </strong><br>
                                            Untuk berkas Akta & Kartu Keluarga Harap<strong> Difoto dengan jelas yah</strong>, Tidak boleh ada yang blur karena nanti bisa berpengaruh di tahap seleksi.
                                            <br>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                        <div class="card-body">
                            <?php if ($this->session->has_userdata('error')) : ?>
                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                    <span class="badge badge-pill badge-danger">Perhatian!</span>
                                    <?= $this->session->flashdata('error'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <form action="<?= base_url('daftar/saveAnak'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row">

                                    <!-- Bagian kiri -->
                                    <div class="col-lg-6">
                                        <div class="form-group mt-3">
                                            <label for="nik_anak"><strong> NIK Anak </strong> (* wajib diisi)</label><br>
                                            <input class="form-control" id="nik_anak" type="text" name="nik_anak" placeholder="Masukan Nik Calon Siswa" required oninvalid="this.setCustomValidity('NIK Wajib Diisi')" oninput="this.setCustomValidity('')">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="nama_anak"><strong> Nama Lengkap Anak </strong> (*wajib diisi)</label><br>
                                            <input class="form-control" id="nama_anak" type="text" name="nama_anak" placeholder="Masukkan Nama Calon Siswa" required oninvalid="this.setCustomValidity('Nama Wajib Diisi')" oninput="this.setCustomValidity('')">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="alamat"><strong> Alamat Lengkap </strong> (*wajib disi)</label><br>
                                            <textarea class="form-control" id="alamat" type="address" name="alamat" placeholder="Masukkan Alamat Lengkap " required oninvalid="this.setCustomValidity('Alamat Wajib Diisi')" oninput="this.setCustomValidity('')"></textarea>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="no_hp"><strong> No HP / whatsapp</strong> (*Nomor Harus Aktif !)</label><br>
                                            <input class="form-control" id="no_hp" type="number" name="no_hp" placeholder="Masukan Nomor hp/whatsapp 12 Digit, contoh : 0897XXXXVVVV" required oninvalid="this.setCustomValidity('No hp Wajib Diisi dan tidak lebih dari 13 digit angka')" oninput="this.setCustomValidity('')">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="jk_anak"><strong> Jenis Kelamin </strong> (*wajib diisi) </label><br>
                                            <select class="form-control" name="jk_anak" required oninvalid="this.setCustomValidity('Pilih Jenis Kelamin disini')" oninput="setCustomValidity('')">
                                                <option value="">:: Pilih Jenis Kelamin ::</option>
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="tempat_lahir_anak"> <strong> Tempat Lahir Anak </strong> (*wajib diisi)</label><br>
                                            <input class="form-control" id="tempat_lahir_anak" type="text" name="tempat_lahir_anak" placeholder="Masukkan Tempat Lahir" required oninvalid="this.setCustomValidity('Tempat Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="tgl_lahir_anak"><strong> Tanggal Lahir Anak </strong> (*wajib diisi)</label><br>
                                            <input class="form-control" id="tgl_lahir_anak" type="date" name="tgl_lahir_anak" placeholder="Masukkan Tanggal Lahir" required oninvalid="this.setCustomValidity('Tanggal Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="asal_paud"><strong> asal_paud Calon Siswa </strong></label><br>
                                            <input class="form-control" id="asal_paud" type="text" name="asal_paud" placeholder="contoh : TK Aisyiah">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="nama_ibu_kandung"><strong> Nama ibu </strong>(*wajib diisi)</label><br>
                                            <input class="form-control" id="nama_ibu_kandung" type="text" name="nama_ibu_kandung" placeholder="masukan nama ibu" required oninvalid="this.setCustomValidity('nama Ibu Wajib Diisi')" oninput="this.setCustomValidity('')">
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label for="nama_bapak_kandung"><strong> Nama Ayah </strong>(*wajib diisi)</label><br>
                                            <input class="form-control" id="nama_bapak_kandung" type="text" name="nama_bapak_kandung" placeholder="masukan nama ayah" required oninvalid="this.setCustomValidity('Nama Ayah Wajib Diisi')" oninput="this.setCustomValidity('')">
                                        </div>
                                    </div>

                                    <!-- Bagian Kanan -->
                                    <div class="col-lg-6">
                                        <div class="form-group mt-3">
                                            <Link for="pekerjaan_ibu"><strong>Pekerjaan Ibu</strong>(*wajib diisi)</label><br>
                                            <input class="form-control" id="pekerjaan_ibu" type="text" name="pekerjaan_ibu" placeholder="contoh : Petani" required oninvalid="this.setCustomValidity('Pekerjaan ibu wajib diisi')" oninput="this.setCustomValidity('')">
                                        </div>

                                        <div class="form-group mt-3">
                                            <label for="pekerjaan_ayah"><strong> Pekerjaan Ayah </strong>(*wajib diisi)</label><br>
                                            <input class="form-control" id="pekerjaan_ayah" type="text" name="pekerjaan_ayah" placeholder="contoh : Buruh Pabrik" required oninvalid="this.setCustomValidity('Pekerjaan ayah wajib diisi')" oninput="this.setCustomValidity('')">
                                        </div>

                                        <!--<div class="form-group mt-3">
                                            <label for="ktp"><strong> Foto KTP Ayah/Ibu </strong>( * Opsional / tidak wajib diisi )</label><br>
                                            <input id="ktp" type="file" name="ktp" class="form-control">
                                            <small class="help-block"> Maks. 2MB</small>
                                        </div>
                                        <br>-->
                                        <div class="form-group mt-3">
                                            <label for="agama"><strong> Agama </strong>(*wajib diisi)</label><br>
                                            <select class="form-control" name="agama" required oninvalid="this.setCustomValidity('Pilih Agama disini')" oninput="setCustomValidity('')">
                                                <option value="">:: Pilih Agama ::</option>
                                                <option value="1">Islam</option>
                                                <option value="2">Kristen</option>
                                                <option value="3">Katholik</option>
                                                <option value="4">Hindu</option>
                                                <option value="5">Budha</option>
                                                <option value="6">Konghucu</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input class="form-control" id="pendidikan" type="hidden" name="pendidikan" value="1">
                                        </div>
                                        <!--<div class="form-group">
                                            <label for="scan_kk"><strong>Foto Kartu Keluarga</strong> ( *wajib diisi )</label><br>
                                            <input id="scan_kk" type="file" name="scan_kk" class="form-control" required>
                                            <small class="help-block"> Maks. 2MB</small>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="scan_akte"><strong>Foto Akta Kelahiran Calon Siswa</strong>( *wajib diisi )</label><br>
                                            <input id="scan_akte" type="file" name="scan_akte" class="form-control" required>
                                            <small class="help-block"> Maks. 2MB</small>
                                        </div>
                                        <br>-->
                                        <div class="form-group">
                                            <input class="form-control" id="tahun_masuk" type="hidden" name="tahun_masuk" value="<?php echo date('Y') ?>">
                                        </div>

                                        <!--<div class="form-group">
                                            <label for="foto_anak"><strong>Foto Calon Siswa ( 3x4 ) </strong> ( * opsional / tidak wajib diisi )</label><br>
                                            <input id="foto_anak" type="file" name="foto_anak" class="form-control">
                                            <small class="help-block"> Maks. 2MB </small><br>
                                            <small class="help-block text-danger">Note! : Foto boleh bebas tetapi harus berpakaian sopan </small>
                                        </div>
                                        <br>--->
                                        <div class="form-group">
                                            <input class="form-control" id="jenis_masalah" type="hidden" name="jenis_masalah" value="8">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" id="keadaan_saat_ini" type="hidden" name="keadaan_saat_ini" value="1">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" id="akta" type="hidden" name="akta" value="1">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" id="tempat_tinggal" type="hidden" name="tempat_tinggal" value="-">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" id="wali" type="hidden" name="wali" value="-">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" id="alasan_masuk_panti" type="hidden" name="alasan_masuk_panti" value="1">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" id="jenis_bantuan" type="hidden" name="jenis_bantuan" value="5">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" id="masuk_dtks" type="hidden" name="masuk_dtks" value="2">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" id="tahun_bantuan" type="hidden" name="tahun_bantuan" value="-">
                                        </div>

                                        <div>
                                            <button class="btn btn-sm btn-primary" type="submit"> <i class="fa fa-save"></i> Daftar </button>
                                            <button class="btn btn-sm btn-secondary" type="reset"> <i class="fa fa-rotate-right"></i> Reset </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>