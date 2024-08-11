<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Halaman Media Youtube</h3>
                        </div>
                        <div class="box-body">

                            <div class="float-right">
                                <a href="<?= base_url() ?>Media_youtube/tambah" class="waves-effect waves-light btn mb-5 bg-gradient-primary">Tambah Media</a>
                            </div><br>

                            <?= $this->session->flashdata('message'); ?>

                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Judul</th>
                                            <th>Aktor</th>
                                            <th>Status</th>
                                            <th>Link</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($media as $me) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><img src="<?= base_url('assets/images/pengajar/') . $me['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                                <td><?= $me['judul']; ?></td>
                                                <td><?= $me['aktor']; ?></td>
                                                <td><?= $me['status']; ?></td>
                                                <td><?= $me['link']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Media_youtube/edit/') . $me['id_media']; ?>" class="badge badge-warning">Edit</a>
                                                    <a href="<?= base_url('Media_youtube/hapus/') . $me['id_media']; ?>" class="badge badge-danger">Hapus</a>
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