<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?= $judul; ?></strong>
                        <a class="btn btn-sm btn-danger float-right" href="<?= site_url('guru') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
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
                        <form action="<?= base_url('guru/update/' . $row['id_guru']); ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="nik_guru"> NIK guru </label><br>
                                <input class="form-control" id="nik_guru" type="text" name="nik_guru" value="<?= $row['nik_guru'] ?>" required oninvalid="this.setCustomValidity('NIK Wajib Diisi')" oninput="this.setCustomValidity('')" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nama_guru"> Nama guru </label><br>
                                <input class="form-control" id="nama_guru" type="text" name="nama_guru" value="<?= $row['nama_guru'] ?>" required oninvalid="this.setCustomValidity('Nama Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="jk_guru"> Jenis Kelamin </label><br>
                                <select class="form-control" name="jk_guru" required oninvalid="this.setCustomValidity('Pilih Jenis Kelamin disini')" oninput="setCustomValidity('')">
                                    <option value="">:: Pilih Jenis Kelamin ::</option>
                                    <option value="L" <?= $row['jk_guru'] == 'L' ? 'selected' : null ?>>Laki-Laki</option>
                                    <option value="P" <?= $row['jk_guru'] == 'P' ? 'selected' : null ?>>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tempat_lahir_guru"> Tempat Lahir guru </label><br>
                                <input class="form-control" id="tempat_lahir_guru" type="text" name="tempat_lahir_guru" value="<?= $row['tempat_lahir_guru'] ?>" required oninvalid="this.setCustomValidity('Tempat Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="tgl_lahir_guru"> Tanggal Lahir guru </label><br>
                                <input class="form-control" id="tgl_lahir_guru" type="date" name="tgl_lahir_guru" value="<?= $row['tgl_lahir_guru'] ?>" required oninvalid="this.setCustomValidity('Tanggal Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="mulai_kerja"> Mulai Masuk </label><br>
                                <input class="form-control" id="mulai_kerja" type="date" name="mulai_kerja" value="<?= $row['mulai_kerja'] ?>" required oninvalid="this.setCustomValidity('Tanggal Mulai Kerja Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>

                            <div class="form-group">
                                <label for="telp_guru"> No Telepon </label><br>
                                <input class="form-control" id="telp_guru" type="text" name="telp_guru" value="<?= $row['telp_guru'] ?>" oninvalid="this.setCustomValidity('No. Telp Wajib Diisi')" oninput="this.setCustomValidity('')" readonly>
                            </div>

                            <!--<div class="form-group">
                                <label for="gol_assatidz"> Golongan</label><br>
                                <select class="form-control" name="gol_assatidz" required oninvalid="this.setCustomValidity('Pilih gol_assatidz disini')" oninput="setCustomValidity('')">
                                    <option value="">:: Pilih ::</option>
                                    <option value="1" <?= $row['gol_assatidz'] == '1' ? 'selected' : null ?>>Ponpes</option>
                                    <option value="2" <?= $row['gol_assatidz'] == '2' ? 'selected' : null ?>>RA</option>
                                    <option value="3" <?= $row['gol_assatidz'] == '3' ? 'selected' : null ?>>MDTU/MDTW</option>
                                    <option value="4" <?= $row['gol_assatidz'] == '4' ? 'selected' : null ?>>Pendidikan Kesetaraan</option>
                                    <option value="5" <?= $row['gol_assatidz'] == '5' ? 'selected' : null ?>>RTQ</option>
                                    <option value="6" <?= $row['gol_assatidz'] == '6' ? 'selected' : null ?>>PAUD-QU</option>
                                </select>
                            </div>-->

                            <div class="form-group">
                                <label for="pendidikan"> Pendidikan </label><br>
                                <select class="form-control" name="pendidikan" required oninvalid="this.setCustomValidity('Pilih Pendidikan disini')" oninput="setCustomValidity('')">
                                    <option value="">:: Pilih Pendidikan ::</option>
                                    <option value="1" <?= $row['pendidikan'] == '1' ? 'selected' : null ?>>SMA/SMK/MA</option>
                                    <option value="2" <?= $row['pendidikan'] == '2' ? 'selected' : null ?>>D3</option>
                                    <option value="3" <?= $row['pendidikan'] == '3' ? 'selected' : null ?>>S1</option>
                                    <option value="4" <?= $row['pendidikan'] == '4' ? 'selected' : null ?>>S2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status"> Status </label><br>
                                <select class="form-control" name="status" required oninvalid="this.setCustomValidity('Pilih Status disini')" oninput="setCustomValidity('')">
                                    <option value="">:: Pilih Status ::</option>
                                    <option value="1" <?= $row['status'] == '1' ? 'selected' : null ?>>Tetap</option>
                                    <option value="2" <?= $row['status'] == '2' ? 'selected' : null ?>>Kontrak</option>
                                    <option value="3" <?= $row['status'] == '3' ? 'selected' : null ?>>Relawan</option>
                                </select>
                            </div>

                            <?php if ($row['foto_guru'] != null) { ?>
                                <div class="form-group">
                                    <label class="form-label"> Foto Anda</label> <br>
                                    <img src="<?= base_url('upload/foto_guru/' . $row['foto_guru']) ?>" alt="" width="80px"> </td>
                                </div>
                            <?php } ?>

                            <label for="foto_guru"> Upload Pas Foto ( 3x4 )</label><br>
                            <div class="form-group custom-file mb-3">
                                <input id="foto_guru" type="file" name="foto_guru" class="custom-file-input" id="customFile">
                                <input type="hidden" name="old_img" value="<?= $row['foto_guru'] ?>">
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