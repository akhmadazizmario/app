<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul . ' ' . ucwords($row['nama_donatur']) ?></strong>
            <a class="btn btn-sm btn-danger float-right" href="<?= site_url('donatur') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
          </div>
          <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-sm table-hover">

              <tr>
                <th>Id Donatur</th>
                <td> : </td>
                <td> <?= $row['id_donatur'] ?> </td>
              </tr>

              <tr>
                <th>Tanggal Donasi</th>
                <td> : </td>
                <td> <?= date_indo($row['tgl_donatur']) ?> </td>
              </tr>

              <tr>
                <th>Nama Donatur</th>
                <td> : </td>
                <td> <?= ucwords($row['nama_donatur']) ?> </td>
              </tr>

              <tr>
                <th>Alamat</th>
                <td> : </td>
                <td> <?= $row['alamat_donatur'] ?> </td>
              </tr>

              <tr>
                <th>Nomor Hp</th>
                <td> : </td>
                <td> <?= $row['no_hp_donatur'] ?> </td>
              </tr>

              <tr>
                <th>Kategori</th>
                <td> : </td>
                <td> <?php if ($row['kategori'] == 1) { ?>
                    <span class="badge badge-primary">Uang</span>
                  <?php } else { ?>
                    <span class="badge badge-success">Logistik</span>
                  <?php } ?>
                </td>
              </tr>

              <tr>
                <th>Jumlah Uang</th>
                <td> : </td>
                <td> <?= ucwords($row['keterangan']) ?> </td>
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
  </div><!-- .animated -->
</div><!-- .content -->