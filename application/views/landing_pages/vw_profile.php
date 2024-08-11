<!---page Title --->
<section class="bg-img pt-150 pb-20" data-overlay="4" style="background-image: url(assets/images/front-end-img/background/bg10.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="page-title text-white" style="font-family: Elephant;">Profil Siswa Kursus Bahasa Inggris Pare AEC Man 2 Kuansing </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page content -->

<div class="container-full" style="width: 80%; margin: 0 auto;">
    <div class="row py-50 ">
        <div class="col-md-4">
            <?php foreach ($profil as $pro) : ?>
                <div class="card">
                    <img src="<?= base_url('assets/images/pengajar/') . $pro['gambar']; ?>">
                </div>
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/midgen1.jpg') ?>">
                </div>
            <?php endforeach ?>
        </div>
        <div class="col-md-8">
            <div class="card ">
                <div class="card-body ">
                    <h2 class="card-title" style="font-family: Elephant;">SEJARAH</h2>
                </div>

                <div class="card-footer justify-content-center">
                    <!-- <p style="text-indent: 30px; font-family: 'Times New Roman', Times, serif; font-size: 16px; text-align: justify;">
                        Dimulai di desa kecil, Beringin-Taluk, Kuantan Singingi, Riau.
                        MAN 1 Kuansing adalah sekolah yang mempopulerkan bahasa Inggris di masyarakat,
                        dipimpin oleh seorang pendiri, Drs. Zulkifli, M. Pd bersama rekan terbaiknya, Seprion, S. Ag., M. Pd.
                    </p> -->
                    <?php foreach ($profil as $pro) : ?>
                        <h6 style="text-indent: 30px; font-family: Arial; font-size: 16px; text-align: justify;">
                            <?= $pro['sejarah'] ?>
                        </h6>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-50 bg-img countnm-bx" style="background-image: url(assets/images/front-end-img/background/bg-3.jpg)" data-overlay="7" data-aos="fade-up">
    <div class="container-full" style="width: 80%; margin: 0 auto;">
        <div class="card-body text-center">
            <h2 class="card-title" style="font-family: Elephant; color: white;">VISI DAN MISI SMAN 1 Pangean</h2>
        </div>
        <div class="card-footer justify-content-center" style="display: flex; align-items: stretch;">
            <?php foreach ($profil as $pro) : ?>
                <div style="flex: 1; padding: 10px;">
                    <h3 style="font-family: Elephant; text-align: center; color: white;">Visi</h3>
                    <h2 style="text-indent: 30px; font-family: Arial; font-size: 25px; text-align: justify; color: white;">
                        <?= $pro['visi'] ?>
                    </h2>
                </div>
                <div style="width: 2px; background-color: #fff; margin: 0 20px;"></div>
                <div style="flex: 1; padding: 10px;">
                    <h3 style="font-family: Elephant; text-align: center; color: white;">Misi</h3>
                    <h2 style="font-family: Arial; font-size: 25px; text-align: justify; color: white;">
                        <?= $pro['misi'] ?>
                    </h2>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>