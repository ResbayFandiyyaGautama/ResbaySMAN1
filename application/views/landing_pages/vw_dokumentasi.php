<section class="bg-img pt-150 pb-20" data-overlay="2" style="background-image: url(assets/images/front-end-img/background/bg12.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="page-title text-white" style="font-family: Elephant;">Dokumentasi Siswa Kursus Bahasa Inggris Pare AEC Man 2 Kuansing </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<?php foreach ($dokumentasi as $index => $dok) : ?>
    <?php if ($index % 2 == 0) : ?>
        <!-- Tampilan 1 -->
        <section data-aos="fade-left">
            <div class="container-full" style="width: 80%; margin: 0 auto;">
                <div class="row py-50">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= base_url('assets/images/pengajar/') . $dok['gambar']; ?>">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title" style="font-family: Elephant;"><?= $dok['judul'] ?></h2>
                            </div>
                            <div class="card-footer justify-content-center">
                                <h2 style="text-indent: 30px; font-size: 16px; text-align: justify;">
                                    <?= $dok['deskripsi'] ?>
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
                            <h2 style="font-family: Elephant; color: white;"><?= $dok['judul'] ?></h2>
                            <hr style="color: white;"><br>
                            <h2 style="text-indent: 30px;  font-size: 16px; text-align: justify; color: white;">
                                <?= $dok['deskripsi'] ?>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= base_url('assets/images/pengajar/') . $dok['gambar']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endforeach; ?>

<!-- <div class="container-full" style="width: 80%; margin: 0 auto;">
    <div class="row py-50 ">
        <div class="col-md-4">
            <div class="card">
                <img src="<?= base_url('assets/images/front-end-img/pengangkatan.jpg')  ?>">
            </div>
        </div>
        <div class="col-md-8">
            <div class="card ">
                <div class="card-body ">
                    <h2 class="card-title" style="font-family: Elephant;">Siswa Kursus Bahasa Inggris VALIDATION OF FIRST GENERATION OF SMAN 1 Pangean</h2>
                </div>

                <div class="card-footer justify-content-center">
                    <p style="text-indent: 30px; font-family: 'Times New Roman', Times, serif; font-size: 16px; text-align: justify;">
                        Acara pengangkatan generasi pertama program unggulan SMAN 1 Pangean yang di
                        laksankan pada tanggal 18 agustus 2018 yang langsung di hadiri oleh kepala kantor urusan
                        agama kuantan singing, Camat pangean, coordinator wilayah / pendidikan pangean, KUA
                        Pangean kepala MAN 1 kuantan singing, tokoh masyarakat dan kepala MAN 2 Kuansing.
                        (Sebanyak 23 siswa siswi).
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-50 bg-img countnm-bx" style="background-image: url(assets/images/front-end-img/background/bg-3.jpg)" data-overlay="5" data-aos="fade-up">
    <div class="container-full" style="width: 80%; margin: 0 auto;">
        <div class="card ">
            <div class="card-body text-center">
                <h2 class="card-title" style="font-family: Elephant;">ROLEPLAY Siswa Kursus Bahasa Inggris SMAN 1 Pangean EVERY WEEK</h2>
            </div>
            <div class="card-footer justify-content-center">
                <p style="text-indent: 30px; font-family: 'Times New Roman', Times, serif; font-size: 16px; text-align: justify;">
                    Kegiatan roleplay ini dilakukan setiap minggu di hari kamis, roleplay ini diadakan untuk mengasahah kemampuan
                    soft skill siswa dan siswi. Pada kegiatan roleplay ini siswa dan siswi akan menampilkan sesuatu yang bagus, ada
                    yang menampilkan drama, menyanyi, pidato, dance, memainkan alat musik dan lainnya yang dimana semua aktifitas nya
                    harus menggunakan bahasa inggris.
                </p>
            </div>
        </div>
        <div class="row py-10">
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/roleplay1.jpg')  ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/roleplay2.jpg')  ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/roleplay6.jpg')  ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-up">
    <div class="container-full" style="width: 80%; margin: 0 auto;">
        <div class="row py-50 ">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-body ">
                        <h2 class="card-title" style="font-family: Elephant;">MAN SIMALUNGUN NORTH SUMATRA JOINS Siswa Kursus Bahasa Inggris SMAN 1 Pangean</h2>
                    </div>

                    <div class="card-footer justify-content-center">
                        <p style="text-indent: 30px; font-family: 'Times New Roman', Times, serif; font-size: 16px; text-align: justify;">
                            Man Simalungun yang berasal dari sumatra utara melakukan kerja sama dengan SMAN 1 Pangean dalam meningkatkan
                            bahasa inggris, mereka mengirimkan siswa dan siswinya untuk belajar bahasa inggris di Siswa Kursus Bahasa Inggris Man 2 Kuantan
                            Singingi. Seiring berjalannya waktu, banyak sekolah-sekolah lain yang mengirimkan siswa dan siswinya untuk
                            belajar bahasa inggris ke Man 2 Kuansing.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/simalungun.jpg')  ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-50 bg-img countnm-bx" style="background-image: url(assets/images/front-end-img/background/bg-3.jpg)" data-overlay="5" data-aos="fade-up">
    <div class="container-full" style="width: 80%; margin: 0 auto;">
        <div class="card ">
            <div class="card-body text-center">
                <h2 class="card-title" style="font-family: Elephant;">CAMP CUP Siswa Kursus Bahasa Inggris SMAN 1 Pangean EVERY YEAR</h2>
            </div>
            <div class="card-footer justify-content-center">
                <p style="text-indent: 30px; font-family: 'Times New Roman', Times, serif; font-size: 16px; text-align: justify;">
                    Camp cup ini merupakan pertandingan beberapa jenis olahraga, pertadingan yang diadakan yaitu ada Volley Ball, Badminton, Futsal,
                    Makan Kerupuk, Tarek Tambang, Menyanyi dan Pidato Bahasa Inggris. Camp cup ini pesertanya adalah siswa dan siswi yang pernah belajar
                    di Siswa Kursus Bahasa Inggris SMAN 1 Pangean, siswa dan siswinya akan mewakili generasinya pada saat berada di Siswa Kursus Bahasa Inggris.
                    Hadiah yang mendapat juara di camp cup ini berupa piala, sertifikat dan uang tunai.

                </p>
            </div>
        </div>
        <div class="row py-10">
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/campcup3.jpg')  ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/campcup6.jpg')  ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/campcup2.jpg')  ?>">
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="py-50" data-aos="fade-up">
    <div class="container-full" style="width: 80%; margin: 0 auto;">
        <div class="card ">
            <div class="card-body text-center">
                <h2 class="card-title" style="font-family: Elephant;">THE EXAM OF FINAL RESEARCH PAPER Siswa Kursus Bahasa Inggris SMAN 1 Pangean</h2>
            </div>
            <div class="card-footer justify-content-center">
                <p style="text-indent: 30px; font-family: 'Times New Roman', Times, serif; font-size: 16px; text-align: justify;">
                    Exam of Final Research Paper ini merupakan ujian yang dilakukan oleh siswa dan siswi setelah menjalani pembelajaran
                    bahasa inggris di Siswa Kursus Bahasa Inggris SMAN 1 Pangean selama 3 bulan. Mereka akan diuji oleh para dosen yang di datangkan
                    dari Universitas Riau, siswa dan siswi akan membuat sebuah makalah dalam bahasa inggris dengan mengangkat tema yang menarik.
                    Tema bisa saja tentang budaya, makanan tradisional, tradisi dan lainnya.
                </p>
            </div>
        </div>
        <div class="row py-10">
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/midex6.jpg')  ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/midex4.jpg')  ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/midex5.jpg')  ?>">
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="py-50 bg-img countnm-bx" style="background-image: url(assets/images/front-end-img/background/bg-3.jpg)" data-overlay="5" data-aos="fade-up">
    <div class="container-full" style="width: 80%; margin: 0 auto;">
        <div class="card ">
            <div class="card-body text-center">
                <h2 class="card-title" style="font-family: Elephant;">FINAL EXAM Siswa Kursus Bahasa Inggris SMAN 1 Pangean</h2>
            </div>
            <div class="card-footer justify-content-center">
                <p style="text-indent: 30px; font-family: 'Times New Roman', Times, serif; font-size: 16px; text-align: justify;">
                    Final Examination ini merupakan ujian lapangan yang dilakukan oleh siswa dan siswi setela belajar
                    di Siswa Kursus Bahasa Inggris SMAN 1 Pangean selama 6 bulan. Dari generasi pertama hingga saat ini, ujian lapangan
                    dilakulan di dalam dan luar negri. Ujian lapangan ini bertujuan untuk mengetes kemampuan bahasa inggris siswa dan siswi
                    kepada orang asing yang tentunya bule, siswa dan siswi akan didampingi oleh pengajar dan staf lainnya dalam ujian lapangan.
                </p>
            </div>
        </div>
        <div class="row py-10">
            <div class="col-md-3">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/lagoi3.jpg')  ?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/finex2.jpg')  ?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/finex4.jpg')  ?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/finex3.jpg')  ?>">
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="py-50" data-aos="fade-up">
    <div class="container-full" style="width: 80%; margin: 0 auto;">
        <div class="card ">
            <div class="card-body text-center">
                <h2 class="card-title" style="font-family: Elephant;">FAREWEL PARTY Siswa Kursus Bahasa Inggris SMAN 1 Pangean</h2>
            </div>
            <div class="card-footer justify-content-center">
                <p style="text-indent: 30px; font-family: 'Times New Roman', Times, serif; font-size: 16px; text-align: justify;">
                    Farewel Party merupakan puncak dari aktifitas dalam menjalani pembelajaran bahasa inggris di Siswa Kursus Bahasa Inggris Man 2
                    Kuantan Singingi, Dalam acara ini siswa dan siswi akan mendapatkan beberapa penghargaan dan sertifikat sebagai
                    tanda pernah bergabung di Siswa Kursus Bahasa Inggris. Acara ini akan dihadiri oleh tokoh-tokoh besar dan orang tua, Selanjutnya
                    siswa dan siswi akan dipulangkan ke rumah masing-masing dan berpisah dengan teman-teman camp, guru camp,
                    pembimbing camp, staf dan lainnya.
                </p>
            </div>
        </div>
        <div class="row py-10">
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/closing2.jpg')  ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/closing5.jpg')  ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/front-end-img/closing3.jpg')  ?>">
                </div>
            </div>
        </div>
    </div>
</section> -->