<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card" style="border-radius:5px;">
          <div class="card-header">
            <div class="row">
              <div class="col-md-12">
                <?php echo form_open_multipart('lap_anak/process') ?>
                <!--<div class="col-md-2">
                  <div class="form-group">
                    asal paud
                    <select class="form-control" name="asal_paud">
                      <option value='' <?= $this->input->post('asal_paud') == '' ? 'selected' : null ?>>Pilih asal_paud</option>
                      <option value='1' <?= $this->input->post('asal_paud') == 1 ? 'selected' : null ?>>7 - 11 Tahun</option>
                      <option value='2' <?= $this->input->post('asal_paud') == 2 ? 'selected' : null ?>>12 - 14 Tahun</option>
                      <option value='3' <?= $this->input->post('asal_paud') == 3 ? 'selected' : null ?>>15 - 20 Tahun</option>
                    </select>
                  </div>
                </div>-->
                <div class="col-md-3">
                  <div class="form-group">
                    Kelas
                    <select class="form-control" name="pendidikan">
                      <option value='' <?= $this->input->post('pendidikan') == '' ? 'selected' : null ?>>Semua Kelas</option>
                      <option value='1' <?= $this->input->post('pendidikan') == 1 ? 'selected' : null ?>>1</option>
                      <option value='2' <?= $this->input->post('pendidikan') == 2 ? 'selected' : null ?>>2</option>
                      <option value='3' <?= $this->input->post('pendidikan') == 3 ? 'selected' : null ?>>3</option>
                      <option value='3' <?= $this->input->post('pendidikan') == 3 ? 'selected' : null ?>>4</option>
                      <option value='3' <?= $this->input->post('pendidikan') == 3 ? 'selected' : null ?>>5</option>
                      <option value='3' <?= $this->input->post('pendidikan') == 3 ? 'selected' : null ?>>6</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    Status
                    <select class="form-control" name="status">
                      <option value='' <?= $this->input->post('status') == '' ? 'selected' : null ?>>Pilih Status</option>
                      <option value='1' <?= $this->input->post('status') == 1 ? 'selected' : null ?>>Aktif</option>
                      <option value='2' <?= $this->input->post('status') == 2 ? 'selected' : null ?>>Tidak Aktif</option>
                      <option value='3' <?= $this->input->post('status') == 3 ? 'selected' : null ?>>Alumni</option>
                      <option value='4' <?= $this->input->post('status') == 3 ? 'selected' : null ?>>Masih Dalam Seleksi</option>
                      <option value='5' <?= $this->input->post('status') == 3 ? 'selected' : null ?>>Tidak Diterima</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    Tahun Masuk
                    <select class="form-control" name="tahun_masuk">
                      <option value='' <?= $this->input->post('tahun_masuk') == '' ? 'selected' : null ?>>Pilih Tahun</option>
                      <option value='2016' <?= $this->input->post('tahun_masuk') == 2016 ? 'selected' : null ?>>2016</option>
                      <option value='2017' <?= $this->input->post('tahun_masuk') == 2017 ? 'selected' : null ?>>2017</option>
                      <option value='2018' <?= $this->input->post('tahun_masuk') == 2018 ? 'selected' : null ?>>2018</option>
                      <option value='2019' <?= $this->input->post('tahun_masuk') == 2019 ? 'selected' : null ?>>2019</option>
                      <option value='2020' <?= $this->input->post('tahun_masuk') == 2020 ? 'selected' : null ?>>2020</option>
                      <option value='2021' <?= $this->input->post('tahun_masuk') == 2021 ? 'selected' : null ?>>2021</option>
                      <option value='2022' <?= $this->input->post('tahun_masuk') == 2022 ? 'selected' : null ?>>2022</option>
                      <option value='2023' <?= $this->input->post('tahun_masuk') == 2023 ? 'selected' : null ?>>2023</option>
                      <option value='2024' <?= $this->input->post('tahun_masuk') == 2024 ? 'selected' : null ?>>2024</option>
                      <option value='2025' <?= $this->input->post('tahun_masuk') == 2025 ? 'selected' : null ?>>2025</option>
                      <option value='2026' <?= $this->input->post('tahun_masuk') == 2026 ? 'selected' : null ?>>2026</option>
                      <option value='2027' <?= $this->input->post('tahun_masuk') == 2027 ? 'selected' : null ?>>2027</option>
                      <option value='2028' <?= $this->input->post('tahun_masuk') == 2028 ? 'selected' : null ?>>2028</option>
                      <option value='2029' <?= $this->input->post('tahun_masuk') == 2029 ? 'selected' : null ?>>2029</option>
                      <option value='2030' <?= $this->input->post('tahun_masuk') == 2030 ? 'selected' : null ?>>2030</option>
                      <option value='2031' <?= $this->input->post('tahun_masuk') == 2031 ? 'selected' : null ?>>2031</option>
                      <option value='2032' <?= $this->input->post('tahun_masuk') == 2032 ? 'selected' : null ?>>2032</option>
                      <option value='2033' <?= $this->input->post('tahun_masuk') == 2033 ? 'selected' : null ?>>2033</option>
                      <option value='2034' <?= $this->input->post('tahun_masuk') == 2034 ? 'selected' : null ?>>2034</option>
                      <option value='2035' <?= $this->input->post('tahun_masuk') == 2035 ? 'selected' : null ?>>2035</option>
                      <option value='2036' <?= $this->input->post('tahun_masuk') == 2036 ? 'selected' : null ?>>2036</option>
                      <option value='2037' <?= $this->input->post('tahun_masuk') == 2037 ? 'selected' : null ?>>2037</option>
                      <option value='2038' <?= $this->input->post('tahun_masuk') == 2038 ? 'selected' : null ?>>2038</option>
                      <option value='2039' <?= $this->input->post('tahun_masuk') == 2039 ? 'selected' : null ?>>2039</option>
                      <option value='2040' <?= $this->input->post('tahun_masuk') == 2040 ? 'selected' : null ?>>2040</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-3">
                  Proses <br>
                  <button type="submit" class="btn btn-outline-secondary btn-sm" title="Reset Data" name="reset"><i class="fa fa-refresh"></i> Reset</button>
                  <button type="submit" class="btn btn-primary btn-sm" title="Cari Data" name="cari"><i class="fa fa-search"></i> Cari</button>
                  <button type="submit" class="btn btn-danger btn-sm" title="Cetak PDF" name="cetak" target="_blank"><i class="fa fa-print"></i> Cetak</button>
                </div>
              </div>
            </div>

            <?php echo form_close(); ?>
          </div>
        </div>
        <div class="card" style="border-radius:5px;">
          <div class="card-body table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered dt-responsive nowrap">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Foto Anak</th>
                  <th>NIK Anak</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Tanggal Lahir</th>
                  <th>Nama Ibu</th>
                  <th>Nama Bapak</th>
                  <th>Agama</th>
                  <th>Kelas</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($data as $row) { ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td> <?php if ($row['foto_anak'] != null) { ?>
                        <img src="<?= base_url('upload/foto_anak/' . $row['foto_anak']) ?>" alt="" width="80px">
                      <?php } ?>
                    </td>
                    <td><?php echo $row['nik_anak']; ?></td>
                    <td><?php echo ucwords($row['nama_anak']); ?></td>
                    <td>
                      <?php if ($row['jk_anak'] == 'L') { ?>
                        <span class="badge badge-primary">Laki-laki</span>
                      <?php } else { ?>
                        <span class="badge badge-danger">Perempuan</span>
                      <?php } ?>
                    </td>
                    <td><?php echo ucwords($row['tempat_lahir_anak'] . ', ' . date_indo($row['tgl_lahir_anak'])); ?></td>
                    <td><?php echo ucwords($row['nama_ibu_kandung']); ?></td>
                    <td><?php echo ucwords($row['nama_bapak_kandung']); ?></td>
                    <td>
                      <?php if ($row['agama'] == 1) { ?>
                        <span class="badge badge-primary">Islam</span>
                      <?php } elseif ($row['agama'] == 2) { ?>
                        <span class="badge badge-danger">Kristen</span>
                      <?php } elseif ($row['agama'] == 3) { ?>
                        <span class="badge badge-danger">Katholik</span>
                      <?php } elseif ($row['agama'] == 4) { ?>
                        <span class="badge badge-danger">Hindu</span>
                      <?php } elseif ($row['agama'] == 5) { ?>
                        <span class="badge badge-danger">Budha</span>
                      <?php } else { ?>
                        <span class="badge badge-success">Konghucu</span>
                      <?php } ?>
                    </td>
                    <td>
                      <?php if ($row['pendidikan'] == 1) { ?>
                        <span class="badge badge-primary">1</span>
                      <?php } elseif ($row['pendidikan'] == 2) { ?>
                        <span class="badge badge-danger">2</span>
                      <?php } elseif ($row['pendidikan'] == 3) { ?>
                        <span class="badge badge-danger">3</span>
                      <?php } elseif ($row['pendidikan'] == 4) { ?>
                        <span class="badge badge-danger">4</span>
                      <?php } elseif ($row['pendidikan'] == 5) { ?>
                        <span class="badge badge-danger">5</span>
                      <?php } elseif ($row['pendidikan'] == 6) { ?>
                        <span class="badge badge-danger">6</span>
                      <?php } else { ?>
                        <span class="badge badge-success">Kuliah</span>
                      <?php } ?>
                    </td>
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
                    <td>
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
</div>