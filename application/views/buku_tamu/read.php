<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">

      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>
            <a class="btn btn-sm btn-primary float-right" href="<?= base_url('buku_tamu/tambah') ?>"> <i class="fa fa-plus-square-o"></i> Tambah </a>
          </div>
          <div class="card-body">
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
                  <th>Tanggal</th>
                  <th>Nama Tamu</th>
                  <th>Alamat</th>
                  <th>Nomor HP Tamu</th>
                  <th>Keperluan</th>
                  <th>Bertemu Dengan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($data as $row) { ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo date_indo($row['tgl_tamu']); ?></td>
                    <td><?php echo ucwords($row['nama_tamu']); ?></td>
                    <td><?php echo ucwords($row['alamat']); ?></td>
                    <td><?php echo ucwords($row['no_hp_tamu']); ?></td>
                    <td><?php echo ucwords($row['keperluan']); ?></td>
                    <td><?php echo ucwords($row['penerima_tamu']); ?></td>
                    <td>
                      <a class="badge badge-primary" href="<?= base_url('buku_tamu/detail/' . $row['id_tamu']) ?>"> <i class="fa fa-eye"></i> Detail </a>
                      <a class="badge badge-success" href="<?= base_url('buku_tamu/edit/' . $row['id_tamu']) ?>"> <i class="fa fa-edit"></i> Edit </a>
                      <a class="badge badge-danger" href="<?= base_url('buku_tamu/delete/' . $row['id_tamu']) ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"> <i class="fa fa-trash-o"></i> Delete </a>
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