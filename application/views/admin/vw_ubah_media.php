<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Edit Media</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Forms</li>
                                <li class="breadcrumb-item active" aria-current="page">General Form Elements</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Form Update Data Media</h4>
                        </div>
                        <div class="box-body">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_media" value="<?= $media['id_media']; ?>">

                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" value="<?= $media['judul']; ?>">
                                    <?= form_error('judul', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="aktor">Aktor</label>
                                    <input type="text" name="aktor" class="form-control" id="aktor" placeholder="Aktor" value="<?= $media['aktor']; ?>">
                                    <?= form_error('aktor', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" name="status" class="form-control" id="status" placeholder="Status" value="<?= $media['status']; ?>">
                                    <?= form_error('status', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" name="link" class="form-control" id="link" placeholder="Link" value="<?= $media['link']; ?>">
                                    <?= form_error('link', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <img src="<?= base_url('assets/images/pengajar/') . $media['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                                    <div class="custom-file">
                                        <label for="gambar" class="form-label">Gambar</label>
                                        <input class="form-control" type="file" name="gambar" id="gambar">
                                        <?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <a href="<?= base_url('Media_youtube') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-success pull-right">Ubah Media</button>
                            </Form>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>