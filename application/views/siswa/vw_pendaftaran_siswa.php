<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Informasi Buka dan Tutup Pendaftaran</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="float-right">
                                <a href="<?= base_url() ?>Pendaftaran/tambah" class="waves-effect waves-light btn mb-5 bg-gradient-primary">Tambah Pendaftaran</a>
                            </div><br>

                            <?= $this->session->flashdata('message'); ?>

                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Asal Sekolah</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tangggal Lahir</th>
                                            <th>Agama</th>
                                            <th>NISN</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>No Orangtua </th>
                                            <th>Alamat Orangtua</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($daftar as $us) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $us['nama']; ?></td>
                                                <td><?= $us['asal_sekolah']; ?></td>
                                                <td><?= $us['tempat_lahir']; ?></td>
                                                <td><?= $us['tgl_lahir']; ?></td>
                                                <td><?= $us['agama']; ?></td>
                                                <td><?= $us['nisn']; ?></td>
                                                <td><?= $us['nama_ayah']; ?></td>
                                                <td><?= $us['nama_ibu']; ?></td>
                                                <td><?= $us['no_orangtua']; ?></td>
                                                <td><?= $us['alamat_orangtua']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Pendaftaran/edit/') . $us['id_pendaftar']; ?>" class="badge badge-warning">Edit</a>
                                                    <a href="<?= base_url('Pendaftaran/hapus/') . $us['id_pendaftar']; ?>" class="badge badge-danger">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->