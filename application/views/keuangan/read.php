<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>

            <a class="btn btn-sm btn-primary float-right" href="<?= base_url('keuangan/tambah') ?>"> <i class="fa fa-plus-square-o"></i> Tambah </a>
          </div>
          <div class="card-body">
            <?php if ($this->session->has_userdata('success')) : ?>
              <div class="sufee-alert border-none border-0 alert with-close alert-success alert-dismissible fade show">
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
                  <th>Keterangan</th>
                  <th>Pemasukan</th>
                  <th>Pengeluaran</th>
                  <th>Saldo Akhir</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($data as $row) { ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo date_indo($row['tgl_keuangan']); ?></td>
                    <td><?php echo ucwords($row['keterangan']); ?></td>
                    <td><?= rupiah($row['pemasukan']) ?></td>
                    <td><?= rupiah($row['pengeluaran']) ?></td>
                    <td><?= rupiah($row['saldo']) ?></td>
                    <td>
                      <a class="btn btn-sm btn-primary" href="<?= base_url('keuangan/detail/' . $row['id_saldo']) ?>"> <i class="fa fa-eye"></i> Detail </a>
                      <a class="btn btn-sm btn-success" href="<?= base_url('keuangan/edit/' . $row['id_saldo']) ?>"> <i class="fa fa-edit"></i> Edit </a>
                      <a class="btn btn-sm btn-danger" href="<?= base_url('keuangan/delete/' . $row['id_saldo']) ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"> <i class="fa fa-trash-o"></i> Delete </a>
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
</div>