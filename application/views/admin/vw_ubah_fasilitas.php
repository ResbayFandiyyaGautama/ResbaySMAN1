<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Edit Fasilitas Siswa Kursus Bahasa Inggris</h3>
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
                            <h4 class="box-title">Form Update Data Fasilitas</h4>
                        </div>
                        <div class="box-body">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_fasilitas" value="<?= $fasilitas['id_fasilitas']; ?>">

                                <div class="form-group">
                                    <label for="nama_fasilitas">Nama Fasilitas</label>
                                    <input type="text" name="nama_fasilitas" class="form-control" id="nama_fasilitas" value="<?= $fasilitas['nama_fasilitas']; ?>">
                                    <?= form_error('nama_fasilitas', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi<span class="text-danger"></span></label>
                                    <textarea id="deskripsi" name="deskripsi" class="form-control ckeditor" rows="10" cols="80"><?= $fasilitas['deskripsi']; ?></textarea>
                                    <?= form_error('deskripsi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <img src="<?= base_url('assets/images/pengajar/') . $fasilitas['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                                    <div class="custom-file">
                                        <label for="gambar" class="form-label">Gambar</label>
                                        <input class="form-control" type="file" name="gambar" id="gambar">
                                        <?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <a href="<?= base_url('Fasilitas_englishcamp') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-success pull-right">Ubah Fasilitas</button>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>