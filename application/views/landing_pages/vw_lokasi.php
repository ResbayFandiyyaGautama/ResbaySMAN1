<!---page Title --->
<section class="bg-img pt-150 pb-20" style="background-image: url(assets/images/front-end-img/background/bg13.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="page-title text-white" style="font-family: Elephant;">Lokasi dan Kontak</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page content -->

<section class="py-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-12">
                <form class="contact-form">
                    <div class="row">
                        <img class="box-img-top btrr-5 btlr-5" src="assets/images/man2kuansing.png" alt="Card image cap">
                    </div>
                </form>
            </div>
            <div class="col-md-5 col-12 mt-30 mt-md-0">
                <div class="box box-body p-40 bg-dark mb-0">
                    <?php foreach ($lokasi as $loc) : ?>
                        <h2 class="box-title text-white" style="font-family: Elephant;">Info Kontak</h2>
                        <p style="text-align: justify; font-family: Arial;"> <?= $loc['info_lokasi'] ?> </p>
                        <div class="widget fs-18 my-20 py-20 by-1 border-light">
                            <ul class="list list-unstyled text-white-80">
                                <li class="ps-40" style="text-align: justify; font-family: Arial;"><i class="ti-location-pin"></i><?= $loc['nama_lokasi'] ?></li>
                                <li class="ps-40 my-20" style="font-family: Arial;"><i class="ti-mobile"></i><?= $loc['telepon'] ?></li>
                                <li class="ps-40" style="font-family: Arial;"><i class="ti-email"></i><?= $loc['email'] ?></li>
                            </ul>
                        </div>
                        <h4 class="mb-20" style="font-family: Arial;">Ikuti Kami</h4>
                        <ul class="list-unstyled d-flex gap-items-1">
                            <li><a href="https://www.facebook.com/man2kuansing" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/man_2_kuansing/" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC47VoUT_aGvnVCxvYJRuo9w" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-youtube"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15927.553352650036!2d101.4477793!3d0.5070677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2a47babd598929%3A0x7df4e6e9ada346fd!2sMAN%202%20Kuantan%20Singingi!5e0!3m2!1sen!2sin!4v1648992503171" class="map" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>