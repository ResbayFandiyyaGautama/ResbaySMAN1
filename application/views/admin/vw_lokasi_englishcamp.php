<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Halaman Kontak dan Lokasi Siswa Kursus Bahasa Inggris</h3>
                        </div>
                        <div class="box-body">

                            <div class="float-right">
                                <a href="<?= base_url() ?>Lokasi_englishcamp/tambah" class="waves-effect waves-light btn mb-5 bg-gradient-primary">Tambah Lokasi dan Kontak</a>
                            </div><br>

                            <?= $this->session->flashdata('message'); ?>

                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Titik Lokasi</th>
                                            <th>Telepon Siswa Kursus Bahasa Inggris</th>
                                            <th>Email</th>
                                            <th>Info Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($lokasi as $loc) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $loc['nama_lokasi']; ?></td>
                                                <td><?= $loc['telepon']; ?></td>
                                                <td><?= $loc['email']; ?></td>
                                                <td><?= $loc['info_lokasi']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Lokasi_englishcamp/edit/') . $loc['id_lokasi']; ?>" class="badge badge-warning">Edit</a>
                                                    <a href="<?= base_url('Lokasi_englishcamp/hapus/') . $loc['id_lokasi']; ?>" class="badge badge-danger">Hapus</a>
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