<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <?php foreach ($tgl as $us) : ?>
                    <h3>Batas Waktu Administrasi</h3>
                    <div class="col-6">
                        <a class="box box-link-shadow text-center ">
                            <div class="box-body py-15 bg-info-light px-5">
                                <h4 class="fw-600 text-info">Tanggal Buka</h4>
                            </div>
                            <div class="box-body">
                                <h3 class="countnm fs-13 m-0"><?= date('d F Y', strtotime($us['tgl_buka'])); ?></h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a class="box box-link-shadow text-center">
                            <div class="box-body py-15 bg-danger-light px-5">
                                <h4 class="fw-600 text-danger">Tanggal Tutup</h4>
                            </div>
                            <div class="box-body">
                                <h3 class="countnm fs-13 m-0" style="color: red"><?= date('d F Y', strtotime($us['tgl_tutup'])); ?></h3>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>

            <div class="row">
                <h3><?php echo $judul; ?></h3>

                <?php if ($status['status'] == "DIPROSES") : ?>
                    <div class="col-12">
                        <div class="box overflow-hidden ">
                            <div class="box-body pe-0 ps-lg-50 ps-15 py-0" style="background-color: gray;">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h3 class="fs-13 text-white text-center">DIPROSES</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php elseif ($status['status'] == "DITERIMA") : ?>
                    <div class="col-12">
                        <div class="box overflow-hidden ">
                            <div class="box-body pe-0 ps-lg-50 ps-15 py-0" style="background-color: green;">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h3 class="fs-13 text-white text-center">DITERIMA</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="col-12">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body pe-0 ps-lg-50 ps-15 py-0" style="background-color: red;">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h3 class="fs-13 text-white text-center">DITOLAK</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- <h3>Informasi Administrasi Anda</h3>
            <div class="box">
                <div class="box-header no-border">
                    <?php if (isset($daftar['asal_sekolah'])) : ?>
                        <h4 class="box-title text-left" style="color: green;"><i class="glyphicon glyphicon-ok"></i> Pendaftaran Berhasil Dilakukan</h4><br>
                    <?php else : ?>
                        <h4 class="box-title text-left" style="color: red;"><i class="glyphicon glyphicon-remove"></i> Mohon maaf anda belum melakukan pendaftaran, Silahkan klik menu <a href="<?= base_url('Pendaftaran'); ?>" class="text-danger">Daftar</a></h4><br>
                    <?php endif; ?>
                </div>

                <div class="box-header border">
                    <?php if (isset($syarat['kartu_pelajar'])) : ?>
                        <h4 class="box-title text-left" style="color: green;"><i class="glyphicon glyphicon-ok"></i> Persyaratan Behasil Diupload</h4><br>
                    <?php else : ?>
                        <h4 class="box-title text-left" style="color: red;"><i class="glyphicon glyphicon-remove"></i> Mohon maaf anda belum melengkapi persyaratan, Silahkan klik menu <a href="<?= base_url('Persyaratan'); ?>" class="text-danger">Syarat</a></h4><br>
                    <?php endif; ?>
                </div>

                <div class="box-header border">
                    <?php if (isset($bayar['gross_amount'])) : ?>
                        <h4 class="box-title text-left" style="color: green;"><i class="glyphicon glyphicon-ok"></i> Pembayaran Berhasil Dilakukan</h4><br>
                    <?php else : ?>
                        <h4 class="box-title text-left" style="color: red;"><i class="glyphicon glyphicon-remove"></i> Mohon maaf anda belum melakukan pembayaran, Silahkan klik menu <a href="<?= base_url('Pembayaran'); ?>" class="text-danger">Bayar</a></h4>
                    <?php endif; ?>
                </div>
            </div> -->

            <h3>Informasi Administrasi Anda</h3>
            <div class="row">

                <?php if (isset($daftar['asal_sekolah'])) : ?>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h5 class="box-title" style="color: #5c5c3d;">Pendaftaran Berhasil Dilakukan</h5>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                    </div>
                                    <div class="col-auto">
                                        <lord-icon src="https://cdn.lordicon.com/guqkthkk.json" trigger="hover" style="width:40px;height:40px"></lord-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h5 class="box-title" style="color: #5c5c3d;">Lengkapi Data Pendaftaran</h5>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="<?= base_url('Pendaftaran'); ?>" class="btn btn-danger">Daftar</a></div>
                                    </div>
                                    <div class="col-auto">
                                        <lord-icon src="https://cdn.lordicon.com/jxzkkoed.json" trigger="hover" colors="primary:#121331,secondary:#ffc738,tertiary:#e83a30" style="width:55px;height:55px"></lord-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (isset($syarat['kartu_pelajar'])) : ?>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h5 class="box-title" style="color: #5c5c3d;">Persyaratan Berhasil Diupload</h5>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                    </div>
                                    <div class="col-auto">
                                        <lord-icon src="https://cdn.lordicon.com/guqkthkk.json" trigger="hover" style="width:40px;height:40px"></lord-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <?php else : ?>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h5 class="box-title" style="color: #5c5c3d;">Lengkapi Data Persyaratan</h5>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Persyaratan'); ?>" class="btn btn-danger">Syarat</a></div>
                                    </div>
                                    <div class="col-auto">
                                        <lord-icon src="https://cdn.lordicon.com/jxzkkoed.json" trigger="hover" colors="primary:#121331,secondary:#ffc738,tertiary:#e83a30" style="width:55px;height:55px"></lord-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (isset($bayar['gross_amount'])) : ?>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h5 class="box-title" style="color: #5c5c3d;">Pembayaran Berhasil</h5>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                    </div>
                                    <div class="col-auto">
                                        <lord-icon src="https://cdn.lordicon.com/guqkthkk.json" trigger="hover" style="width:40px;height:40px"></lord-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h5 class="box-title" style="color: #5c5c3d;">Lakukan Pembayaran</h5>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Pembayaran'); ?>" class="btn btn-danger">Bayar</a></div>
                                    </div>
                                    <div class="col-auto">
                                        <lord-icon src="https://cdn.lordicon.com/jxzkkoed.json" trigger="hover" colors="primary:#121331,secondary:#ffc738,tertiary:#e83a30" style="width:55px;height:55px"></lord-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>