<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Tambah Materi Pembelajaran</h3>
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
                    <div class="box">

                        <div class="box-header with-border">
                            <h4 class="box-title">Form Tambah Materi Pembelajaran</h4>
                        </div>

                        <div class="box-body">

                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="materi_pembelajaran">Materi Pembelajaran</label>
                                    <input type="text" name="materi_pembelajaran" value="<?= set_value('materi_pembelajaran') ?>" class="form-control" id="materi_pembelajaran" placeholder="Materi Pembelajaran">
                                    <?= form_error('materi_pembelajaran', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <a href="<?= base_url('Info_pendaftaran/materi') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-success pull-right">Tambah Materi</button>
                            </Form>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>