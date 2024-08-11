<section class="bg-img pt-150 pb-20" data-overlay="9" style="background-image: url(assets/images/front-end-img/background/bg11.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="page-title text-white" style="font-family: Elephant;">Detail Profil </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-full" style="width: 80%; margin: 0 auto;">
    <div class="row py-50 ">
        <div class="col-md-4">
            <div class="card">
                <img src="<?= base_url('assets/images/pengajar/') . $pengajar['gambar']; ?>" class="card-img" alt="User Image">
            </div>
        </div>
        <div class="col-md-8">
            <div class="card ">
                <div class="card-body ">
                    <h2 class="card-title" style="font-family: Elephant;"><?= $pengajar['nama_pengajar']; ?></h2>
                    <h4 class="card-title" style="font-family: arial;"><?= $pengajar['jabatan']; ?></h4>

                    <div class="row" style="font-family: Arial;">
                        <div class="col-md-3">Tanggal Lahir</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6">
                            <td><?= date('d F Y', strtotime($pengajar['tgl_lahir'])); ?></td>
                        </div>
                    </div>
                    <div class="row" style="font-family: Arial;">
                        <div class="col-md-3">Jenis kelamin</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6"><?= $pengajar['jenis_kelamin']; ?></div>
                    </div>
                    <div class="row" style="font-family: Arial;">
                        <div class="col-md-3">Agama</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6"><?= $pengajar['agama']; ?></div>
                    </div>
                    <div class="row" style="font-family: Arial;">
                        <div class="col-md-3">Alamat</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6"><?= $pengajar['alamat']; ?></div>
                    </div>

                </div>
                <div class="card-footer">
                    <a href="<?= base_url('Ldppengajar') ?>" class="waves-effect waves-light btn mb-5 bg-gradient-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>