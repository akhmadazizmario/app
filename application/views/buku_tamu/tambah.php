<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>
            <a class="btn btn-sm btn-danger float-right" href="<?= site_url('buku_tamu') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
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
            <form action="<?= base_url('buku_tamu/save'); ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="tgl_tamu">Tanggal Kedatangan </label><br>
                <input class="form-control" id="tgl_tamu" type="date" name="tgl_tamu" placeholder="Masukkan Tanggal" required oninvalid="this.setCustomValidity('Tanggal Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="nama_tamu">Nama Tamu</label><br>
                <input class="form-control" id="nama_tamu" type="text" name="nama_tamu" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('Nama Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>


              <div class="form-group">
                <label for="alamat"> Alamat </label><br>
                <input class="form-control" id="alamat" type="text" name="alamat" placeholder="Masukkan Alamat" required oninvalid="this.setCustomValidity('Alamat Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="no_hp_tamu"> Nomor HP Tamu </label><br>
                <input class="form-control" id="no_hp_tamu" type="number" name="no_hp_tamu" placeholder="Masukkan No Hp" required oninvalid="this.setCustomValidity('Nomor HP Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="Keperluan"> Keperluan </label><br>
                <input class="form-control" id="Keperluan" type="text" name="keperluan" placeholder="Masukkan Keperluan" required oninvalid="this.setCustomValidity('Keperluan Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="penerima_tamu"> Bertemu Dengan</label><br>
                <input class="form-control" id="penerima_tamu" type="text" name="penerima_tamu" placeholder="Masukkan Penerima Tamu" required oninvalid="this.setCustomValidity('Penerima Tamu Wajib Diisi')" oninput="this.setCustomValidity('')">
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