<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Halaman Profil Siswa Kursus Bahasa Inggris</h3>
                        </div>
                        <div class="box-body">

                            <div class="float-right">
                                <a href="<?= base_url() ?>Profil_englishcamp/tambah" class="waves-effect waves-light btn mb-5 bg-gradient-primary">Tambah Profil</a>
                            </div><br>

                            <?= $this->session->flashdata('message'); ?>

                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Sejarah</th>
                                            <th>Visi</th>
                                            <th>Misi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($profil as $pro) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><img src="<?= base_url('assets/images/pengajar/') . $pro['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                                <td><?= $pro['sejarah']; ?></td>
                                                <td><?= $pro['visi']; ?></td>
                                                <td><?= $pro['misi']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Profil_englishcamp/edit/') . $pro['id_profil']; ?>" class="badge badge-warning">Edit</a>
                                                    <a href="<?= base_url('Profil_englishcamp/hapus/') . $pro['id_profil']; ?>" class="badge badge-danger">Hapus</a>
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