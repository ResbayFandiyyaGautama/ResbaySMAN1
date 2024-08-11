<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Daftar Siswa Yang Sudah Upload Persyaratan</h3>
                        </div>
                        <div class="box-body">
                            <?= $this->session->flashdata('message'); ?>
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Surat Izin Sekolah</th>
                                            <th>Surat kesehatan</th>
                                            <th>Surat Pernyataan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($syarat as $sya) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $sya['nama']; ?></td>
                                                <td><?= $sya['surat_izin_sekolah']; ?></td>
                                                <td><?= $sya['surat_kesehatan']; ?></td>
                                                <td><?= $sya['surat_pernyataan']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Daftarsyarat/detail/') . $sya['id_persyaratan']; ?>" class="badge badge-info">Detail</a>
                                                    <a href="<?= base_url('Daftarsyarat/hapus/') . $sya['id_persyaratan']; ?>" class="badge badge-danger">Hapus</a>
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