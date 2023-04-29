<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul . ' ' . ucwords($row['nama_tamu']) ?></strong>
            <a class="btn btn-sm btn-danger float-right" href="<?= site_url('buku_tamu') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
          </div>
          <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-sm table-hover">

              <tr>
                <th>Id Tamu</th>
                <td> : </td>
                <td> <?= $row['id_tamu'] ?> </td>
              </tr>

              <tr>
                <th>Tanggal</th>
                <td> : </td>
                <td> <?= date_indo($row['tgl_tamu']) ?> </td>
              </tr>

              <tr>
                <th>Nama Tamu</th>
                <td> : </td>
                <td> <?= ucwords($row['nama_tamu']) ?> </td>
              </tr>

              <tr>
                <th>Alamat</th>
                <td> : </td>
                <td> <?= $row['alamat'] ?> </td>
              </tr>

              <tr>
                <th>Nomor Hp Tamu</th>
                <td> : </td>
                <td> <?= $row['no_hp_tamu'] ?> </td>
              </tr>

              <tr>
                <th>Keperluan</th>
                <td> : </td>
                <td> <?= $row['keperluan'] ?> </td>
              </tr>

              <tr>
                <th>Bertemu Dengan</th>
                <td> : </td>
                <td> <?= $row['penerima_tamu'] ?> </td>
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