<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Edit Detail Bulanan dan Ujian</h3>
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
                            <h4 class="box-title">Form Update Detail Bulanan dan Ujian</h4>
                        </div>
                        <div class="box-body">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_bulanan" value="<?= $perbulan['id_bulanan']; ?>">

                                <div class="form-group">
                                    <label for="bulanan">Nama Bulan</label>
                                    <input type="text" name="bulanan" class="form-control" id="bulanan" value="<?= $perbulan['bulanan']; ?>">
                                    <?= form_error('bulanan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="harga">Jumlah</label>
                                    <input type="number" name="harga" class="form-control" id="harga" value="<?= $perbulan['harga']; ?>">
                                    <?= form_error('harga', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <a href="<?= base_url('Detail_bulanan') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-success pull-right">Ubah</button>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>