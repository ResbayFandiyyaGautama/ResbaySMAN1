<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Edit Pembayaran</h3>
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
                            <h4 class="box-title">Form Update Data Pembayaran</h4>
                        </div>
                        <div class="box-body">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_bayar" value="<?= $siswa['id_bayar']; ?>">

                                <div class="form-group">
                                    <label for="id">Nama Siswa</label>
                                    <input type="text" name="id" class="form-control" id="id" placeholder="Nama Siswa" value="<?= $siswa['nama']; ?>">
                                    <?= form_error('id', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="gross_amount">Jumlah</label>
                                    <input type="text" name="gross_amount" value="<?= $biaya ?>" class="form-control" id="gross_amount" readonly>
                                    <?= form_error('gross_amount', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="jenis_pembayaran">Jenis Pembayaran</label>
                                    <input type="text" name="jenis_pembayaran" class="form-control" id="jenis_pembayaran" value="<?= $siswa['jenis_pembayaran']; ?>">
                                    <?= form_error('jenis_pembayaran', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="payment_type">Tipe Pembayaran</label>
                                    <input type="text" name="payment_type" class="form-control" id="payment_type" value="<?= $siswa['payment_type']; ?>">
                                    <?= form_error('payment_type', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <!-- <div class="form-group">
                                    <label for="transaction_time">Waktu Transakri</label>
                                    <input type="date" name="transaction_time" class="form-control" id="transaction_time" value="<?= $siswa['transaction_time']; ?>">
                                    <?= form_error('transaction_time', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div> -->

                                <div class="form-group">
                                    <label for="transaction_time">Waktu Transaksi</label>
                                    <input type="date" name="transaction_time" class="form-control" id="transaction_time" value="<?= substr($siswa['transaction_time'], 0, 10); ?>">
                                    <?= form_error('transaction_time', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="status_code">Status</label>
                                    <select name="status_code" id="status_code" value="<?= $siswa['status_code']; ?>" class="form-control">
                                        <option value="">Status</option>
                                        <option value="Berhasil">Berhasil</option>
                                        <option value="Gagal">Gagal</option>
                                    </select>
                                    <?= form_error('status_code', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <a href="<?= base_url('Pembayaran_bulanan') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-success pull-right">Ubah Pembayaran</button>
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