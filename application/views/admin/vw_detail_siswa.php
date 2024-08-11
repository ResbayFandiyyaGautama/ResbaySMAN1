<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header with-border">
                            <h2 class="card-title">Detail Data Pendaftaran Siswa</h2>
                        </div>
                        <div class="box-body" style="font-family: 'Times New Roman', Times, serif; font-size: 1.3em;">
                            <h2 style="font-family: Times New Roman"><?= $daftarsiswa['nama']; ?></h2>
                            <div class="row">
                                <div class="col-md-3">Asal Daerah</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-6"><?= $daftarsiswa['alamat_siswa']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">Tempat Lahir</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-6"><?= $daftarsiswa['tempat_lahir']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">Tanggal lahir</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-6"><?= date('d F Y', strtotime($daftarsiswa['tgl_lahir'])); ?></div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">Jenis Kelamin</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-6"><?= $daftarsiswa['jenis_kelamin']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">Agama</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-6"><?= $daftarsiswa['agama']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">Asal Sekolah</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-6"><?= $daftarsiswa['asal_sekolah']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">NISN</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-6"><?= $daftarsiswa['nisn']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">nama Ayah</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-6"><?= $daftarsiswa['nama_ayah']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">Nama Ibu</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-6"><?= $daftarsiswa['nama_ibu']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">Telepon Orangtua</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-6"><?= $daftarsiswa['no_orangtua']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">Alamat Orangtua</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-6"><?= $daftarsiswa['alamat_orangtua']; ?></div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('Daftarsiswa') ?>" class="waves-effect waves-light btn mb-5 bg-gradient-secondary">Tutup</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>