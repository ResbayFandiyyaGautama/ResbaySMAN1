<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Halaman Fasilitas Siswa Kursus Bahasa Inggris</h3>
                        </div>
                        <div class="box-body">

                            <div class="float-right">
                                <a href="<?= base_url() ?>Fasilitas_englishcamp/tambah" class="waves-effect waves-light btn mb-5 bg-gradient-primary">Tambah Fasilitas</a>
                            </div><br>

                            <?= $this->session->flashdata('message'); ?>

                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama Fasilitas</th>
                                            <th>Dsekripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($fasilitas as $fa) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><img src="<?= base_url('assets/images/pengajar/') . $fa['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                                <td><?= $fa['nama_fasilitas']; ?></td>
                                                <td><?= $fa['deskripsi']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Fasilitas_englishcamp/edit/') . $fa['id_fasilitas']; ?>" class="badge badge-warning">Edit</a>
                                                    <a href="<?= base_url('Fasilitas_englishcamp/hapus/') . $fa['id_fasilitas']; ?>" class="badge badge-danger">Hapus</a>
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