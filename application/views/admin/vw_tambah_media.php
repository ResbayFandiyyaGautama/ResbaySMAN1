<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Tambah Media</h3>
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

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Form Tambah Media</h4>
                        </div>

                        <div class="box-body">
                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" value="<?= set_value('judul') ?>" class="form-control" id="judul" placeholder="Judul">
                                    <?= form_error('judul', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="aktor">Aktor</label>
                                    <input type="text" name="aktor" value="<?= set_value('aktor') ?>" class="form-control" id="aktor" placeholder="Aktor">
                                    <?= form_error('aktor', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" name="status" value="<?= set_value('status') ?>" class="form-control" id="status" placeholder="Status">
                                    <?= form_error('status', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" name="link" value="<?= set_value('link') ?>" class="form-control" id="link" placeholder="Link">
                                    <?= form_error('link', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" name="gambar" id="gambar">
                                </div>

                                <a href="<?= base_url('Media_youtube') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-success pull-right">Tambah Media</button>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>