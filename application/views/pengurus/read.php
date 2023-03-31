<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">

      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>
            <a class="btn btn-sm btn-primary float-right" href="<?= base_url('pengurus/tambah') ?>"> <i class="fa fa-plus-square-o"></i> Tambah </a>
          </div>
          <div class="card-body table-responsive">
            <?php if ($this->session->has_userdata('success')) : ?>
              <div class="sufee-alert alert with-close alert-success alert-dismissible fade show  border-none border-0">
                <span class="badge badge-pill badge-success">Sukses</span>
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
                  <th>Foto</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <!--<th>TTL</th>
                  <th>Umur</th>-->
                  <th>Mulai Masuk</th>
                  <th>Telepon</th>
                  <th>Jabatan</th>
                  <th>Status</th>
                  <th>Pendidikan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($data as $row) { ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td> <?php if ($row['foto_pengurus'] != null) { ?>
                        <img class="rounded" src="<?= base_url('upload/foto_pengurus/' . $row['foto_pengurus']) ?>" alt="" width="80px">
                      <?php } ?>
                    </td>
                    <td><?php echo $row['nik_pengurus']; ?></td>
                    <td><?php echo ucwords($row['nama_pengurus']); ?></td>
                    <!--<td><?php echo ucwords($row['tempat_lahir_pengurus']) . ', ' . date_indo($row['tgl_lahir_pengurus']) ?></td>
                    <td><?= hitung_umur($row['tgl_lahir_pengurus']) ?></td>-->
                    <td><?= date_indo($row['mulai_kerja']); ?></td>
                    <td><?php echo $row['telp_pengurus']; ?></td>
                    <td>
                      <?php if ($row['jabatan'] == 1) { ?>
                        <span class="badge badge-primary">Kepala Sekolah</span>
                      <?php } elseif ($row['jabatan'] == 2) { ?>
                        <span class="badge badge-danger">Wakil Kepala Sekolah</span>
                      <?php } elseif ($row['jabatan'] == 3) { ?>
                        <span class="badge badge-warning">Kesiswaan</span>
                      <?php } elseif ($row['jabatan'] == 4) { ?>
                        <span class="badge badge-danger">Kurikulum</span>
                      <?php } elseif ($row['jabatan'] == 5) { ?>
                        <span class="badge badge-danger">Wali Kelas</span>
                      <?php } elseif ($row['jabatan'] == 6) { ?>
                        <span class="badge badge-danger">Tata Usaha</span>
                      <?php } elseif ($row['jabatan'] == 7) { ?>
                        <span class="badge badge-danger">BK</span>
                      <?php } else { ?>
                        <span class="badge badge-success">Pustakawan</span>
                      <?php } ?>
                    </td>
                    <td>
                      <?php if ($row['status'] == 1) { ?>
                        <span class="badge badge-primary">Tetap</span>
                      <?php } elseif ($row['status'] == 2) { ?>
                        <span class="badge badge-danger">Kontrak</span>
                      <?php } else { ?>
                        <span class="badge badge-success">Relawan</span>
                      <?php } ?>
                    </td>
                    <td>
                      <?php if ($row['pendidikan'] == 1) { ?>
                        <span class="badge badge-primary">SMA/SMK/MA</span>
                      <?php } elseif ($row['pendidikan'] == 2) { ?>
                        <span class="badge badge-danger">D3</span>
                      <?php } elseif ($row['pendidikan'] == 3) { ?>
                        <span class="badge badge-danger">S1</span>
                      <?php } else { ?>
                        <span class="badge badge-success">S2</span>
                      <?php } ?>
                    <td>
                      <a class="btn btn-sm btn-primary" href="<?= base_url('pengurus/detail/' . $row['id_pengurus']) ?>"> <i class="fa fa-eye"></i> Lihat Detail </a>
                      <a class="btn btn-sm btn-success" href="<?= base_url('pengurus/edit/' . $row['id_pengurus']) ?>"> <i class="fa fa-edit"></i> Edit </a>
                      <a class="btn btn-sm btn-danger" href="<?= base_url('pengurus/delete/' . $row['id_pengurus']) ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"> <i class="fa fa-trash-o"></i> Delete </a>
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
  </div><!-- .animated -->
</div><!-- .content -->