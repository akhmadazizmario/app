<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card rounded">
                    <div class="card-header">
                        <strong class="card-title"><?= $judul; ?></strong>
                        <a class="btn btn-sm btn-secondary rounded float-right" href="<?= site_url('blog') ?>"> <i class="fa fa-arrow-left"></i> Kembali </a>
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

                        <form action="<?= base_url('galeri/update/' . $row['id_galeri']); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" name="id_galeri" value="<?= $row['id_galeri'] ?>">
                            <div class="form-group">
                                <label for="Judul"> Judul atau Caption :</label><br>
                                <input class="form-control" id="judul" type="text" name="judul" value="<?= $row['judul'] ?>" required oninvalid="this.setCustomValidity('Judul Wajib Diisi')" oninput="this.setCustomValidity('')">
                            </div>


                            <?php if ($row['image'] != null) { ?>
                                <div class="form-group">
                                    <label class="form-label"> Foto Lama : </label> <br>
                                    <img src="<?= base_url('assets/images/upload/' . $row['image']) ?>" alt="" width="80px"> </td>
                                </div>
                            <?php } ?>

                            <label for="upload"> Upload Foto Baru :</label><br>
                            <div class="form-group custom-file mb-3">
                                <input id="upload" type="file" name="image" class="custom-file-input" id="customFile">
                                <input type="hidden" name="old_img" value="<?= $row['image'] ?>">
                                <label class="custom-file-label" for="customFile">Choose file - Maks. 2MB</label>
                            </div>

                            <button class="btn btn-sm btn-primary rounded" type="submit"> <i class="fa fa-save"></i> Update </button>
                            <button class="btn btn-sm btn-danger rounded" type="reset"> <i class="fa fa-rotate-right"></i> Reset </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .Animated -->
</div><!-- .content -->