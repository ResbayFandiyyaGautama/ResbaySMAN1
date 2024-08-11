<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Halaman Materi Pembelajaran</h3>
                        </div>
                        <div class="box-body">

                            <div class="float-right">
                                <a href="<?= base_url() ?>Info_pendaftaran/tambah_materi" class="waves-effect waves-light btn mb-5 bg-gradient-primary">Tambah Materi</a>
                            </div><br>

                            <?= $this->session->flashdata('message'); ?>

                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Materi Belajar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($materi as $ma) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $ma['materi_pembelajaran']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Info_pendaftaran/edit_materi/') . $ma['id_belajar']; ?>" class="badge badge-warning">Edit</a>
                                                    <a href="<?= base_url('Info_pendaftaran/hapus_materi/') . $ma['id_belajar']; ?>" class="badge badge-danger">Hapus</a>
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