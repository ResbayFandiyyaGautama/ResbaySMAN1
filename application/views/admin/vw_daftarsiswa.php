<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Daftar Siswa Yang Sudah Mendaftar</h3>
                        </div>
                        <div class="box-body">
                            <?= $this->session->flashdata('message'); ?>
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Asal Sekolah</th>
                                            <th>Asal Daerah</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($daftar as $us) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $us['nama']; ?></td>
                                                <td><?= $us['jenis_kelamin']; ?></td>
                                                <td><?= $us['asal_sekolah']; ?></td>
                                                <td><?= $us['alamat_siswa']; ?></td>
                                                <!-- <td><?= $us['status']; ?></td> -->
                                                <td>
                                                    <?php
                                                    if ($us['status'] == "DITERIMA") {
                                                    ?>
                                                        <span class="badge bg-success">DITERIMA</span>
                                                    <?php
                                                    } elseif ($us['status'] == "DITOLAK") {
                                                    ?>
                                                        <span class="badge bg-danger">DITOLAK</span>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <span class="badge bg-secondary">DIPROSES</span>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>

                                                <td>
                                                    <a href="<?= base_url('Daftarsiswa/status/') . $us['id_pendaftar']; ?>" class="badge badge-primary">Sattus</a>
                                                    <a href="<?= base_url('Daftarsiswa/detail/') . $us['id_pendaftar']; ?>" class="badge badge-info">Detail</a>
                                                    <a href="<?= base_url('Daftarsiswa/hapus/') . $us['id_pendaftar']; ?>" class="badge badge-danger">Hapus</a>
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