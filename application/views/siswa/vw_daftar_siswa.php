<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Pendaftaran Siswa Baru</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Forms</li>
                                <li class="breadcrumb-item active" aria-current="page">General Form Elements</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="callout bg-temple-white">
                        <h3>Catatan!</h3>
                        <h5 style="font-family: Times new Roman;">
                            - Perhatikan form dengan baik, pastikan saat mengisi form tidak ada data yang salah.<br>
                            - Pengisian data pada form pendaftaran hanya bisa dilakukan sekali saja.<br>
                            - Jika terjadi kesalahan silahkan hubungi admin via whatsapp.</h5>
                    </div>
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Isilah Form Pendaftaran Dengan benar</h4>
                        </div>

                        <div class="box-body">
                            <form action="<?= base_url('pendaftaran/tambah'); ?>" method="POST" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_siswa">Nama Siswa</label>
                                            <input type="text" name="nama_siswa" value="<?= $user['nama'] ?>" class="form-control" id="nama_siswa" placeholder="Nama Siswa" disabled>
                                            <?= form_error('nama_siswa', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tgl_lahir" class="control-label col-md-3 pt-5">Tanggal Lahir</label>
                                            <input type="date" name="tgl_lahir" value="<?= set_value('tgl_lahir') ?>" class="form-control" id="tgl_lahir">
                                            <?= form_error('tgl_lahir', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" value="<?= set_value('tempat_lahir') ?>" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
                                            <?= form_error('tempat_lahir', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>" class="form-control">
                                                <option value="">Jenis Kelamin</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <?= form_error('jenis_kelamin', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alamat_siswa">Asal Daerah</label>
                                            <input type="text" name="alamat_siswa" value="<?= set_value('alamat_siswa') ?>" class="form-control" id="alamat_siswa" placeholder="Asal Daerah">
                                            <?= form_error('alamat_siswa', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="asal_sekolah">Asal Sekolah</label>
                                            <input type="text" name="asal_sekolah" value="<?= set_value('asal_sekolah') ?>" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                                            <?= form_error('asal_sekolah', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <input type="text" name="agama" value="<?= set_value('agama') ?>" class="form-control" id="agama" placeholder="Agama">
                                            <?= form_error('agama', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nisn">NISN</label>
                                            <input type="number" name="nisn" value="<?= set_value('nisn') ?>" class="form-control" id="nisn" placeholder="NISN">
                                            <?= form_error('nisn', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_ayah">Nama Ayah</label>
                                            <input type="text" name="nama_ayah" value="<?= set_value('nama_ayah') ?>" class="form-control" id="nama_ayah" placeholder="Nama Ayah">
                                            <?= form_error('nama_ayah', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_ibu">Nama Ibu</label>
                                            <input type="text" name="nama_ibu" value="<?= set_value('nama_ibu') ?>" class="form-control" id="nama_ibu" placeholder="Nama Ibu">
                                            <?= form_error('nama_ibu', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_orangtua">Nomor Hp Orangtua</label>
                                            <input type="number" name="no_orangtua" value="<?= set_value('no_orangtua') ?>" class="form-control" id="no_orangtua" placeholder="No Orang Tua">
                                            <?= form_error('no_orangtua', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alamat_orangtua">Alamat Orangtua</label>
                                            <input type="text" name="alamat_orangtua" value="<?= set_value('alamat_orangtua') ?>" class="form-control" id="alamat_orangtua" placeholder="Alamat Orang Tua">
                                            <?= form_error('alamat_orangtua', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" name="tambah" class="btn btn-success pull-right">Daftar</button>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>