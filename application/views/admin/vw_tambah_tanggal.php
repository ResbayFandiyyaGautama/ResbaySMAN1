<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Tambah Informasi Buka dan Tutup Pendaftaran</h3>
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
                            <h4 class="box-title">Form Tambah Informasi Buka dan Tutup Pendaftaran</h4>
                        </div>
                        <div class="box-body">
                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" value="<?= set_value('judul') ?>" class="form-control" id="judul" placeholder="Judul Jadwal">
                                    <?= form_error('judul', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="tgl_buka">Tanggal Buka</label>
                                    <input type="date" name="tgl_buka" value="<?= set_value('tgl_buka') ?>" class="form-control" id="tgl_buka">
                                    <?= form_error('tgl_buka', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="tgl_tutup">Tanggal Tutup</label>
                                    <input type="date" name="tgl_tutup" value="<?= set_value('tgl_tutup') ?>" class="form-control" id="tgl_tutup">
                                    <?= form_error('tgl_tutup', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <a href="<?= base_url('Tanggal_daftar') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-success pull-right">Tambah Tanggal</button>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>