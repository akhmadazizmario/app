<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">

      <div class="col-md-25">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>
            <a class="btn btn-sm btn-primary float-right" href="<?= base_url('anak/tambah') ?>"> <i class="fa fa-plus-square-o"></i> Tambah </a>
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
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered dt-responsive nowrap">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Foto Anak</th>
                  <th>NIK Anak</th>
                  <th>NISN</th>
                  <th>Nama</th>
                  <!-- <th>Alamat lengkap</th>
                  <th>No HP</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Umur</th>
                  <th>Tahun Masuk</th>
                  <th>Nama Ibu</th>
                  <th>Nama Bapak</th>
                  <th>Pekerjaan Ibu</th>
                  <th>Pekerjaan Ayah</th>
                  <th>Agama</th> -->
                  <th>Kelas</th>
                  <th>tahun masuk</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($data as $row) { ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td> <?php if ($row['foto_anak'] != null) { ?>
                        <img src="<?= base_url('upload/foto_anak/' . $row['foto_anak']) ?>" alt="" width="80px">
                      <?php } elseif ($row['foto_anak'] != null) { ?>
                        <img src="<?php echo base_url() ?>/assets/images/placeholder.png" width="80px">
                      <?php } ?>

                    </td>
                    <td><?php echo $row['nik_anak']; ?></td>
                    <td><?php echo $row['NISN']; ?></td>
                    <td><?php echo ucwords($row['nama_anak']); ?></td>
                    <!-- <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['no_hp']; ?></td>
                    <td>
                      <?php if ($row['jk_anak'] == 'L') { ?>
                        <span class="badge badge-primary">Laki-laki</span>
                      <?php } else { ?>
                        <span class="badge badge-danger">Perempuan</span>
                      <?php } ?>
                    </td>
                    <td><?php echo ucwords($row['tempat_lahir_anak'] . ', ' . date_indo($row['tgl_lahir_anak'])); ?></td>
                    <td><?php echo hitung_umur($row['tgl_lahir_anak']) ?></td>
                    <td><?php echo date($row['tahun_masuk']); ?></td>
                    <td><?php echo ucwords($row['nama_ibu_kandung']); ?></td>
                    <td><?php echo ucwords($row['nama_bapak_kandung']); ?></td>
                    <td><?php echo ucwords($row['pekerjaan_ibu']); ?></td>
                    <td><?php echo ucwords($row['pekerjaan_ayah']); ?></td>
                    <td>
                      <?php if ($row['agama'] == 1) { ?>
                        <span class="badge badge-primary">Islam</span>
                      <?php } ?>
                    </td> -->
                    <td>
                      <?php echo ucwords($row['pendidikan']); ?>
                    </td>
                    <!-- <td> <?php if ($row['foto_anak'] != null) { ?>
                        <img src="<?= base_url('upload/scan_ijasah/' . $row['scan_ijasah']) ?>" alt="" width="80px">
                      <?php } ?>
                    </td>
                    <td><?php if ($row['scan_kk'] != null) { ?>
                        <img src="<?= base_url('upload/scan_kk/' . $row['scan_kk']) ?>" alt="" width="80px">
                      <?php } ?>
                    </td>
                    <td><?php if ($row['scan_akte'] != null) { ?>
                        <img src="<?= base_url('upload/scan_akte/' . $row['scan_akte']) ?>" alt="" width="80px">
                      <?php } ?>
                    </td>
                    <td><?php if ($row['ktp'] != null) { ?>
                        <img src="<?= base_url('upload/ktp/' . $row['ktp']) ?>" alt="" width="80px">
                      <?php } ?>
                    </td> -->
                    <td><?php echo ucwords($row['tahun_masuk']); ?> </td>
                    <td>
                      <?php if ($row['status'] == '1') { ?>
                        <a href="<?= site_url('anak/tidak_aktif/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-primary">Aktif</span></a>
                      <?php } elseif ($row['status'] == '2') { ?>
                        <a href="<?= site_url('anak/aktif/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-secondary">Tidak Aktif</span></a>
                      <?php } elseif ($row['status'] == '3') { ?>
                        <a href="<?= site_url('anak/alumni/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-success">Alumni</span></a>
                      <?php } elseif ($row['status'] == '4') { ?>
                        <a href="<?= site_url('anak/belum_diverifikasi/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-warning">Masih Dalam Seleksi</span></a>
                      <?php } else { ?>
                        <a href="<?= site_url('anak/tidak_diterima/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-danger">Tidak diterima</span></a>
                      <?php } ?>
                    </td>

                    <td>
                      <!-- <a class="btn btn-sm btn-secondary" href="<?= base_url('anak/cetak/' . $row['nik_anak']) ?>"> <i class="fa fa-file-pdf-o"></i> Cetak</a> -->
                      <a class="btn btn-sm btn-primary" href="<?= base_url('anak/detail/' . $row['nik_anak']) ?>"> <i class="fa fa-eye"></i> Detail </a>
                      <a class="btn btn-sm btn-success" href="<?= base_url('anak/edit/' . $row['nik_anak']) ?>"> <i class="fa fa-edit"></i> Edit </a>
                      <a class="btn btn-sm btn-danger" href="<?= base_url('anak/delete/' . $row['nik_anak']) ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"> <i class="fa fa-trash-o"></i> Delete </a>
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