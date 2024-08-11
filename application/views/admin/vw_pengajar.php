<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Halaman Pengajar Siswa Kursus Bahasa Inggris</h3>
                        </div>
                        <div class="box-body">
                            <div class="float-right">
                                <a href="<?= base_url() ?>Pengajar/tambah" class="waves-effect waves-light btn mb-5 bg-gradient-primary">Tambah Pengajar</a>
                            </div><br>

                            <?= $this->session->flashdata('message'); ?>

                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis kelamin</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($pengajar as $us) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><img src="<?= base_url('assets/images/pengajar/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                                <td><?= $us['nama_pengajar']; ?></td>
                                                <td><?= $us['jabatan']; ?></td>
                                                <td><?= date('d F Y', strtotime($us['tgl_lahir'])); ?></td>
                                                <td><?= $us['jenis_kelamin']; ?></td>
                                                <td><?= $us['agama']; ?></td>
                                                <td><?= $us['alamat']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Pengajar/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                                    <a href="<?= base_url('Pengajar/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
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