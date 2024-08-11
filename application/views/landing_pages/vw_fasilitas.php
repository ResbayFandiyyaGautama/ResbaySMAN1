<section class="bg-img pt-150 pb-20" data-overlay="2" style="background-image: url(assets/images/front-end-img/background/bg9.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="page-title text-white" style="font-family: Elephant;">Fasilitas Siswa Kursus Bahasa Inggris Pare AEC Man 2 Kuansing </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<?php foreach ($fasilitas as $index => $fa) : ?>
    <?php if ($index % 2 == 0) : ?>
        <!-- Tampilan 1 -->
        <section data-aos="fade-left">
            <div class="container-full" style="width: 80%; margin: 0 auto;">
                <div class="row py-50">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= base_url('assets/images/pengajar/') . $fa['gambar']; ?>">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title" style="font-family: Elephant;"><?= $fa['nama_fasilitas'] ?></h2>
                            </div>
                            <div class="card-footer justify-content-center">
                                <h2 style="text-indent: 30px; font-family: Arial; font-size: 16px; text-align: justify;">
                                    <?= $fa['deskripsi'] ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php else : ?>
        <!-- Tampilan 2 -->
        <section class="py-50 bg-img countnm-bx" style="background-image: url(assets/images/front-end-img/background/bg-3.jpg)" data-overlay="7" data-aos="fade-right">
            <div class="container-full" style="width: 80%; margin: 0 auto;">
                <div class="row py-10">
                    <div class="col-md-8">
                        <div class="card-footer justify-content-center">
                            <h2 style="font-family: Elephant; color: white;"><?= $fa['nama_fasilitas'] ?></h2>
                            <hr style="color: white;"><br>
                            <h2 style="text-indent: 30px; font-family: Arial; font-size: 16px; text-align: justify; color: white;">
                                <?= $fa['deskripsi'] ?>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= base_url('assets/images/pengajar/') . $fa['gambar']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endforeach; ?>