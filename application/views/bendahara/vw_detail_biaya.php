<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Halaman Detail Biaya Pendaftaran</h3>
                        </div>
                        <div class="box-body">

                            <div class="float-right">
                                <a href="<?= base_url() ?>Detail_biaya/tambah" class="waves-effect waves-light btn mb-5 bg-gradient-primary">Tambah Biaya</a>
                            </div><br>

                            <?= $this->session->flashdata('message'); ?>
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($biaya as $bi) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $bi['nama_barang']; ?></td>
                                                <td><?= $bi['harga']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Detail_biaya/edit/') . $bi['id_biaya']; ?>" class="badge badge-warning">Edit</a>
                                                    <a href="<?= base_url('Detail_biaya/hapus/') . $bi['id_biaya']; ?>" class="badge badge-danger">Hapus</a>
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