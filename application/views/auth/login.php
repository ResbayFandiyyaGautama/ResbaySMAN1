    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h4 class="text-primary" style="font-weight: bold;">Sistem Informasi Pendaftaran Generasi Baru</h4>
                                <p class="mb-0">Siswa Kursus Bahasa Inggris Pare AEC MAN 2 Kuansing</p>
                            </div>

                            <div class="d-flex align-items-center logo-box justify-content-center">
                                <div class="logo-lg" style="width: 150px; height: 100px;">
                                    <span class="light-logo"><img src="<?= base_url('assets/') ?>images/pareaec.png" alt="logo"></span>
                                </div>
                            </div>

                            <div class="p-40">
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            <input type="text" name="email" id="email" class="form-control ps-15 bg-transparent" value="<?= set_value('email'); ?>" placeholder="Masukkan Alamat Email">
                                        </div>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                            <input type="password" name="password" id="password" class="form-control ps-15 bg-transparent" value="<?= set_value('nama'); ?>" placeholder="Kata Sandi">
                                        </div>
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-danger mt-10">MASUK</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <p class="mt-15 mb-0">
                                        Kembali Kehalaman Utama ?
                                        <a href="<?= base_url('Welcome'); ?>" class="text-primary">Kembali</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>