<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-17">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?= $judul; ?></strong>
                        <a class="btn btn-sm btn-primary float-right" href="<?= base_url('guru/tambah') ?>"> <i class="fa fa-plus-square-o"></i> Tambah </a>
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
                                    <th>TTL</th>
                                    <th>Umur</th>
                                    <th>Mulai Masuk</th>
                                    <th>Telepon</th>
                                    <!--<th>Golongan</th>-->
                                    <th>Pendidikan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) { ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td> <?php if ($row['foto_guru'] != null) { ?>
                                                <img class="rounded" src="<?= base_url('upload/foto_guru/' . $row['foto_guru']) ?>" alt="" width="80px">
                                            <?php } ?>
                                        </td>
                                        <td><?php echo $row['nik_guru']; ?></td>
                                        <td><?php echo ucwords($row['nama_guru']); ?></td>
                                        <td><?php echo ucwords($row['tempat_lahir_guru']) . ', ' . date_indo($row['tgl_lahir_guru']) ?></td>
                                        <td><?= hitung_umur($row['tgl_lahir_guru']) ?></td>
                                        <td><?= date_indo($row['mulai_kerja']); ?></td>
                                        <td><?php echo $row['telp_guru']; ?></td>
                                        <!--<td>
                                            <?php if ($row['gol_assatidz'] == 1) { ?>
                                                <span class="badge badge-primary">Ponpes</span>
                                            <?php } elseif ($row['gol_assatidz'] == 2) { ?>
                                                <span class="badge badge-danger">RA</span>
                                            <?php } elseif ($row['gol_assatidz'] == 3) { ?>
                                                <span class="badge badge-danger">MDTU/MDTW</span>
                                            <?php } elseif ($row['gol_assatidz'] == 4) { ?>
                                                <span class="badge badge-danger">Pendidikan Kesetaraan</span>
                                            <?php } elseif ($row['gol_assatidz'] == 5) { ?>
                                                <span class="badge badge-danger">RTQ</span>
                                            <?php } elseif ($row['gol_assatidz'] == 6) { ?>
                                                <span class="badge badge-danger">PAUD-QU</span>
                                            <?php } ?>
                                        </td>-->
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
                                            <a class="btn btn-sm btn-primary" href="<?= base_url('guru/detail/' . $row['id_guru']) ?>"> <i class="fa fa-eye"></i> Lihat Detail </a>
                                            <a class="btn btn-sm btn-success" href="<?= base_url('guru/edit/' . $row['id_guru']) ?>"> <i class="fa fa-edit"></i> Edit </a>
                                            <a class="btn btn-sm btn-danger" href="<?= base_url('guru/delete/' . $row['id_guru']) ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"> <i class="fa fa-trash-o"></i> Delete </a>
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