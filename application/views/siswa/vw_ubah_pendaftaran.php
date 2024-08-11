<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Data Pendaftaran</h3>
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
                    <?= $this->session->flashdata('message'); ?>
                    <div class="callout bg-brick-white">
                        <h3>Informasi</h3>
                        <h5 style="font-family: Times new Roman;">Setelah mengisi data pada form pendaftaran, Selanjutnya silahkan upload persyaratan yang diminta.<br>
                            Jika tidak melakukan upload persyaratan, maka secara otomatis siswa tidak akan diterima, karna tidak menyelesaikan proses administrasi.</h5>
                    </div>
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Form Data Pendaftaran</h4>
                        </div>
                        <div class="box-body">
                            <!-- <input type="hidden" name="id_pendaftar" value="<?= $daftar['id_pendaftar']; ?>"> -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama_siswa">Nama Siswa</label>
                                        <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" disabled value="<?= $daftar['nama']; ?>">
                                        <?= form_error('nama_siswa', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" disabled value="<?= $daftar['jenis_kelamin']; ?>">
                                        <?= form_error('jenis_kelamin', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alamat_siswa">Alamat Siswa</label>
                                        <input type="text" name="alamat_siswa" class="form-control" id="alamat_siswa" disabled value="<?= $daftar['alamat_siswa']; ?>">
                                        <?= form_error('alamat_siswa', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="asal_sekolah">Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" disabled value="<?= $daftar['asal_sekolah']; ?>">
                                        <?= form_error('asal_sekolah', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" disabled value="<?= $daftar['tempat_lahir']; ?>">
                                        <?= form_error('tempat_lahir', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" disabled value="<?= $daftar['tgl_lahir']; ?>">
                                        <?= form_error('tgl_lahir', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <input type="text" name="agama" class="form-control" id="agama" disabled value="<?= $daftar['agama']; ?>">
                                        <?= form_error('agama', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nisn">NISN</label>
                                        <input type="text" name="nisn" class="form-control" id="nisn" disabled value="<?= $daftar['nisn']; ?>">
                                        <?= form_error('nisn', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama_ayah">Nama Ayah</label>
                                        <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" disabled value="<?= $daftar['nama_ayah']; ?>">
                                        <?= form_error('nama_ayah', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama_ibu">Nama Ibu</label>
                                        <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" disabled value="<?= $daftar['nama_ibu']; ?>">
                                        <?= form_error('nama_ibu', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="no_orangtua">No Orangtua</label>
                                        <input type="text" name="no_orangtua" class="form-control" id="no_orangtua" disabled value="<?= $daftar['no_orangtua']; ?>">
                                        <?= form_error('no_orangtua', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alamat_orangtua">Alamat Orangtua</label>
                                        <input type="text" name="alamat_orangtua" class="form-control" id="alamat_orangtua" disabled value="<?= $daftar['alamat_orangtua']; ?> ">
                                        <?= form_error('alamat_orangtua', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>