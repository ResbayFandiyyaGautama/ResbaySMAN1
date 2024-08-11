<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <br><br>
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h4 class="box-title" style="color: #5c5c3d;">Jumlah Pendaftar</h4>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pendaftar ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <lord-icon src="https://cdn.lordicon.com/yycfqroo.json" trigger="hover" colors="primary:#121331,secondary:#000000,tertiary:#f9c9c0,quaternary:#f49cc8" style="width:55px;height:55px"></lord-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h4 class="box-title" style="color: chocolate;">Jumlah Pengajar</h4>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pengajar ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <lord-icon src="https://cdn.lordicon.com/zfmcashd.json" trigger="hover" style="width:55px;height:55px"></lord-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h4 class="box-title" style="color:  #00b8e6;">Jumlah Siswa Diproses</h4>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $diproses ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <lord-icon src="https://cdn.lordicon.com/afixdwmd.json" trigger="loop" state="loop-cycle" style="width:40px;height:40px"></lord-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-12">
                        <div class="box shadow ">
                            <div class="box-body">
                                <h4 class="box-title">Jenis Kelamin Siswa</h4>
                                <div>
                                    <canvas id="chartJenis" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h4 class="box-title" style="color: #00b300;">Jumlah Siswa Diterima</h4>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $diterima ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <lord-icon src="https://cdn.lordicon.com/guqkthkk.json" trigger="hover" style="width:40px;height:40px"></lord-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h4 class="box-title" style="color: Red;">Jumlah Siswa Ditolak</h4>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ditolak ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <lord-icon src="https://cdn.lordicon.com/jqnbdcqr.json" trigger="hover" style="width:40px;height:40px">
                                        </lord-icon>
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