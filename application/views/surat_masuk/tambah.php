<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>
            <a class="btn btn-sm btn-danger float-right" href="<?= site_url('surat_masuk') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
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
            <form action="<?= base_url('surat_masuk/save'); ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="tgl_terima"> Tanggal Terima </label><br>
                <input class="form-control" id="tgl_terima" type="date" name="tgl_terima" placeholder="Masukkan Tanggal Terima" required oninvalid="this.setCustomValidity('Tanggal Terima Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="nomor_surat"> Nomor Surat </label><br>
                <input class="form-control" id="nomor_surat" type="text" name="nomor_surat" placeholder="Masukkan Nomor Surat" required oninvalid="this.setCustomValidity('Nomor Surat Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="tgl_surat"> Tanggal Surat </label><br>
                <input class="form-control" id="tgl_surat" type="date" name="tgl_surat" placeholder="Masukkan Tanggal Surat" required oninvalid="this.setCustomValidity('Tanggal Surat Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="pengirim"> Pengirim </label><br>
                <input class="form-control" id="pengirim" type="text" name="pengirim" placeholder="Masukkan Nama pengirim" required oninvalid="this.setCustomValidity('Nama pengirim Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="penerima"> Penerima </label><br>
                <input class="form-control" id="penerima" type="text" name="penerima" placeholder="Masukkan Nama Penerima" required oninvalid="this.setCustomValidity('Nama Penerima Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="perihal"> Perihal </label><br>
                <input class="form-control" id="perihal" type="text" name="perihal" placeholder="Masukkan Perihal Surat" required oninvalid="this.setCustomValidity('Perihal Surat Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="upload"> Upload File</label> (*pdf)<br>
                <input id="upload" type="file" name="upload_file" class="form-control">
                <small class="help-block"> Maks. 2MB</small>
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