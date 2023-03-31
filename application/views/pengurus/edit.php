<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>
            <a class="btn btn-sm btn-danger float-right" href="<?= site_url('pengurus') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
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
            <form action="<?= base_url('pengurus/update/' . $row['id_pengurus']); ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="nik_pengurus"> NIK Pengurus </label><br>
                <input class="form-control" id="nik_pengurus" type="text" name="nik_pengurus" value="<?= $row['nik_pengurus'] ?>" required oninvalid="this.setCustomValidity('NIK Wajib Diisi')" oninput="this.setCustomValidity('')" readonly>
              </div>

              <div class="form-group">
                <label for="nama_pengurus"> Nama Pengurus </label><br>
                <input class="form-control" id="nama_pengurus" type="text" name="nama_pengurus" value="<?= $row['nama_pengurus'] ?>" required oninvalid="this.setCustomValidity('Nama Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="jk_pengurus"> Jenis Kelamin </label><br>
                <select class="form-control" name="jk_pengurus" required oninvalid="this.setCustomValidity('Pilih Jenis Kelamin disini')" oninput="setCustomValidity('')">
                  <option value="">:: Pilih Jenis Kelamin ::</option>
                  <option value="L" <?= $row['jk_pengurus'] == 'L' ? 'selected' : null ?>>Laki-Laki</option>
                  <option value="P" <?= $row['jk_pengurus'] == 'P' ? 'selected' : null ?>>Perempuan</option>
                </select>
              </div>

              <div class="form-group">
                <label for="tempat_lahir_pengurus"> Tempat Lahir Pengurus </label><br>
                <input class="form-control" id="tempat_lahir_pengurus" type="text" name="tempat_lahir_pengurus" value="<?= $row['tempat_lahir_pengurus'] ?>" required oninvalid="this.setCustomValidity('Tempat Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="tgl_lahir_pengurus"> Tanggal Lahir Pengurus </label><br>
                <input class="form-control" id="tgl_lahir_pengurus" type="date" name="tgl_lahir_pengurus" value="<?= $row['tgl_lahir_pengurus'] ?>" required oninvalid="this.setCustomValidity('Tanggal Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="mulai_kerja"> Mulai Masuk </label><br>
                <input class="form-control" id="mulai_kerja" type="date" name="mulai_kerja" value="<?= $row['mulai_kerja'] ?>" required oninvalid="this.setCustomValidity('Tanggal Mulai Kerja Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="telp_pengurus"> No Telepon </label><br>
                <input class="form-control" id="telp_pengurus" type="text" name="telp_pengurus" value="<?= $row['telp_pengurus'] ?>" oninvalid="this.setCustomValidity('No. Telp Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="jabatan"> Jabatan </label><br>
                <select class="form-control" name="jabatan" required oninvalid="this.setCustomValidity('Pilih Jabatan disini')" oninput="setCustomValidity('')">
                  <option value="">:: Pilih Jabatan ::</option>
                  <option value="1" <?= $row['jabatan'] == '1' ? 'selected' : null ?>>Kepala Sekolah</option>
                  <option value="2" <?= $row['jabatan'] == '2' ? 'selected' : null ?>>Wakil Kepala Sekolah</option>
                  <option value="3" <?= $row['jabatan'] == '3' ? 'selected' : null ?>>Kesiswaan </option>
                  <option value="4" <?= $row['jabatan'] == '4' ? 'selected' : null ?>>Kurikulum </option>
                  <option value="5" <?= $row['jabatan'] == '5' ? 'selected' : null ?>>Wali Kelas</option>
                  <option value="6" <?= $row['jabatan'] == '6' ? 'selected' : null ?>>Tata Usaha</option>
                  <option value="7" <?= $row['jabatan'] == '7' ? 'selected' : null ?>>BK</option>
                  <option value="8" <?= $row['jabatan'] == '8' ? 'selected' : null ?>>Pustakawan</option>
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

              <?php if ($row['foto_pengurus'] != null) { ?>
                <div class="form-group">
                  <label class="form-label"> Foto Anda</label> <br>
                  <img src="<?= base_url('upload/foto_pengurus/' . $row['foto_pengurus']) ?>" alt="" width="80px"> </td>
                </div>
              <?php } ?>

              <label for="foto_pengurus"> Upload Pas Foto ( 3x4 )</label><br>
              <div class="form-group custom-file mb-3">
                <input id="foto_pengurus" type="file" name="foto_pengurus" class="custom-file-input" id="customFile">
                <input type="hidden" name="old_img" value="<?= $row['foto_pengurus'] ?>">
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