<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('assets/') ?>images/man2kuansing.png">

    <title>Siswa Kursus Bahasa Inggris</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>main/css/vendors_css.css">
    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>


    <!-- Style-->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>main/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>main/css/skin_color.css">
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
                    <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </a>
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- logo-->
                    <div class="logo-lg" style="width: 100px; height: 100px;">
                        <span class="light-logo"><img src="<?= base_url('assets/') ?>images/pareaec.png" alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item d-md-none">
                            <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
                                <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side ">
                    <ul class="nav navbar-nav">

                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a class="waves-effect waves-light nav-link full-screen" style="width: 100%; font-size: 16px;">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 large"><?= $user['nama']; ?></span>
                            </a>
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="User">
                                <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                            <!-- <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="ti-lock text-muted me-2"></i> Logout</a>
                                </li>
                            </ul> -->
                        </li>

                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
                                <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <?php
                            if ($user['role'] == 'Admin') { ?>
                                <li class="header">Dashboard </li>
                                <li class="treeview">
                                <li><a href="<?= base_url('Admin') ?>">
                                        <i class="glyphicon glyphicon-th-large"></i>
                                        <span>Dashboard</span>
                                    </a></li>
                                </li>

                                <li class="header">Menu</li>
                                <li class="treeview">
                                <li><a href="<?= base_url('Daftarsiswa') ?>">
                                        <i class="fa fa-address-book"></i>
                                        <span>Daftar Siswa</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Daftarsyarat') ?>">
                                        <i class="glyphicon glyphicon-th-list"></i>
                                        <span>Daftar Syarat</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Pengajar') ?>">
                                        <i class="fa fa-address-book-o"></i>
                                        <span>Daftar Pengajar</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Info_pendaftaran') ?>">
                                        <i class="glyphicon glyphicon-info-sign"></i>
                                        <span>Info Periode</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Tanggal_daftar') ?>">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                        <span>Tanggal Pendaftaran</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                    <a href="#">
                                        <i class="glyphicon glyphicon-list-alt"></i>
                                        <span>Detail</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?= base_url('Profil_englishcamp') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Profil Siswa Kursus Bahasa Inggris</a></li>
                                        <li><a href="<?= base_url('Fasilitas_englishcamp') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fasilitas Siswa Kursus Bahasa Inggris</a></li>
                                        <li><a href="<?= base_url('Info_pendaftaran/materi') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Materi Pembelajaran</a></li>
                                        <li><a href="<?= base_url('Dokumentasi_englishcamp') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dokumentasi</a></li>
                                        <li><a href="<?= base_url('Lokasi_englishcamp') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Kontak dan Lokasi</a></li>
                                        <li><a href="<?= base_url('Review_alumni') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Review Alumni</a></li>
                                        <li><a href="<?= base_url('Media_youtube') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Media Youtube</a></li>
                                    </ul>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Auth/logout') ?>">
                                        <i class="fa fa-sign-out"></i>
                                        <span>Log Out</span>
                                    </a></li>
                                </li>

                            <?php } elseif ($user['role'] == 'Bendahara') { ?>

                                <li class="header">Dashboard </li>
                                <li class="treeview">
                                <li><a href="<?= base_url('Bendahara') ?>">
                                        <i class="glyphicon glyphicon-th-large"></i>
                                        <span>Dashboard</span>
                                    </a></li>
                                </li>

                                <li class="header">Menu </li>
                                <li class="treeview">
                                <li><a href="<?= base_url('Pembayaran_daftar') ?>">
                                        <i class="glyphicon glyphicon-edit"></i>
                                        <span>Daftar</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Pembayaran_bulanan') ?>">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                        <span>Bulanan / Ujian</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Pembayaran_bulanan/midleexam') ?>">
                                        <i class="glyphicon glyphicon-align-center"></i>
                                        <span>Midle Exam</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Pembayaran_bulanan/finalexam') ?>">
                                        <i class="glyphicon glyphicon-align-justify"></i>
                                        <span>Final Exam</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Detail_biaya') ?>">
                                        <i class="glyphicon glyphicon-usd"></i>
                                        <span>Detail Biaya Daftar</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Detail_bulanan') ?>">
                                        <i class="fa fa-dollar"></i>
                                        <span>Detail Bulanan / Ujian</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Auth/logout') ?>">
                                        <i class="fa fa-sign-out"></i>
                                        <span>Log Out</span>
                                    </a></li>
                                </li>
                            <?php } else {
                            ?>
                                <li class="header">Dashboard</li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Siswa') ?>">
                                        <i class="glyphicon glyphicon-th-large"></i>
                                        <span>Dashboard</span>
                                    </a></li>
                                </li>

                                <li class="header">Menu</li>
                                <li class="treeview">
                                <li><a href="<?= base_url('Pendaftaran') ?>">
                                        <i class="glyphicon glyphicon-edit"></i>
                                        <span>Daftar</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Persyaratan') ?>">
                                        <i class="glyphicon glyphicon-file"></i>
                                        <span>Syarat</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Status_pendaftaran') ?>">
                                        <i class="glyphicon glyphicon-check"></i>
                                        <span>Status</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Pembayaran') ?>">
                                        <i class="fa fa-money"></i>
                                        <span>Bayar</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Pembayaran_lain') ?>">
                                        <i class="fa fa-dollar"></i>
                                        <span>Pembayaran Lain</span>
                                    </a></li>
                                </li>

                                <li class="treeview">
                                <li><a href="<?= base_url('Auth/logout') ?>">
                                        <i class="fa fa-sign-out"></i>
                                        <span>Log Out</span>
                                    </a></li>
                                </li>

                            <?php }
                            ?>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- <div class="sidebar-footer">
                <a href="<?= base_url('assets/') ?>javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Settings"><span class="icon-Settings-2"></span></a>
                <a href="<?= base_url('assets/') ?>mailbox.html" class="link" data-bs-toggle="tooltip" title="Email"><span class="icon-Mail"></span></a>
                <a href="<?= base_url('assets/') ?>javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
            </div> -->
        </aside>