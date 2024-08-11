<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Halaman Bayar Pendaftaran</h3>
                        </div>
                        <div class="box-body">

                            <div class="float-right">
                                <a href="<?= base_url() ?>Pembayaran_daftar/tambah" class="waves-effect waves-light btn mb-5 bg-gradient-primary">Tambah Pembayaran</a>
                            </div><br>

                            <?= $this->session->flashdata('message'); ?>
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Bayar</th>
                                            <th>Nama</th>
                                            <th>Jumlah</th>
                                            <th>Tipe Pembayaran</th>
                                            <th>Waktu Transaksi</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($bayar as $ba) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $ba['order_id']; ?></td>
                                                <td><?= $ba['nama']; ?></td>
                                                <td><?= $ba['gross_amount']; ?></td>
                                                <td><?= $ba['payment_type']; ?></td>
                                                <td><?= date('d F Y', strtotime($ba['transaction_time'])); ?></td>
                                                <td>
                                                    <?php
                                                    if ($ba['status_code'] == "Berhasil" || $ba['status_code'] == 200) {
                                                    ?>
                                                        <span class="badge bg-success">Success</span>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <span class="badge bg-warning">Pending</span>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('Pembayaran_daftar/edit/') . $ba['id_bayar']; ?>" class="glyphicon glyphicon-edit"> Edit</a><br>
                                                    <a href="<?= base_url('Pembayaran_daftar/hapus/') . $ba['id_bayar']; ?>" class="glyphicon glyphicon-trash"> Hapus</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>