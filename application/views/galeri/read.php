<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card rounded">
                    <div class="card-header">
                        <!-- <strong class="card-title">Daftar Foto</strong> -->
                        <a class="btn btn-sm btn-success rounded float-right" href="<?= base_url('galeri/tambah') ?>"> <i class="fa fa-plus-square-o"></i> Tambah Gambar </a>
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
                                    <th>Caption</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) { ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo ucwords($row['judul']); ?></td>
                                        <td><img src="<?php echo base_url(); ?>assets/images/upload/<?php echo ucwords($row['image']); ?>" height="80px" width="50%"></td>
                                        <td>
                                            <a class="btn btn-sm btn-secondary rounded" href="<?= base_url('galeri/edit/' . $row['id_galeri']) ?>"> <i class="fa fa-edit"></i> Edit </a>
                                            <a class="btn btn-sm btn-danger rounded" href="<?= base_url('galeri/delete/' . $row['id_galeri']) ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"> <i class="fa fa-trash-o"></i> Delete </a>
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
</div><!-- .animated -->