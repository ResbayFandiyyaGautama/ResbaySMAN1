<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Tambah Kontak dan Lokasi</h3>
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
                            <h4 class="box-title">Form Tambah Kontak dan Lokasi</h4>
                        </div>
                        <div class="box-body">
                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="nama_lokasi">Titik Lokasi</label>
                                    <input type="text" name="nama_lokasi" value="<?= set_value('nama_lokasi') ?>" class="form-control" id="nama_lokasi" placeholder="Titik Lokasi">
                                    <?= form_error('nama_lokasi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="telepon">Telepon Siswa Kursus Bahasa Inggris</label>
                                    <input type="text" name="telepon" value="<?= set_value('telepon') ?>" class="form-control" id="telepon" placeholder="Telepon">
                                    <?= form_error('telepon', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email Siswa Kursus Bahasa Inggris</label>
                                    <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control" id="email" placeholder="Email">
                                    <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="info_lokasi">Info Deskripsi</label>
                                    <input type="text" name="info_lokasi" value="<?= set_value('info_lokasi') ?>" class="form-control" id="info_lokasi" placeholder="Info">
                                    <?= form_error('info_lokasi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <a href="<?= base_url('Lokasi_englishcamp') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-success pull-right">Tambah Kontak dan Lokasi</button>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>