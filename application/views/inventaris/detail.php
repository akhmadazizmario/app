<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul . ' ' . ucwords($row['nama_barang']) ?></strong>
            <a class="btn btn-sm btn-danger float-right" href="<?= site_url('inventaris') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
          </div>
          <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-sm table-hover">

              <tr>
                <th>ID Barang</th>
                <td> : </td>
                <td> <?= $row['id_barang'] ?> </td>
              </tr>

              <tr>
                <th>Tanggal Terima</th>
                <td> : </td>
                <td> <?= date_indo($row['tgl_terima']) ?> </td>
              </tr>

              <tr>
                <th>Nama Barang</th>
                <td> : </td>
                <td> <?= ucwords($row['nama_barang']) ?> </td>
              </tr>

              <tr>
                <th>Identitas Barang</th>
                <td> : </td>
                <td> <?= $row['identitas_barang'] ?> </td>
              </tr>

              <tr>
                <th>Keadaan Barang</th>
                <td> : </td>
                <td> <?php if ($row['keadaan'] == 1) { ?>
                    <span class="badge badge-primary">Baik</span>
                  <?php } elseif ($row['keadaan'] == 2) { ?>
                    <span class="badge badge-primary">Kurang Baik</span>
                  <?php } else { ?>
                    <span class="badge badge-success">Rusak</span>
                  <?php } ?>
                </td>
              </tr>

              <tr>
                <th>Jumlah</th>
                <td> : </td>
                <td> <?= $row['jumlah'] ?> </td>
              </tr>
              <tr>

              <tr>
                <th>Asal Barang</th>
                <td> : </td>
                <td> <?= $row['asal'] ?> </td>
              </tr>

              <tr>
                <th>Diinput oleh</th>
                <td> : </td>
                <td> <?= ucwords($row['nama']) ?> </td>
              </tr>

              <tr>
                <th></th>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .Animated -->
</div><!-- .content -->