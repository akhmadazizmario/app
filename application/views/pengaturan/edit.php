<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?= $judul; ?></strong>
                        <a class="btn btn-sm btn-secondary rounded float-right" href="<?= site_url('pengaturan') ?>"> <i class="fa fa-arrow-left"></i> Kembali </a>
                    </div>
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

                        <form action="<?= base_url('pengaturan/update/' . $row['id_pengaturan']); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" name="id_pengaturan" value="<?= $row['id_pengaturan'] ?>">
                            <div class="form-group">
                                <label for="Judul"> no.Telp Sekolah :</label><br>
                                <input class="form-control" id="no_hp" type="number" name="no_hp" value="<?= $row['no_hp'] ?>" required oninvalid="this.setCustomValidity('no hp Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="whatsapp"> Nomor Whats App </label><br>
                                <input class="form-control" id="whatsapp" type="text" name="whatsapp" placeholder="Masukkan Nomor whatsapp" value="<?= $row['whatsapp'] ?>" required oninvalid="this.setCustomValidity('No Whats App Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="Email"> Email :</label><br>
                                <input class="form-control" id="email" type="text" name="email" value="<?= $row['email'] ?>" required oninvalid="this.setCustomValidity('Email Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="tanggal"> Pendaftaran Dibuka : </label><br>
                                <input class="form-control" id="pendaftaran_awal" type="date" name="pendaftaran_awal" placeholder="Masukkan Tanggal" value="<?= $row['pendaftaran_awal'] ?>" required oninvalid="this.setCustomValidity('Tanggal Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="tanggal"> Batas Pendaftaran </label><br>
                                <input class="form-control" id="batas_akhir" type="date" name="batas_akhir" placeholder="Masukkan Tanggal" value="<?= $row['batas_akhir'] ?>" required oninvalid="this.setCustomValidity('Tanggal Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="Periode"> Periode Tahun ajar :</label><br>
                                <input class="form-control" id="periode" type="text" name="periode" value="<?= $row['periode'] ?>" required oninvalid="this.setCustomValidity('Periode Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>


                            <div class="form-group">
                                <label for="nama_kepala_ponpes"> Nama Kepala Sekolah </label><br>
                                <input class="form-control" id="nama_kepala_ponpes" type="text" name="nama_kepala_ponpes" placeholder="Masukkan nama_kepala_ponpes" value="<?= $row['nama_kepala_ponpes'] ?>" required oninvalid="this.setCustomValidity('nama_kepala_ponpes Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="link_grup_whatsapp">Tautan Group Whatsapp </label><br>
                                <input class="form-control" id="link_grup_whatsapp" type="text" name="link_grup_whatsapp" placeholder="Masukkan link_grup_whatsapp" value="<?= $row['link_grup_whatsapp'] ?>">
                            </div>

                            <!--<div class="form-group">
                                <label for="fasilitas"> Fasilitas </label>
                                <textarea id="tiny" name="fasilitas" value="<?= $row['fasilitas'] ?>" placeholder="Masukkan fasilitas"><?= $row['fasilitas'] ?></textarea>
                            </div>-->

                            <div class="form-group">
                                <label for="instagram"> Link Instagram Sekolah </label><br>
                                <input class="form-control" id="instagram" type="text" name="instagram" placeholder="Masukkan Link instagram" value="<?= $row['instagram'] ?>" required oninvalid="this.setCustomValidity('Link instagram Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="facebook"> Link Facebook Sekolah </label><br>
                                <input class="form-control" id="facebook" type="text" name="facebook" placeholder="Masukkan Link facebook" value="<?= $row['facebook'] ?>" required oninvalid="this.setCustomValidity('Link facebook Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="youtube"> Link Youtube Sekolah </label><br>
                                <input class="form-control" id="youtube" type="text" name="youtube" placeholder="Masukkan Link youtube" value="<?= $row['youtube'] ?>" required oninvalid="this.setCustomValidity('Link Youtube Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <?php if ($row['image'] != null) { ?>
                                <div class="form-group">
                                    <label class="form-label"> Foto Kepala Sekolah</label> <br>
                                    <img src="<?= base_url('assets/images/upload/' . $row['image']) ?>" alt="" width="80px"> </td>
                                </div>
                            <?php } ?>
                            <div class="form-group custom-file mb-3">
                                <input id="upload" type="file" name="image" class="custom-file-input" id="customFile">
                                <input type="hidden" name="old_img" value="<?= $row['image'] ?>">
                                <label class="custom-file-label" for="customFile">Choose file - Maks. 2MB</label>
                            </div>

                            <button class="btn btn-sm rounded btn-primary" type="submit"> <i class="fa fa-save"></i> Update </button>
                            <button class="btn btn-sm rounded btn-danger" type="reset"> <i class="fa fa-rotate-right"></i> Reset </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->