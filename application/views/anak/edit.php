<div class="container">
  <a class="btn btn-sm btn-danger float-right" href="<?= site_url('anak') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
</div>
<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>
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
            <form action="<?= base_url('anak/updateanak/' . $row['nik_anak']); ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="old_img" value="<?= $row['foto_anak'] ?>">

              <div class="form-group">
                <label for="nik_anak"> NIK Anak</label><br>
                <input class="form-control" id="nik_anak" type="text" name="nik_anak" value="<?= $row['nik_anak'] ?>" oninvalid="this.setCustomValidity('NIK Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <!-- <div class="form-group">
                <label for="email"> Email ( Opsional )</label><br>
                <input class="form-control" id="email" type="text" name="email" value="<?= $row['email'] ?>">
              </div> -->

              <div class="form-group">
                <label for="no_hp"> No HP</label><br>
                <input class="form-control" id="no_hp" type="number" name="no_hp" value="<?= $row['no_hp'] ?>" oninvalid="this.setCustomValidity('NO HP Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="tahun_masuk">Tahun Masuk</label><br>
                <input class="form-control" id="tahun_masuk" type="number" name="tahun_masuk" value="<?= $row['tahun_masuk'] ?>" oninvalid="this.setCustomValidity('tahun masuk Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="nama_anak"> Nama Anak </label><br>
                <input class="form-control" id="nama_anak" type="text" name="nama_anak" value="<?= $row['nama_anak'] ?>" required oninvalid="this.setCustomValidity('Nama Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="jk_anak"> Jenis Kelamin </label><br>
                <select class="form-control" name="jk_anak" required oninvalid="this.setCustomValidity('Pilih Jenis Kelamin disini')" oninput="setCustomValidity('')">
                  <option value="">:: Pilih Jenis Kelamin ::</option>
                  <option value="L" <?= $row['jk_anak'] == 'L' ? 'selected' : null ?>>Laki-Laki</option>
                  <option value="P" <?= $row['jk_anak'] == 'P' ? 'selected' : null ?>>Perempuan</option>
                </select>
              </div>

              <div class="form-group">
                <label for="tempat_lahir_anak"> Tempat Lahir Anak </label><br>
                <input class="form-control" id="tempat_lahir_anak" type="text" name="tempat_lahir_anak" value="<?= $row['tempat_lahir_anak'] ?>" required oninvalid="this.setCustomValidity('Tempat Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="tgl_lahir_anak"> Tanggal Lahir Anak </label><br>
                <input class="form-control" id="tgl_lahir_anak" type="date" name="tgl_lahir_anak" value="<?= $row['tgl_lahir_anak'] ?>" required oninvalid="this.setCustomValidity('Tanggal Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="asal_paud"> asal paud </label><br>
                <input class="form-control" id="asal_paud" type="text" name="asal_paud" value="<?= $row['asal_paud'] ?>" required oninvalid="this.setCustomValidity('Tempat Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="nama_ibu_kandung"> Nama Ibu </label><br>
                <input class="form-control" id="nama_ibu_kandung" type="text" name="nama_ibu_kandung" value="<?= $row['nama_ibu_kandung'] ?>" required oninvalid="this.setCustomValidity('Nama Ibu Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="nama_bapak_kandung"> Nama Bapak </label><br>
                <input class="form-control" id="nama_bapak_kandung" type="text" name="nama_bapak_kandung" value="<?= $row['nama_bapak_kandung'] ?>" required oninvalid="this.setCustomValidity('Nama Bapak Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="pekerjaan"> Pekerjaan Ayah </label><br>
                <input class="form-control" id="pekerjaan_ayah" type="text" name="pekerjaan_ayah" value="<?= $row['pekerjaan_ayah'] ?>" placeholder="Masukkan Pekerjaan" required oninvalid="this.setCustomValidity('Pekerjaan Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="pekerjaan"> Pekerjaan Ibu </label><br>
                <input class="form-control" id="pekerjaan_ibu" type="text" name="pekerjaan_ibu" value="<?= $row['pekerjaan_ibu'] ?>" placeholder="Masukkan Pekerjaan" required oninvalid="this.setCustomValidity('Pekerjaan Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="pekerjaan"> Alamat Lengkap </label><br>
                <input class="form-control" id="alamat" type="text" name="alamat" value="<?= $row['alamat'] ?>" placeholder="Masukkan Alamat secara Lengkap" required oninvalid="this.setCustomValidity('Alamat Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="agama"> Agama </label><br>
                <select class="form-control" name="agama" required oninvalid="this.setCustomValidity('Pilih Agama disini')" oninput="setCustomValidity('')">
                  <option value="">:: Pilih Agama ::</option>
                  <option value="1" <?= $row['agama'] == '1' ? 'selected' : null ?>>Islam</option>
                  <option value="2" <?= $row['agama'] == '2' ? 'selected' : null ?>>Kristen</option>
                  <option value="3" <?= $row['agama'] == '3' ? 'selected' : null ?>>Katholik</option>
                  <option value="4" <?= $row['agama'] == '4' ? 'selected' : null ?>>Hindu</option>
                  <option value="5" <?= $row['agama'] == '5' ? 'selected' : null ?>>Budha</option>
                  <option value="6" <?= $row['agama'] == '6' ? 'selected' : null ?>>Konghucu</option>
                </select>
              </div>

              <div class="form-group">
                <label for="pendidikan"> Kelas</label><br>
                <select class="form-control" name="pendidikan" required oninvalid="this.setCustomValidity('Pilih Pendidikan disini')" oninput="setCustomValidity('')">
                  <option value="">:: Pilih Status ::</option>
                  <option value="1" <?= $row['pendidikan'] == '1' ? 'selected' : null ?>>1</option>
                  <option value="2" <?= $row['pendidikan'] == '2' ? 'selected' : null ?>>2</option>
                  <option value="3" <?= $row['pendidikan'] == '3' ? 'selected' : null ?>>3</option>
                  <option value="4" <?= $row['pendidikan'] == '4' ? 'selected' : null ?>>4</option>
                  <option value="5" <?= $row['pendidikan'] == '5' ? 'selected' : null ?>>5</option>
                  <option value="6" <?= $row['pendidikan'] == '6' ? 'selected' : null ?>>6</option>
                </select>
              </div>


          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-user"></i><strong class="card-title pl-2">Status Calon Siswa</strong>
          </div>
          <div class="card-body">
            <div class="mx-auto d-block">
              <img class="rounded-circle mx-auto d-block" src="<?= base_url('upload/foto_anak/' . $row['foto_anak']) ?>" alt="Card image cap" style="width:100px;height:100px;">
            </div>
            <p></p>
            <input id="foto_anak" type="file" name="foto_anak" class="form-control">
            <small class="help-block"> Maks. 2MB</small>
          </div>

          <div class="form-group">
            <label for="scan_kk">Link Berkas Kartu Keluarga</label><br>
            <?php
            if ($row['scan_kk'] == '') {
            ?>
              <span class="btn btn-secondary"><i class="fa fa-exclamation"></i> tidak tersedia</span>
            <?php
            } else {
            ?>
              <a class="btn btn-primary" href="<?= base_url('upload/scan_kk/' . $row['scan_kk']); ?>" title="Download KK" target='_blank'> <i class="fa fa-download"></i> Detail KK </a>
            <?php } ?>
            <p></p>
            <input id="scan_kk" type="file" name="scan_kk" class="form-control">
            <small class="help-block"> Maks. 2MB</small>
          </div>

          <div class="form-group">
            <label for="scan_akte">Link Berkas Akta Kelahiran</label><br>
            <?php
            if ($row['scan_akte'] == '') {
            ?>
              <span class="btn btn-secondary"><i class="fa fa-exclamation"></i> tidak tersedia</span>
            <?php
            } else {
            ?>
              <a class="btn btn-primary" href="<?= base_url('upload/scan_akte/' . $row['scan_akte']); ?>" title="Download Akte" target='_blank'> <i class="fa fa-download"></i> Detail Akte </a>
            <?php } ?>
            <p></p>
            <input id="scan_akte" type="file" name="scan_akte" class="form-control">
            <small class="help-block"> Maks. 2MB</small>
          </div>

          <!--<div class="form-group">
            <label for="scan_ktp">Link Berkas KTP Orang Tua</label><br>
            <?php
            if ($row['ktp'] == '') {
            ?>
              <span class="btn btn-secondary"><i class="fa fa-exclamation"></i> tidak tersedia</span>
            <?php
            } else {
            ?>
              <a class="btn btn-primary" href="<?= base_url('upload/ktp/' . $row['ktp']); ?>" title="Download KTP" target='_blank'> <i class="fa fa-download"></i> Detail KTP </a>
            <?php } ?>
            <p></p>
            <input id="ktp" type="file" name="ktp" class="form-control">
            <small class="help-block"> Maks. 2MB</small>
          </div>-->



          <div class="form-group">
            <label for="status"> Status Siswa : </label><br>
            <select class="form-control" name="status" required oninvalid="this.setCustomValidity('Pilih Jenis Kelamin disini')" oninput="setCustomValidity('')">
              <option value="">:: Pilih Status ::</option>
              <option value="1" <?= $row['status'] == '1' ? 'selected' : null ?>>Aktif</option>
              <option value="2" <?= $row['status'] == '2' ? 'selected' : null ?>>Tidak Aktif</option>
              <option value="3" <?= $row['status'] == '3' ? 'selected' : null ?>>Alumni</option>
              <option value="4" <?= $row['status'] == '4' ? 'selected' : null ?>>Belum diverifikasi/masih seleksi berkas</option>
              <option value="5" <?= $row['status'] == '5' ? 'selected' : null ?>>Tidak Diterima</option>
            </select>
          </div>

          <!-- <div class="form-group">
            <label for="foto_anak"> Upload Pas Foto ( 3x4 ) </label><br>
            <input id="foto_anak" type="file" name="foto_anak" class="form-control">
            <small class="help-block"> Maks. 2MB</small>
        </div>-->
          <!-- 
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Masuk</label></div>
            <div class="col-12 col-md-9">
              <input type="text" id="text-input" name="tahun_bantuan" class="form-control" required value="<?= $detail['tahun_bantuan'] ?>">
            </div>
          </div> -->

          <!-- 
          <div class="row form-group">
              <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis masalah</label></div>
              <div class="col-12 col-md-9">
                <select name="jenis_masalah" id="select" class="form-control" required>
                  <option value="0">:: Pilih Jenis Masalah ::</option>
                  <?php foreach ($jenis_masalah->result() as $key => $data) { ?>
                    <option value="<?= $data->id_jenis_masalah ?>" <?= $data->id_jenis_masalah == $detail['jenis_masalah'] ? 'selected' : null ?>> <?= $data->jenis_masalah ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="select" class=" form-control-label">Keadaan saat ini</label></div>
              <div class="col-12 col-md-9">
                <select name="keadaan_saat_ini" id="select" class="form-control" required>
                  <option value="0">:: Pilih Keadaan Saat Ini ::</option>
                  <?php foreach ($keadaan_saat_ini->result() as $key => $data) { ?>
                    <option value="<?= $data->id_keadaan ?>" <?= $data->id_keadaan == $detail['keadaan_saat_ini'] ? 'selected' : null ?>> <?= $data->keadaan ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="select" class=" form-control-label">Akta</label></div>
              <div class="col-12 col-md-9">
                <select name="akta" id="select" class="form-control" required>
                  <option value="0">:: Pilih Akta ::</option>
                  <?php foreach ($akta->result() as $key => $data) { ?>
                    <option value="<?= $data->id_akta ?>" <?= $data->id_akta == $detail['akta'] ? 'selected' : null ?>> <?= $data->akta ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Tempat tinggal</label></div>
              <div class="col-12 col-md-9">
                <textarea name="tempat_tinggal" id="textarea-input" rows="3" class="form-control" required><?= $detail['tempat_tinggal'] ?></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Wali</label></div>
              <div class="col-12 col-md-9"><input type="text" id="text-input" name="wali" class="form-control" required value="<?= $detail['wali'] ?>"></div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="select" class=" form-control-label">Alasan masuk panti</label></div>
              <div class="col-12 col-md-9">
                <select name="alasan_masuk_panti" id="select" class="form-control" required>
                  <option value="0">:: Pilih Alasan Masuk Panti ::</option>
                  <?php foreach ($alasan_masuk_panti->result() as $key => $data) { ?>
                    <option value="<?= $data->id_alasan ?>" <?= $data->id_alasan == $detail['alasan_masuk_panti'] ? 'selected' : null ?>> <?= $data->alasan ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis bantuan</label></div>
              <div class="col-12 col-md-9">
                <select name="jenis_bantuan" id="select" class="form-control" required>
                  <option value="0">:: Pilih Jenis Bantuan ::</option>
                  <?php foreach ($jenis_bantuan->result() as $key => $data) { ?>
                    <option value="<?= $data->id_bantuan ?>" <?= $data->id_bantuan == $detail['jenis_bantuan'] ? 'selected' : null ?>> <?= $data->bantuan ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-3"><label for="select" class=" form-control-label">DTKS</label></div>
              <div class="col-12 col-md-9">
                <select name="masuk_dtks" id="select" class="form-control" required>
                  <option value="0">:: Pilih Akta ::</option>
                  <option value="1" <?= $detail['masuk_dtks'] == '1' ? 'selected' : null ?>>1 : Ya </option>
                  <option value="2" <?= $detail['masuk_dtks'] == '2' ? 'selected' : null ?>>2 : Tidak </option>
                </select>
              </div>
            </div> -->



          <div class="text-center">
            <button class="btn btn-sm btn-primary" type="submit"> <i class="fa fa-save"></i> Save </button>
            <button class="btn btn-sm btn-secondary" type="reset"> <i class="fa fa-rotate-right"></i> Reset </button>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</div><!-- .animated -->
</div><!-- .content -->