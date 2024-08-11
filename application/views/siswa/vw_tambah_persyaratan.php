<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Kelengkapan Dokumen Persyaratan</h3>
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
                <div class="col-12">
                    <div class="callout bg-temple-white">
                        <h3>Catatan!</h3>
                        <h5 style="font-family: Times new Roman;">- Sebelum mengupload persyaratan, pastikan persyaratan sudah lengkap.<br>
                            - Penguploatan persyaratan hanya bisa dilakukan sekali saja.<br>
                            - Jika terjadi kesalahan silahkan hubungi admin via whatsapp.</h5>
                    </div>
                    <?= $this->session->flashdata('message'); ?>

                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Lengkapilah Form Persyaratan Dengan Benar</h4>
                        </div>

                        <div class="box-body">
                            <form action="<?= base_url('persyaratan/tambah'); ?>" method="POST" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label for="surat_izin_sekolah" class="form-label">Surat Izin Dari Sekolah</label>
                                    <input class="form-control" type="file" name="surat_izin_sekolah" id="surat_izin_sekolah">
                                </div>

                                <div class="mb-3">
                                    <label for="surat_pernyataan" class="form-label">Surat Pernyataan</label>
                                    <input class="form-control" type="file" name="surat_pernyataan" id="surat_pernyataan">
                                </div>

                                <div class="mb-3">
                                    <label for="surat_kesehatan" class="form-label">Surat Kesehatan</label>
                                    <input class="form-control" type="file" name="surat_kesehatan" id="surat_kesehatan">
                                </div>

                                <div class="mb-3">
                                    <label for="kartu_pelajar" class="form-label">Kartu Pelajar</label>
                                    <input class="form-control" type="file" name="kartu_pelajar" id="kartu_pelajar">
                                </div>

                                <div class="mb-3">
                                    <label for="kartu_keluarga" class="form-label">Kartu Keluarga</label>
                                    <input class="form-control" type="file" name="kartu_keluarga" id="kartu_keluarga">
                                </div>

                                <div class="mb-3">
                                    <label for="pas_foto" class="form-label">Pas Foto</label>
                                    <input class="form-control" type="file" name="pas_foto" id="pas_foto">
                                </div>

                                <button type="submit" name="tambah" class="btn btn-success pull-right">Upload</button>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>