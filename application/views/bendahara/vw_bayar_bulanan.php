<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Halaman Pembayaran Bulanan dan Ujian</h3>
                        </div>
                        <div class="box-body">

                            <div class="float-right">
                                <a href="<?= base_url() ?>Pembayaran_bulanan/tambah" class="waves-effect waves-light btn mb-5 bg-gradient-primary">Tambah Pembayaran</a>
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
                                            <th>Tipe pembayaran</th>
                                            <th>Jenis Pembayaran</th>
                                            <th>Waktu Transaksi</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($bulanan as $bulan) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $bulan['order_id']; ?></td>
                                                <td><?= $bulan['nama']; ?></td>
                                                <td><?= $bulan['gross_amount']; ?></td>
                                                <td><?= $bulan['payment_type']; ?></td>
                                                <td><?= $bulan['jenis_pembayaran']; ?></td>
                                                <td><?= date('d F Y', strtotime($bulan['transaction_time'])); ?></td>
                                                <td>
                                                    <?php
                                                    if ($bulan['status_code'] == "Berhasil" || $bulan['status_code'] == 200) {
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
                                                    <a href="<?= base_url('Pembayaran_bulanan/edit/') . $bulan['id_bayar']; ?>" class="glyphicon glyphicon-edit"> Edit</a>
                                                    <a href="<?= base_url('Pembayaran_bulanan/hapus/') . $bulan['id_bayar']; ?>" class="glyphicon glyphicon-trash"> Hapus</a>
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