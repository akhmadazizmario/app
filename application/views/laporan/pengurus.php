<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card" style="border-radius:5px;">
          <div class="card-header">
            <div class="row">
              <div class="col-md-12">
                <?php echo form_open_multipart('lap_pengurus/process') ?>
                <div class="col-md-3">
                  <div class="form-group">
                    Jabatan
                    <select class="form-control" name="jabatan">
                      <option value="" <?= $this->input->post('jabatan') == '' ? 'selected' : null ?>>Semua Jabatan</option>
                      <option value="1" <?= $this->input->post('jabatan') == 1 ? 'selected' : null ?>>Kepala Seklah</option>
                      <option value="2" <?= $this->input->post('jabatan') == 2 ? 'selected' : null ?>>Wakil Kepala Sekolah</option>
                      <option value="3" <?= $this->input->post('jabatan') == 3 ? 'selected' : null ?>>Kurikulum </option>
                      <option value="4" <?= $this->input->post('jabatan') == 4 ? 'selected' : null ?>>Kesiswaan </option>
                      <option value="5" <?= $this->input->post('jabatan') == 5 ? 'selected' : null ?>>Wali Kelas</option>
                      <option value="6" <?= $this->input->post('jabatan') == 6 ? 'selected' : null ?>>Tata Usaha</option>
                      <option value="7" <?= $this->input->post('jabatan') == 7 ? 'selected' : null ?>>BK</option>
                      <option value="8" <?= $this->input->post('jabatan') == 8 ? 'selected' : null ?>>Pustakawan</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Status
                    <select class="form-control" name="status">
                      <option value='' <?= $this->input->post('status') == '' ? 'selected' : null ?>>Semua Kategori</option>
                      <option value='1' <?= $this->input->post('status') == 1 ? 'selected' : null ?>>Tetap</option>
                      <option value='2' <?= $this->input->post('status') == 2 ? 'selected' : null ?>>Kontrak</option>
                      <option value='3' <?= $this->input->post('status') == 3 ? 'selected' : null ?>>Relawan</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Pendidikan
                    <select class="form-control" name="pendidikan">
                      <option value='' <?= $this->input->post('pendidikan') == '' ? 'selected' : null ?>>Semua Pendidikan</option>
                      <option value='1' <?= $this->input->post('pendidikan') == 1 ? 'selected' : null ?>>SMA/SMK/MA</option>
                      <option value='2' <?= $this->input->post('pendidikan') == 2 ? 'selected' : null ?>>D3</option>
                      <option value='3' <?= $this->input->post('pendidikan') == 3 ? 'selected' : null ?>>S1</option>
                      <option value='4' <?= $this->input->post('pendidikan') == 4 ? 'selected' : null ?>>S2</option>
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
          <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Foto</th>
                  <th>NIK Pengurus</th>
                  <th>Nama Pengurus</th>
                  <th>TTL</th>
                  <th>Mulai Kerja</th>
                  <th>Jabatan</th>
                  <th>Status</th>
                  <th>Pendidikan</th>
                  <!--<th>Pelatihan</th>-->
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($data as $row) { ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td> <?php if ($row['foto_pengurus'] != null) { ?>
                        <img src="<?= base_url('upload/foto_pengurus/' . $row['foto_pengurus']) ?>" alt="" width="80px">
                      <?php } ?>
                    </td>
                    <td><?php echo $row['nik_pengurus']; ?></td>
                    <td><?php echo ucwords($row['nama_pengurus']); ?></td>
                    <td><?php echo ucwords($row['tempat_lahir_pengurus']) . ', ' . date_indo($row['tgl_lahir_pengurus']) ?></td>
                    <td><?php echo date_indo($row['mulai_kerja']); ?></td>
                    <td>
                      <?php if ($row['jabatan'] == 1) { ?>
                        <span class="badge badge-primary">Kepala Sekolah</span>
                      <?php } elseif ($row['jabatan'] == 2) { ?>
                        <span class="badge badge-danger">Wakil Kepala Sekolah</span>
                      <?php } elseif ($row['jabatan'] == 3) { ?>
                        <span class="badge badge-danger">Kesiswaan</span>
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
                      <!--<td><?php echo $row['pelatihan']; ?></td>-->
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