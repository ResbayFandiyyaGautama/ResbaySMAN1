<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header with-border">
                            <h2 class="card-title">Detail Data Persyaratan Siswa</h2>
                        </div>
                        <div class="box-body" style="font-family: 'Times New Roman', Times, serif; font-size: 1.3em;">

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
                        <div class="card-footer">
                            <a href="<?= base_url('Daftarsyarat') ?>" class="waves-effect waves-light btn mb-5 bg-gradient-secondary">Tutup</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>