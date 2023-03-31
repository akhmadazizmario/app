<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?= $judul . ' ' . ucwords($row['nama_guru']) ?></strong>
                        <a class="btn btn-sm btn-danger float-right" href="<?= site_url('guru') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-sm table-hover">
                            <?php if ($row['foto_guru'] != null) { ?>
                                <tr>
                                    <th width="150px">Foto</th>
                                    <td> : </td>
                                    <td><img class="my-3 rounded" src="<?= base_url('upload/foto_guru/' . $row['foto_guru']) ?>" alt="" width="80px"></td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <th>ID guru</th>
                                <td> : </td>
                                <td> <?= $row['id_guru'] ?> </td>
                            </tr>
                            <tr>
                                <th>NIK guru</th>
                                <td> : </td>
                                <td> <?= $row['nik_guru'] ?> </td>
                            </tr>
                            <tr>
                                <th>Nama guru</th>
                                <td> : </td>
                                <td> <?= ucwords($row['nama_guru']) ?> </td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td> : </td>
                                <td> <?php if ($row['jk_guru'] == 'L') { ?>
                                        Laki-Laki
                                    <?php } else { ?>
                                        Perempuan
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <th>TTL</th>
                                <td> : </td>
                                <td> <?= ucwords($row['tempat_lahir_guru']) . ', ' . date_indo($row['tgl_lahir_guru']) ?> </td>
                            </tr>
                            <tr>
                                <th>Mulai Masuk</th>
                                <td> : </td>
                                <td> <?= date_indo($row['mulai_kerja']) ?> </td>
                            </tr>
                            <tr>
                                <th>No Telepon</th>
                                <td> : </td>
                                <td> <?= $row['telp_guru'] ?> </td>
                            </tr>
                            <!--<tr>
                                <th>gol_assatidz</th>
                                <td> : </td>
                                <td> <?php if ($row['gol_assatidz'] == '1') { ?>
                                        Ponpes
                                    <?php } else if ($row['gol_assatidz'] == '2') { ?>
                                        RA
                                    <?php } else if ($row['gol_assatidz'] == '3') { ?>
                                        MDTU/MDTW
                                    <?php } else if ($row['gol_assatidz'] == '4') { ?>
                                        Pendidikan Kesetaraan
                                    <?php } else if ($row['gol_assatidz'] == '5') { ?>
                                        RTQ
                                    <?php } else { ?>
                                        PAUD-QU
                                    <?php } ?>
                                </td>
                            </tr>-->
                            <tr>
                                <th>Pendidikan</th>
                                <td> : </td>
                                <td> <?php if ($row['pendidikan'] == '1') { ?>
                                        SMA/SMK/MA
                                    <?php } else if ($row['pendidikan'] == '2') { ?>
                                        D3
                                    <?php } else if ($row['pendidikan'] == '3') { ?>
                                        S1
                                    <?php } else { ?>
                                        S2
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td> : </td>
                                <td> <?php if ($row['status'] == '1') { ?>
                                        Tetap
                                    <?php } else if ($row['status'] == '2') { ?>
                                        Kontrak
                                    <?php } else { ?>
                                        Relawan
                                    <?php } ?>
                                </td>
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