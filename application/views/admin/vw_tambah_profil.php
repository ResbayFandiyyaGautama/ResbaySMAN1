<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Tambah Profil Siswa Kursus Bahasa Inggris</h3>
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
                            <h4 class="box-title">Form Tambah Profil</h4>
                        </div>

                        <div class="box-body">

                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Sejarah<span class="text-danger"></span></label>
                                    <textarea id="sejarah" name="sejarah" class="form-control ckeditor" rows="10" cols="80" value="<?= set_value('sejarah') ?>"></textarea>
                                    <?= form_error('sejarah', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label>Visi<span class="text-danger"></span></label>
                                    <textarea id="visi" name="visi" class="form-control ckeditor" rows="10" cols="80" value="<?= set_value('visi') ?>"></textarea>
                                    <?= form_error('visi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label>Misi<span class="text-danger"></span></label>
                                    <textarea id="misi" name="misi" class="form-control ckeditor" rows="10" cols="80" value="<?= set_value('misi') ?>"></textarea>
                                    <?= form_error('misi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" name="gambar" id="gambar">
                                </div>

                                <a href="<?= base_url('Profil_englishcamp') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-success pull-right">Tambah Profil</button>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>