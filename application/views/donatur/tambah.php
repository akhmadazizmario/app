<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>
            <a class="btn btn-sm btn-danger float-right" href="<?= site_url('donatur') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
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
            <form action="<?= base_url('donatur/save'); ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="tgl_donatur"> Tanggal Donasi </label><br>
                <input class="form-control" id="tgl_donatur" type="date" name="tgl_donatur" placeholder="Masukkan Tanggal" required oninvalid="this.setCustomValidity('Tanggal Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="nama_donatur"> Nama Donatur </label><br>
                <input class="form-control" id="nama_donatur" type="text" name="nama_donatur" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('Nama Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>


              <div class="form-group">
                <label for="alamat_donatur"> Alamat Donatur </label><br>
                <input class="form-control" id="alamat_donatur" type="text" name="alamat_donatur" placeholder="Masukkan Alamat" required oninvalid="this.setCustomValidity('Tempat Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="no_hp_donatur"> Nomor HP Donatur </label><br>
                <input class="form-control" id="no_hp_donatur" type="number" name="no_hp_donatur" placeholder="Masukkan No Hp" required oninvalid="this.setCustomValidity('Tanggal Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="kategori"> Kategori </label><br>
                <select class="form-control" name="kategori" required oninvalid="this.setCustomValidity('Pilih Jenis Kelamin disini')" oninput="setCustomValidity('')">
                  <option value="">:: Pilih Jenis Kategori ::</option>
                  <option value="1">Uang</option>
                  <option value="2">Logistik</option>
                </select>
              </div>
              <div class="form-group">
                <label for="keterangan"> Keterangan </label><br>
                <input class="form-control" id="keterangan" type="text" name="keterangan" placeholder="Keterangan" required oninvalid="this.setCustomValidity('Keterangan Wajib Diisi')" oninput="this.setCustomValidity('')">
                <small>Apabila Kategori uang isi dengan nominal</small>
              </div>

              <button class="btn btn-sm btn-primary" type="submit"> <i class="fa fa-save"></i> Save </button>
              <button class="btn btn-sm btn-secondary" type="reset"> <i class="fa fa-rotate-right"></i> Reset </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .Animated -->
</div><!-- .content -->