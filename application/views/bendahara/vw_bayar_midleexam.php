<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Halaman Pembayaran Midle Examination</h3>
                        </div>
                        <div class="box-body">

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
                                            <!-- <th>Aksi</th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($midle as $mid) : ?>

                                            <?php if ($mid['jenis_pembayaran'] == "Midle Exam") : ?>
                                                <tr>
                                                    <td><?= $i; ?>.</td>
                                                    <td><?= $mid['order_id']; ?></td>
                                                    <td><?= $mid['nama']; ?></td>
                                                    <td><?= $mid['gross_amount']; ?></td>
                                                    <td><?= $mid['payment_type']; ?></td>
                                                    <td><?= $mid['jenis_pembayaran']; ?></td>
                                                    <td><?= date('d F Y', strtotime($mid['transaction_time'])); ?></td>
                                                    <td>
                                                        <?php
                                                        if ($mid['status_code'] == "Berhasil" || $mid['status_code'] == 200) {
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
                                                    <!-- <td>
                                                        <a href="<?= base_url('Pembayaran_bulanan/tambah/') . $mid['id_bayar']; ?>" class="glyphicon glyphicon-edit"> Edit</a><br>
                                                        <a href="<?= base_url('Pembayaran_bulanan/hapus/') . $mid['id_bayar']; ?>" class="glyphicon glyphicon-trash"> Hapus</a>
                                                    </td> -->
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endif; ?>

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