<!---page Title --->
<section class="bg-img pt-150 pb-20" style="background-image: url(assets/images/front-end-img/background/bg11.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="page-title text-white" style="font-family: Elephant;">Profil Pimpinan dan Pengajar Siswa Kursus Bahasa Inggris Man 2 Kuansing</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Page content -->
<div class="content-wrapper">
    <div class="container-full" style="width: 80%; margin: 0 auto;">
        <!-- Main content -->
        <section class="content py-50">
            <!-- START Card With Image -->
            <div class="row fx-element-overlay">

                <?php $i = 1; ?>
                <?php foreach ($pengajar as $us) : ?>
                    <div class="col-md-12 col-lg-4">
                        <div class="box">
                            <div class="fx-card-item">
                                <div class="fx-card-avatar fx-overlay-1">
                                    <img src="<?= base_url('assets/images/pengajar/') . $us['gambar']; ?>" alt="user">
                                    <div class="fx-overlay scrl-dwn">
                                        <ul class="fx-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?= base_url('assets/images/pengajar/') . $us['gambar']; ?>"><i class="ion-search"></i></a></li>
                                            <li><a class="btn default btn-outline" href="<?= base_url('Ldppengajar/detail/') . $us['id']; ?>"><i class="ion-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fx-card-content">
                                    <h3 style="font-family: Elephant;"> <?= $us['nama_pengajar'] ?></h3> <small style="font-family: arial;"><?= $us['jabatan'] ?></small>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <!-- /.row -->
            <!-- END Card with image -->
        </section>
        <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->