<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">

      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>
            <a class="btn btn-sm btn-primary float-right" href="<?= base_url('donatur/tambah') ?>"> <i class="fa fa-plus-square-o"></i> Tambah </a>
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
                  <th>Tanggal Donasi</th>
                  <th>Nama Donatur</th>
                  <th>Alamat</th>
                  <th>Nomor HP</th>
                  <th>Kategori</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($data as $row) { ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo date_indo($row['tgl_donatur']); ?></td>
                    <td><?php echo ucwords($row['nama_donatur']); ?></td>
                    <td><?php echo ucwords($row['alamat_donatur']); ?></td>
                    <td><?php echo ucwords($row['no_hp_donatur']); ?></td>
                    <td>
                      <?php if ($row['kategori'] == 1) { ?>
                        <span class="badge badge-primary">Uang</span>
                      <?php } else { ?>
                        <span class="badge badge-success">Logistik</span>
                      <?php } ?>
                    </td>
                    <td><?php echo ucwords($row['keterangan']); ?></td>
                    <td>
                      <a class="badge badge-primary" href="<?= base_url('donatur/detail/' . $row['id_donatur']) ?>"> <i class="fa fa-eye"></i> Detail </a>
                      <?php if ($row['kategori'] == 2) : ?>
                        <a class="badge badge-success" href="<?= base_url('donatur/edit/' . $row['id_donatur']) ?>"> <i class="fa fa-edit"></i> Edit </a>
                      <?php endif; ?>
                      <a class="badge badge-danger" href="<?= base_url('donatur/delete/' . $row['id_donatur']) ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"> <i class="fa fa-trash-o"></i> Delete </a>
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