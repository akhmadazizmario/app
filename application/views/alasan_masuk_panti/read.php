<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">

      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>
            <a class="btn btn-sm btn-primary float-right" href="<?= base_url('alasan_masuk_panti/tambah') ?>"> <i class="fa fa-plus-square-o"></i> Tambah </a>
          </div>
          <div class="card-body table-responsive">
            <?php if ($this->session->has_userdata('success')) : ?>
              <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                <span class="badge badge-pill badge-success">Success</span>
                <?= $this->session->flashdata('success'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
            <?php endif; ?>
            <table id="bootstrap-data-table-export" class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Alasan</th>
                  <th>Alasan Masuk Pesantren</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($data as $row) { ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo ucwords($row['id_alasan']); ?></td>
                    <td><?php echo ucwords($row['alasan']); ?></td>
                    <td>
                      <a class="btn btn-sm btn-success" href="<?= base_url('alasan_masuk_panti/edit/' . $row['id_alasan']) ?>"> <i class="fa fa-edit"></i> Edit </a>
                      <a class="btn btn-sm btn-danger" href="<?= base_url('alasan_masuk_panti/delete/' . $row['id_alasan']) ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"> <i class="fa fa-trash-o"></i> Delete </a>
                    </td>
                    </td>
                  </tr>
                <?php $no++;
                }  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- .animated -->