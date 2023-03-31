<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul . ' ' . ucwords($row['nama_anak']) ?></strong>
            <a class="btn btn-sm btn-danger float-right" href="<?= site_url('anak') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
          </div>
          <div class="card-body">
            <div class="col-md-6">
              <h4>Data Anak</h4>
              <hr>
              <table id="bootstrap-data-table-export" class="table table-sm table-hover table-borderless">
                <?php if ($row['foto_anak'] != null) { ?>
                  <tr>
                    <th width="150px">Foto</th>
                    <td> : </td>
                    <td><img src="<?= base_url('upload/foto_anak/' . $row['foto_anak']) ?>" alt="" width="80px"></td>
                  </tr>
                <?php } ?>
                <tr>
                  <th>ID anak</th>
                  <td> : </td>
                  <td> <?= $row['id_anak'] ?> </td>
                </tr>
                <tr>
                  <th>Nama Anak</th>
                  <td> : </td>
                  <td> <?= ucwords($row['nama_anak']) ?> </td>
                </tr>
                <tr>
                  <th>NIK</th>
                  <td> : </td>
                  <td> <?= $row['nik_anak'] ?> </td>
                </tr>
                <!-- <tr>
                  <th>Email</th>
                  <td> : </td>
                  <td> <?= $row['email'] ?> </td>
                </tr> -->
                <tr>
                  <th>No Hp</th>
                  <td> : </td>
                  <td> <?= $row['no_hp'] ?> </td>
                </tr>
                <tr>
                  <th>Jenis Kelamin</th>
                  <td> : </td>
                  <td> <?php if ($row['jk_anak'] == 'L') { ?>
                      Laki-Laki
                    <?php } else { ?>
                      Perempuan
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <th>Tahun Masuk</th>
                  <td> : </td>
                  <td> <?= $row['tahun_masuk'] ?> </td>
                </tr>
                <tr>
                  <th>Tempat, Tanggal Lahir</th>
                  <td> : </td>
                  <td> <?= ucwords($row['tempat_lahir_anak']) . ', ' . date_indo($row['tgl_lahir_anak']) ?> </td>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <td> : </td>
                  <td> <?= $row['alamat'] ?> </td>
                </tr>
                <tr>
                  <th>Nomor Handphe</th>
                  <td> : </td>
                  <td> <?= $row['no_hp'] ?> </td>
                </tr>
                <tr>
                  <th>Nama Ibu</th>
                  <td> : </td>
                  <td> <?= $row['nama_ibu_kandung'] ?> </td>
                </tr>
                <tr>
                  <th>Nama Bapak</th>
                  <td> : </td>
                  <td> <?= $row['nama_bapak_kandung'] ?> </td>
                </tr>
                <tr>
                  <th>Pekerjaan Ayah</th>
                  <td> : </td>
                  <td> <?= $row['pekerjaan_ayah'] ?> </td>
                </tr>
                <tr>
                  <th>Pekerjaan Ibu</th>
                  <td> : </td>
                  <td> <?= $row['pekerjaan_ibu'] ?> </td>
                </tr>
                <tr>
                  <th>Agama</th>
                  <td> : </td>
                  <td> <?php if ($row['agama'] == '1') { ?>
                      Islam
                    <?php } else if ($row['agama'] == '2') { ?>
                      Kristen
                    <?php } else if ($row['agama'] == '3') { ?>
                      Katholik
                    <?php } else if ($row['agama'] == '4') { ?>
                      Hindu
                    <?php } else if ($row['agama'] == '5') { ?>
                      Budha
                    <?php } else { ?>
                      Konghucu
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <th>Kelas</th>
                  <td> : </td>
                  <td>
                    <?= $row['pendidikan'] ?>
                  </td>
                </tr>

                <tr>
                  <th width="150px">Berkas Kartu keluarga</th>
                  <td> : </td>
                  <td>
                    <?php
                    if ($row['scan_kk'] == '') {
                    ?>
                      <span class="btn btn-secondary"><i class="fa fa-exclamation"></i> tidak tersedia</span>
                    <?php
                    } else {
                    ?>
                      <a class="btn btn-primary" href="<?= base_url('upload/scan_kk/' . $row['scan_kk']); ?>" title="Download KTP" target='_blank'> <i class="fa fa-download"></i> Detail KK </a>
                    <?php } ?>
                    <p></p>
                  </td>
                </tr>

                <tr>
                  <th width="150px">Berkas Akta Kelahiran</th>
                  <td> : </td>
                  <td>
                    <?php
                    if ($row['scan_akte'] == '') {
                    ?>
                      <span class="btn btn-secondary"><i class="fa fa-exclamation"></i> tidak tersedia</span>
                    <?php
                    } else {
                    ?>
                      <a class="btn btn-primary" href="<?= base_url('upload/scan_akte/' . $row['scan_akte']); ?>" title="Download KTP" target='_blank'> <i class="fa fa-download"></i> Detail Akte Kelahiran </a>
                    <?php } ?>
                    <p></p>
                  </td>
                </tr>

                <tr>
                  <th width="150px">Berkas KTP Orang Tua</th>
                  <td> : </td>
                  <td>
                    <?php
                    if ($row['ktp'] == '') {
                    ?>
                      <span class="btn btn-secondary"><i class="fa fa-exclamation"></i> tidak tersedia</span>
                    <?php
                    } else {
                    ?>
                      <a class="btn btn-primary" href="<?= base_url('upload/ktp/' . $row['ktp']); ?>" title="Download KTP" target='_blank'> <i class="fa fa-download"></i> Detail KTP Ortu </a>
                    <?php } ?>
                    <p></p>
                  </td>
                </tr>

                <tr>
                  <th>Status</th>
                  <td> : </td>
                  <td>
                    <?php if ($row['status'] == '1') { ?>
                      <span class="badge badge-primary">Aktif</span>
                    <?php } else if ($row['status'] == '2') { ?>
                      <span class="badge badge-secondary">Tidak Aktif</span>
                    <?php } else if ($row['status'] == '3') { ?>
                      <span class="badge badge-success">Alumni</span>
                    <?php } else if ($row['status'] == '4') { ?>
                      <span class="badge badge-warning">Masih dalam seleksi</span>
                    <?php } else { ?>
                      <span class="badge badge-danger">Tidak diterima</span>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <th></th>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>
            <!-- <div class="col-md-6">
              <h4>Detail Anak</h4>
              <hr>
              <table id="bootstrap-data-table-export" class="table table-sm table-hover table-borderless"> -->
            <!-- <tr>
                  <th>Jenis Masalah</th>
                  <td> : </td>
                  <td>
                    <?php foreach ($jenis_masalah->result() as $key => $data) { ?>
                      <?php if ($data->id_jenis_masalah == $detail['jenis_masalah']) { ?>
                        <?php echo $data->jenis_masalah ?>
                      <?php } ?>
                    <?php } ?>
                  </td>
                </tr> -->
            <!-- <tr>
                  <th>Keadaan Saat Ini</th>
                  <td> : </td>
                  <td>
                    <?php foreach ($keadaan_saat_ini->result() as $key => $data) { ?>
                      <?php if ($data->id_keadaan == $detail['keadaan_saat_ini']) { ?>
                        <?php echo $data->keadaan ?>
                      <?php } ?>
                    <?php } ?>
                  </td>
                </tr>
                <tr> -->
            <!-- <th>Akta</th>
                  <td> : </td>
                  <td>
                    <?php foreach ($akta->result() as $key => $data) { ?>
                      <?php if ($data->id_akta == $detail['akta']) { ?>
                        <?php echo $data->akta ?>
                      <?php } ?>
                    <?php } ?>
                  </td>
                </tr> -->
            <!-- <tr>
                  <th>Tempat Tinggal</th>
                  <td> : </td>
                  <td><?php echo $row['alamat']; ?></td>
                </tr>
                <tr> -->
            <!-- <th>Wali</th>
                <td> : </td>
                <td><?php echo $detail['wali']; ?></td>
                </tr>
                <tr> -->
            <!-- <th>Alasan Masuk Pesantren</th>
                  <td> : </td>
                  <td>
                    <?php foreach ($alasan_masuk_panti->result() as $key => $data) { ?>
                      <?php if ($data->id_alasan == $detail['alasan_masuk_panti']) { ?>
                        <?php echo $data->alasan ?>
                      <?php } ?>
                    <?php } ?>
                  </td>
                </tr> -->
            <!-- <tr>
                  <th>DTKS</th>
                  <td> : </td>
                  <td><?php if ($detail['masuk_dtks'] == '1') { ?>
                      1 : Ya
                    <?php } else { ?>
                      4 : Tidak
                    <?php } ?>
                  </td>
                </tr> -->
            <!-- <tr>
                  <th>Jenis Bantuan</th>
                  <td> : </td>
                  <td>
                    <?php foreach ($jenis_bantuan->result() as $key => $data) { ?>
                      <?php if ($data->id_bantuan == $detail['jenis_bantuan']) { ?>
                        <?php echo $data->bantuan ?>
                      <?php } ?>
                    <?php } ?>
                  </td>
                </tr> -->
            <!-- <tr>
                  <th>Tahun Bantuan</th>
                  <td> : </td>
                  <td><?php echo $detail['tahun_bantuan']; ?></td>
                </tr>
              </table> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- .animated -->
</div><!-- .content -->