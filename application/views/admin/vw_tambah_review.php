<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Tambah Review Alumni</h3>
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
                            <h4 class="box-title">Form Tambah Review</h4>
                        </div>

                        <div class="box-body">

                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="nama_alumni">Nama Alumni</label>
                                    <input type="text" name="nama_alumni" value="<?= set_value('nama_alumni') ?>" class="form-control" id="nama_alumni" placeholder="Nama Pengajar">
                                    <?= form_error('nama_alumni', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="generasi">Generasi</label>
                                    <input type="text" name="generasi" value="<?= set_value('generasi') ?>" class="form-control" id="generasi" placeholder="Generasi">
                                    <?= form_error('generasi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label>Review<span class="text-danger"></span></label>
                                    <textarea id="review" name="review" class="form-control ckeditor" rows="10" cols="80" value="<?= set_value('review') ?>"></textarea>
                                    <?= form_error('review', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" name="gambar" id="gambar">
                                </div>

                                <a href="<?= base_url('Review_alumni') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-success pull-right">Tambah Review</button>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>