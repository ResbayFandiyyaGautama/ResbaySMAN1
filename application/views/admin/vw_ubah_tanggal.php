<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Edit Informasi Buka dan Tutup Pendaftaran</h3>
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
                            <h4 class="box-title">Form Update Data Informasi Buka dan Tutup Pendaftaran</h4>
                        </div>
                        <div class="box-body">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_tanggal" value="<?= $tgl['id_tanggal']; ?>">

                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="judul" value="<?= $tgl['judul']; ?>">
                                    <?= form_error('judul', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="tgl_buka">Tanggal Buka</label>
                                    <input type="date" name="tgl_buka" class="form-control" id="tgl_buka" value="<?= $tgl['tgl_buka']; ?>">
                                    <?= form_error('tgl_buka', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="tgl_tutup">Tanggal Tutup</label>
                                    <input type="date" name="tgl_tutup" class="form-control" id="tgl_tutup" value="<?= $tgl['tgl_tutup']; ?>">
                                    <?= form_error('tgl_tutup', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <a href="<?= base_url('Tanggal_daftar') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-success pull-right">Ubah Tanggal</button>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>