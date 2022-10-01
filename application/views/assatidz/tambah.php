<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?= $judul; ?></strong>
                        <a class="btn btn-sm btn-danger float-right" href="<?= site_url('assatidz') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
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
                        <form action="<?= base_url('assatidz/save'); ?>" method="post" enctype="multipart/form-data">

                            <!--<div class="form-group">
                          <label for="id_user_assatidz"> Id User </label>
                          <select class="form-control" name="id_user_assatidz" id="id_user_assatidz" required
                          oninvalid="this.setCustomValidity('Pilih Id User disini')" oninput="setCustomValidity('')">
                            <option value="">:: Pilih User ::</option>
                         <?php foreach ($user->result() as $key => $data) { ?>
                              <option value="<?= $data->id_user ?>"> <?= $data->id_user . '-' . $data->nama ?></option>
                            <?php } ?>
                          </select>
                        </div> -->

                            <div class="form-group">
                                <label for="nik_assatidz"> NIK assatidz </label><br>
                                <input class="form-control" id="nik_assatidz" type="text" name="nik_assatidz" placeholder="Masukkan Nomor Induk Kependudukan" required oninvalid="this.setCustomValidity('NIK Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="nama_assatidz"> Nama assatidz </label><br>
                                <input class="form-control" id="nama_assatidz" type="text" name="nama_assatidz" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('Nama Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="jk_assatidz"> Jenis Kelamin </label><br>
                                <select class="form-control" name="jk_assatidz" required oninvalid="this.setCustomValidity('Pilih Jenis Kelamin disini')" oninput="setCustomValidity('')">
                                    <option value="">:: Pilih Jenis Kelamin ::</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tempat_lahir_assatidz"> Tempat Lahir assatidz </label><br>
                                <input class="form-control" id="tempat_lahir_assatidz" type="text" name="tempat_lahir_assatidz" placeholder="Masukkan Tempat Lahir" required oninvalid="this.setCustomValidity('Tempat Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="tgl_lahir_assatidz"> Tanggal Lahir assatidz </label><br>
                                <input class="form-control" id="tgl_lahir_assatidz" type="date" name="tgl_lahir_assatidz" placeholder="Masukkan Tanggal Lahir" required oninvalid="this.setCustomValidity('Tanggal Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="mulai_kerja"> Mulai Masuk </label><br>
                                <input class="form-control" id="mulai_kerja" type="date" name="mulai_kerja" placeholder="Masukkan Tanggal Mulai Kerja" required oninvalid="this.setCustomValidity('Tanggal Mulai Kerja Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="telp_assatidz"> No Telepon </label><br>
                                <input class="form-control" id="telp_assatidz" type="tel" name="telp_assatidz" placeholder="Masukkan Nomor Telepon" oninvalid="this.setCustomValidity('No Telp Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="gol_assatidz"> Golongan </label><br>
                                <select class="form-control" name="gol_assatidz" required oninvalid="this.setCustomValidity('Pilih Status disini')" oninput="setCustomValidity('')">
                                    <option value="">:: Pilih Golongan ::</option>
                                    <option value="1">Ponpes</option>
                                    <option value="2">RA</option>
                                    <option value="3">MDTU/MDTW</option>
                                    <option value="4">Pendidikan Kesetaraan</option>
                                    <option value="5">RTQ</option>
                                    <option value="6">PAUD-QU</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="pendidikan"> Pendidikan </label><br>
                                <select class="form-control" name="pendidikan" required oninvalid="this.setCustomValidity('Pilih Pendidikan disini')" oninput="setCustomValidity('')">
                                    <option value="">:: Pilih Pendidikan ::</option>
                                    <option value="1">SMA/SMK/MA</option>
                                    <option value="2">D3</option>
                                    <option value="3">S1</option>
                                    <option value="4">S2</option>
                                </select>
                            </div>

                            <label for="foto_assatidz"> Upload Pas Foto ( 3x4 )</label><br>
                            <div class="form-group custom-file mb-3">
                                <input id="foto_assatidz" type="file" name="foto_assatidz" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file - Maks. 2MB</label>
                            </div>

                            <button class="btn btn-sm btn-primary" type="submit"> <i class="fa fa-save"></i> Save </button>
                            <button class="btn btn-sm btn-secondary" type="reset"> <i class="fa fa-rotate-right"></i> Reset </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->