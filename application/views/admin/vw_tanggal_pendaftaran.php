<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Informasi Buka dan Tutup Pendaftaran</h3>
                        </div>
                        <div class="box-body">
                            <div class="float-right">
                                <a href="<?= base_url() ?>Tanggal_daftar/tambah" class="waves-effect waves-light btn mb-5 bg-gradient-primary">Tambah Tanggal</a>
                            </div><br>

                            <?= $this->session->flashdata('message'); ?>

                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Buka</th>
                                            <th>Tanggal Tutup</th>
                                            <th>Judul</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($tanggal as $us) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= date('d F Y', strtotime($us['tgl_buka'])); ?></td>
                                                <td><?= date('d F Y', strtotime($us['tgl_tutup'])); ?></td>
                                                <td><?= $us['judul']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Tanggal_daftar/edit/') . $us['id_tanggal']; ?>" class="badge badge-warning">Edit</a>
                                                    <a href="<?= base_url('Tanggal_daftar/hapus/') . $us['id_tanggal']; ?>" class="badge badge-danger">Hapus</a>
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