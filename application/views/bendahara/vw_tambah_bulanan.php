<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Tambah Bayar Bulanan dan Ujian</h3>
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
                            <h4 class="box-title">Form Tambah Bayar Bulanan</h4>
                        </div>

                        <div class="box-body">
                            <form action="" method="POST" enctype="multipart/form-data">

                                <!-- <div class="form-group">
                                    <label for="id">Nama Siswa</label>
                                    <select name="id" id="id" value="<?= set_value('id') ?>" class="form-control">
                                        <option value="">Pilih Nama Siswa</option>
                                        <?php foreach ($siswa as $sis) : ?>
                                            <option value="<?= $sis['id']; ?>"><?= $sis['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('id', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div> -->

                                <div class="form-group">
                                    <label for="id">Nama Siswa</label>
                                    <select name="id" id="id" value="<?= set_value('id') ?>" class="form-control">
                                        <option value="">Pilih Nama Siswa</option>
                                        <?php
                                        $displayed_ids = array();
                                        foreach ($siswa as $sis) :
                                            if (!in_array($sis['id'], $displayed_ids)) :
                                                $displayed_ids[] = $sis['id'];
                                        ?>
                                                <option value="<?= $sis['id']; ?>"><?= $sis['nama']; ?></option>
                                        <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </select>
                                    <?= form_error('id', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="gross_amount">Jumlah</label>
                                    <input type="text" name="gross_amount" value="<?= $biaya ?>" class="form-control" id="gross_amount" readonly>
                                    <?= form_error('gross_amount', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="jenis_pembayaran">Jenis Pembayaran</label>
                                    <select name="jenis_pembayaran" id="jenis_pembayaran" value="<?= set_value('jenis_pembayaran') ?>" class="form-control">
                                        <option value="">Jenis Pembayaran</option>
                                        <option value="Bulanan">Bulanan</option>
                                        <option value="Midle Exam">Midle Exam</option>
                                        <option value="Final Exam">Final Exam</option>
                                    </select>
                                    <?= form_error('jenis_pembayaran', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="payment_type">Tipe Pembayaran</label>
                                    <input type="text" name="payment_type" value="<?= set_value('payment_type') ?>" class="form-control" id="payment_type" placeholder="Tipe Pembayaran">
                                    <?= form_error('payment_type', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="transaction_time">Waktu Transakri</label>
                                    <input type="date" name="transaction_time" value="<?= set_value('transaction_time') ?>" class="form-control" id="transaction_time" placeholder="Waktu Pembayran">
                                    <?= form_error('transaction_time', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="status_code">Status</label>
                                    <select name="status_code" id="status_code" value="<?= set_value('status_code') ?>" class="form-control">
                                        <option value="">Status</option>
                                        <option value="Berhasil">Berhasil</option>
                                        <option value="Gagal">Gagal</option>
                                    </select>
                                    <?= form_error('status_code', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <a href="<?= base_url('Pembayaran_bulanan') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-success pull-right">Tambah Pembayaran</button>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>