<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card rounded">
                    <div class="card-header">
                        <strong class="card-title"><?= $judul; ?></strong>
                    </div>
                    <div class="card-body">
                        <?php if ($this->session->has_userdata('success')) : ?>
                            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                <span class="badge badge-pill badge-success">Success</span>
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
                                    <th>Foto Kepala Sekolah</th>
                                    <th>Kepala Sekolah</th>
                                    <!--<th>no.Telp Sekolah</th>-->
                                    <th>no. whats app</th>
                                    <th>Tautan Group Whatsapp Calon Siswa terbaru</th>
                                    <th>Facebook</th>
                                    <th>Instagram</th>
                                    <th>Youtube</th>
                                    <!--<th>Email Sekolah</th>-->
                                    <th>Pendaftaran dibuka </th>
                                    <th>Batas pendaftaran siswa</th>
                                    <th>periode tahun ajar </th>
                                    <!--<th>Fasilitas ponpes</th>
                                    <th>Link instagram Sekolah</th>
                                    <th>Link facebook Sekolah</th>
                                    <th>Link youtube Sekolah</th>-->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) { ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><img src="<?php echo base_url(); ?>assets/images/upload/<?php echo ucwords($row['image']); ?>" height="100px" width="250px"></td>
                                        <td><?php echo ucwords($row['nama_kepala_ponpes']); ?></td>
                                        <!--<td><?php echo ucwords($row['no_hp']); ?></td>-->
                                        <td><?php echo ucwords($row['whatsapp']); ?></td>
                                        <td><a href="<?php echo ucwords($row['link_grup_whatsapp']); ?>" class="btn btn-success">Group WA <i class="bi bi-whatsapp"></i></a></td>
                                        <td><a href="<?php echo ucwords($row['facebook']); ?>" class="btn btn-primary">Facebook <i class="bi bi-facebook"></i></a></td>
                                        <td><a href="<?php echo ucwords($row['instagram']); ?>" class="btn btn-danger">Instagram <i class="bi bi-instagram"></i></a></td>
                                        <td><a href="<?php echo ucwords($row['youtube']); ?>" class="btn btn-danger">Youtube <i class="bi bi-youtube"></i></a></td>
                                        <!--<td><?php echo ucwords($row['email']); ?></td>-->
                                        <td><?php echo ucwords($row['pendaftaran_awal']); ?></td>
                                        <td><?php echo ucwords($row['batas_akhir']); ?></td>
                                        <td><?php echo ucwords($row['periode']); ?></td>
                                        <!--<td><?php echo ucwords($row['fasilitas']); ?></td>
                                        <td><?php echo ucwords($row['instagram']); ?></td>
                                        <td><?php echo ucwords($row['facebook']); ?></td>
                                        <td><?php echo ucwords($row['youtube']); ?></td>-->
                                        <td>
                                            <!--<a class="btn btn-sm btn-info rounded m-1" href="<?= base_url('pengaturan/detail/' . $row['id_pengaturan']) ?>"> <i class="fa fa-eye"></i> lihat </a>-->
                                            <a class="btn btn-sm btn-primary rounded m-1" href="<?= base_url('pengaturan/edit/' . $row['id_pengaturan']) ?>"> <i class="fa fa-edit"></i> Edit </a>
                                        </td>
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
    </div>
</div>