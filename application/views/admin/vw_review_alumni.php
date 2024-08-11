<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Halaman Review Alumni</h3>
                        </div>
                        <div class="box-body">

                            <div class="float-right">
                                <a href="<?= base_url() ?>Review_alumni/tambah" class="waves-effect waves-light btn mb-5 bg-gradient-primary">Tambah Review</a>
                            </div><br>

                            <?= $this->session->flashdata('message'); ?>

                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Generasi</th>
                                            <th>Review</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($review as $re) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><img src="<?= base_url('assets/images/pengajar/') . $re['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                                <td><?= $re['nama_alumni']; ?></td>
                                                <td><?= $re['generasi']; ?></td>
                                                <td><?= $re['review']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Review_alumni/edit/') . $re['id_review']; ?>" class="badge badge-warning">Edit</a>
                                                    <a href="<?= base_url('Review_alumni/hapus/') . $re['id_review']; ?>" class="badge badge-danger">Hapus</a>
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