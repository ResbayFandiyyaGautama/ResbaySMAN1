<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Halaman Detail Biaya Bulanan / Ujian</h3>
                        </div>
                        <div class="box-body">

                            <div class="float-right">
                                <a href="<?= base_url() ?>Detail_bulanan/tambah" class="waves-effect waves-light btn mb-5 bg-gradient-primary">Tambah Detail</a>
                            </div><br>

                            <?= $this->session->flashdata('message'); ?>
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Bulanan</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($bulanan as $bln) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $bln['bulanan']; ?></td>
                                                <td><?= $bln['harga']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Detail_bulanan/edit/') . $bln['id_bulanan']; ?>" class="badge badge-warning">Edit</a>
                                                    <a href="<?= base_url('Detail_bulanan/hapus/') . $bln['id_bulanan']; ?>" class="badge badge-danger">Hapus</a>
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