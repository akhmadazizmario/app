<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>
            <a class="btn btn-sm btn-danger float-right" href="<?= site_url('jenis_masalah') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
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
            <form action="<?= base_url('jenis_masalah/update/' . $row['id_jenis_masalah']); ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="jenis_masalah"> Jenis Masalah </label><br>
                <input class="form-control" id="jenis_masalah" type="text" name="jenis_masalah" value="<?= $row['jenis_masalah'] ?>" required oninvalid="this.setCustomValidity('Jenis Masalah Wajib Diisi')" oninput="this.setCustomValidity('')">
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