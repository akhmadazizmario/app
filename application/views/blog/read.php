<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card rounded">
                    <div class="card-header">
                        <strong class="card-title"><?= $judul; ?></strong>
                        <a class="btn btn-sm btn-success float-right rounded" href="<?= base_url('blog/tambah') ?>"> <i class="fa fa-plus-square-o"></i> Tambah Artikel Baru </a>
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
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Publish</th>
                                    <th>Thumbnail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) { ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo ucwords($row['judul']); ?></td>
                                        <td><?php echo substr($row['isi'], 0, 100) . '...'; ?></td>
                                        <td><?php echo ucwords($row['tanggal']); ?></td>
                                        <td><img src="<?php echo base_url(); ?>assets/images/upload/<?php echo ucwords($row['image']); ?>" height="100px" width="250px"></td>
                                        <td>
                                            <a class="btn btn-sm btn-secondary rounded m-1" href="<?= base_url('blog/edit/' . $row['id_berita']) ?>"> <i class="fa fa-edit"></i> Edit </a>
                                            <a class="btn btn-sm btn-danger rounded m-1" href="<?= base_url('blog/delete/' . $row['id_berita']) ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"> <i class="fa fa-trash-o"></i> Delete </a>
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