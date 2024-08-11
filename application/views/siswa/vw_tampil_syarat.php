<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Dokumen Persyaratan Yang Sudah di Upload</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Forms</li>
                                <li class="breadcrumb-item active" aria-current="page">General Form Elements</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <?= $this->session->flashdata('message'); ?>
                <div class="col-12">

                    <div class="callout bg-brick-white">
                        <h3>Informasi</h3>
                        <h5 style="font-family: Times new Roman;">Setelah melakukan pendaftaran dan upload persyaratan, Silahkan tunggu konfirmasi admin.<br>
                            Waktu konfirmasi admin hingga batas pendaftaran, Silahkan akses halaman status secara berkala untuk melihat status penerimaan.</h5>
                    </div>

                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Dokumen Persyaratan Yang Sudah di Upload</h4>
                        </div>

                        <div class="box-body">
                            <div class="row">
                                <?php
                                // Array file yang perlu ditampilkan
                                $files = [
                                    'surat_izin_sekolah',
                                    'surat_kesehatan',
                                    'surat_pernyataan',
                                    'kartu_pelajar',
                                    'kartu_keluarga',
                                    'pas_foto'
                                ];

                                foreach ($files as $file) :
                                    // Mendapatkan ekstensi file
                                    $file_extension = pathinfo($syarat[$file], PATHINFO_EXTENSION);
                                ?>
                                    <div class="col-md-4 col-sm-6 mb-3">
                                        <div class="card" style="width: 100%; height: 300px; overflow: hidden;">
                                            <?php if ($file_extension === 'pdf') : ?>
                                                <embed src="<?= base_url('assets/images/persyaratan/') . $syarat[$file]; ?>" type="application/pdf" width="100%" height="100%">
                                            <?php else : ?>
                                                <a href="<?= base_url('assets/images/persyaratan/') . $syarat[$file]; ?>" target="_blank">
                                                    <img src="<?= base_url('assets/images/persyaratan/') . $syarat[$file]; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>