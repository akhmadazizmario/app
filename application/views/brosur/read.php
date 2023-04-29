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
                                    <th>Brosur</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) { ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><img src="<?php echo base_url(); ?>assets/images/upload/<?php echo ucwords($row['image']); ?>" height="100px" width="250px"></td>
                                        <td>
                                            <a class="btn btn-sm btn-secondary rounded m-1" href="<?= base_url('brosur/edit/' . $row['id_brosur']) ?>"> <i class="fa fa-edit"></i> Edit </a>
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