<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?= $judul; ?></strong>
                        <a class="btn btn-sm btn-secondary rounded float-right" href="<?= site_url('brosur') ?>"> <i class="fa fa-arrow-left"></i> Kembali </a>
                    </div>
                    <div class="card-body">
                        <?php if ($this->session->has_userdata('error')) : ?>
                            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                <span class="badge badge-pill badge-danger">Perhatian!</span>
                                <?= $this->session->flashdata('error'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url('brosur/update/' . $row['id_brosur']); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" name="id_brosur" value="<?= $row['id_brosur'] ?>">

                            <?php if ($row['image'] != null) { ?>
                                <div class="form-group">
                                    <label class="form-label"> Brosur :</label> <br>
                                    <img src="<?= base_url('assets/images/upload/' . $row['image']) ?>" alt="" width="80px"> </td>
                                </div>
                            <?php } ?>

                            <label for="upload"> Gambar Brosur :</label><br>
                            <div class="form-group custom-file mb-3">
                                <input id="upload" type="file" name="image" class="custom-file-input" id="customFile">
                                <input type="hidden" name="old_img" value="<?= $row['image'] ?>">
                                <label class="custom-file-label" for="customFile">Choose file - Maks. 2MB</label>
                            </div>

                            <button class="btn btn-sm rounded btn-primary" type="submit"> <i class="fa fa-save"></i> Update </button>
                            <button class="btn btn-sm rounded btn-danger" type="reset"> <i class="fa fa-rotate-right"></i> Reset </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .Animated -->
</div><!-- .content -->