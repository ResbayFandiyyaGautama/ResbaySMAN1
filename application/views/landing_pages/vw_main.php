<section class="bg-img pt-150 pb-200" style="background-image: url(assets/images/front-end-img/banners/bgfix11.png); background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-50">
                <div class="text-left mt-30">
                    <h1 class="box-title text-white mb-30" style="font-family: Elephant;">Selamat Datang Di</h1>
                </div>
                <div class="text-left mt-40">
                    <h1 class="box-title mb-30" style="font-family: Elephant; color: #800000;">Siswa Kursus Bahasa Inggris Pare AEC<br> SMAN 1 Pangean</h1>
                </div>
                <div class="text-left">
                    <h5 class="box-title text-white" style="font-family: Arial;">Peningkatan Kemampuan Berbicara, Peningkatan Kosakata dan Tata Bahasa<br>Persiapan Ujian Bahasa Inggris, Kepercayaan Diri, Jaringan Sosial.</h5>
                </div>

                <!-- <div class="text-left mt-30 " style="font-family: segoe ui black;">
                    <a href="Auth/register" class="btn btn-primary">DAFTAR SEKARANG</a>
                </div> -->

                <?php foreach ($tgl as $tl) : ?>
                    <?php if (isset($tl['tgl_buka'])) : ?>
                        <div class="text-left mt-30 " style="font-family: segoe ui black;">
                            <a href="Auth/register" class="btn btn-primary">DAFTAR SEKARANG</a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>

<section class="py-50 bg-white" data-overlay="1" data-aos="fade-up" style="background-image: url(assets/images/front-end-img/background/bg-1.jpg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 col-12 mt-30 mt-md-3">
                <img class="box-img-top btrr-5 btlr-5" src="assets/images/pareaec2.png" alt="Card image cap">
            </div>
            <div class="col-md-4 col-12 mt-30 mt-md-3">
                <img class="box-img-top btrr-5 btlr-5" src="assets/images/man2kuansing.png" alt="Card image cap">
            </div>
        </div>
    </div>
</section>

<section class="py-30" data-aos="fade-right">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h2 class="mb-10" style="font-family: Elephant;">Siswa Kursus Bahasa Inggris Website</h2>
                <?php foreach ($pendaftaran as $us) : ?>
                    <p class="fs-16" style="text-align: justify;" style="font-family: Arial;">
                        <?= $us['deskripsi_web'] ?>
                    </p>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>

<section class="py-30" data-overlay="7" data-aos="fade-left" style="background-image: url('assets/images/front-end-img/background/bg-1.jpg')">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <?php foreach ($review as $re) : ?>
                    <div class="item">
                        <div class="d-lg-flex">
                            <div class="position-relative w-lg-300">
                                <div class="rounded-circle-container">
                                    <div class="rounded-circle overflow-hidden" style="width: 250px; height: 250px; background-image: url('<?= base_url('assets/images/pengajar/') . $re['gambar']; ?>'); background-size: cover; background-position: center;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title mt-0" style="font-family: Elephant; color: white;"><?= $re['nama_alumni'] ?></h3>
                                <h4 class="card-text" style="font-family: Arial; color: white;"><?= $re['generasi'] ?></h4>
                                <h6 class="card-text" style="font-family: Arial; text-indent: 50px; text-align: justify; color: white;">
                                    <?= $re['review'] ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<style>
    .rounded-circle-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 250px;
    }

    .rounded-circle {
        border-radius: 50%;
    }
</style>

<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
        });
    });
</script>

<section class="py-50" data-aos="fade-down">
    <div class="container">
        <div class="row justify-content-center">

            <?php foreach ($tgl as $tl) : ?>
                <h1 class="mb-15 text-center" style="font-family: Elephant;"><?= $tl['judul'] ?></h1>

                <div class="col-md-5 col-12 mt-30 mt-md-0">
                    <div class="box box-body p-20 text-center" style="background-color: #E8123A">
                        <h2 class="box-title text-white" style="font-family: Elephant;">Pendaftaran Di buka</h2>
                        <h3 style="font-family: Arial; color: white"><?= date('d F Y', strtotime($tl['tgl_buka'])); ?></h3>
                    </div>
                </div>
                <div class="col-md-5 col-12 mt-30 mt-md-0">
                    <div class="box box-body p-20 text-center" style="background-color: #E8123A">
                        <h2 class="box-title text-white" style="font-family: Elephant; ">Pendaftaran Di Tutup</h2>
                        <h3 style="font-family: Arial; color: white"><?= date('d F Y', strtotime($tl['tgl_tutup'])); ?></h3>
                    </div>
                </div>
            <?php endforeach ?>

            <h1 class="mb-15 text-center" style="font-family: Elephant;">Periode Pelaksanaan</h1>
            <?php foreach ($pendaftaran as $us) : ?>
                <div class="col-md-5 col-12 mt-30 mt-md-0">
                    <div class="box box-body p-20 text-center" style="background-color: #E8123A">
                        <h2 class="box-title text-white" style="font-family: Elephant;">Periode Pertama</h2>
                        <h3 style="font-family: Arial; color: white"><?= $us['periode_satu'] ?></h3>
                    </div>
                </div>
                <div class="col-md-5 col-12 mt-30 mt-md-0">
                    <div class="box box-body p-20 text-center" style="background-color: #E8123A">
                        <h2 class="box-title text-white" style="font-family: Elephant; ">Periode Kedua</h2>
                        <h3 style="font-family: Arial; color: white"><?= $us['periode_dua'] ?></h3>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!-- <section data-aos="fade-down">
    <div class="container">
        <div class="row justify-content-center">

        </div>
    </div>
</section> -->

<section class="py-50" data-overlay="7" data-aos="fade-down" style="background-image: url(assets/images/front-end-img/background/bg-1.jpg)">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="mb-15 text-center" style="font-family: Elephant; color: white;">Materi Pembelajaran Kelas Camp</h1>

            <?php
            $colors = ['#701c2b', '#1c4c70', '#1c7047', '#706d1c', '#a15872', '#a19d58', '#58a185', '#753619'];
            $index = 0;
            foreach ($materi as $ma) : ?>
                <div class="col-md-4 col-12 mt-30 mt-md-0">
                    <div class="box box-body p-20 text-center" style="background-color: <?= $colors[$index % count($colors)]; ?>;">
                        <h4 class="box-title text-white" style="font-family: Elephant;"><?= $ma['materi_pembelajaran'] ?></h4>
                    </div>
                </div>
                <?php $index++; ?>
            <?php endforeach ?>

            <!-- <div class="col-md-3 col-12 mt-30 mt-md-0">
                <div class="box box-body p-20 text-center" style="background-color: #701c2b">
                    <h4 class="box-title text-white" style="font-family: Elephant;"> SPEAKING</h4>
                </div>
            </div> -->

        </div>
    </div>
</section>

<section class="py-50 bg-white" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">

                <h2 class="mb-15" style="font-family: Elephant;">Tonton Kami di YouTube</h2>
                <?php foreach ($media as $me) : ?>
                    <a class="media media-single box-shadowed bg-white pull-up mb-15" href="<?= $me['link'] ?>">
                        <img class="w-80 rounded ms-0" src="<?= base_url('assets/images/pengajar/') . $me['gambar']; ?>">
                        <div class="media-body fw-500">
                            <h5 class="overflow-hidden text-overflow-h nowrap" style="font-family: Arial;"><?= $me['judul'] ?></h5>
                            <small class="text-fade" style="font-family: Arial;"><?= $me['aktor'] ?></small>
                            <p><small class="text-fade mt-10" style="font-family: Arial;"><?= $me['status'] ?></small></p>
                        </div>
                    </a>
                <?php endforeach ?>
            </div>
            <div class="col-lg-5 col-12 position-relative">
                <div class="popup-vdo mt-30 mt-md-0">
                    <img src="assets/images/front-end-img/yt.jpg" class="img-fluid rounded" alt="">
                    <a href="https://youtu.be/W9IXDLdXkzo?si=QipLfflGGnxDJ33W" class="popup-youtube play-vdo-bt waves-effect waves-circle btn btn-circle btn-primary btn-lg"><i class="mdi mdi-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>