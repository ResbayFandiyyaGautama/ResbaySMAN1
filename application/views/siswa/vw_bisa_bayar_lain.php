<head>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-Dca3rQ_BvbvnVnU4"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Halaman Pembayaran</h3>
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

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">

                        <div class="box-header with-border">
                            <h4 class="box-title">Form Pembayaran</h4>
                        </div>

                        <div class="box-body">
                            <!-- Default Dokumentasi dari github -->
                            <form id="payment-form" method="post" action="<?= site_url('Pembayaran_lain/bulanan') ?>">
                                <input type="hidden" name="result_type" id="result-type" value="">
                                <input type="hidden" name="result_data" id="result-data" value="">
                            </form>
                            <!-- end default  -->

                            <div class="form-group">
                                <label for="nama_siswa">Nama Siswa</label>
                                <input type="text" name="nama_siswa" value="<?= $user['nama'] ?>" class="form-control" id="nama_siswa" placeholder="Nama Siswa" disabled>
                            </div>

                            <div class="form-group">
                                <label for="jmlbayar">Jumlah Bayar</label>
                                <input type="number" name="jmlbayar" value="<?= $bulanan ?>" class="form-control" id="jmlbayar" placeholder="Jumlah Bayar" disabled>
                            </div>

                            <div class="form-group">
                                <label for="jenis_pembayaran">Jenis Pembayaran</label>
                                <select name="jenis_pembayaran" id="jenis_pembayaran" value="<?= set_value('jenis_pembayaran') ?>" class="form-control">
                                    <option value="">Jenis Pembayaran</option>
                                    <option value="Bulanan">Bulanan</option>
                                    <option value="Midle Exam">Midle Exam</option>
                                    <option value="Final Exam">Final Exam</option>
                                </select>
                                <?= form_error('jenis_pembayaran', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>

                            <button id="pay-button" class="btn btn-success pull-right">Bayar</button>

                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-body">
                            <?= $this->session->flashdata('message'); ?>
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jumlah</th>
                                            <th>Payment Type</th>
                                            <th>Bank</th>
                                            <th>Va Number</th>
                                            <th>Transaction Time</th>
                                            <th>Jenis Pembayaran</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($bayar as $ba) : ?>
                                            <tr>
                                                <td><?= $ba['nama']; ?></td>
                                                <td><?= $ba['gross_amount']; ?></td>
                                                <td><?= $ba['payment_type']; ?></td>
                                                <td><?= $ba['bank']; ?></td>
                                                <td><?= $ba['va_number']; ?></td>
                                                <td><?= date('d F Y', strtotime($ba['transaction_time'])); ?></td>
                                                <td><?= $ba['jenis_pembayaran']; ?></td>
                                                <td>
                                                    <?php
                                                    if ($ba['status_code'] == "Berhasil" || $ba['status_code'] == 200) {
                                                    ?>
                                                        <span class="badge bg-success">Success</span>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <span class="badge bg-warning">Pending</span>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="<?= $ba['pdf_url']; ?>" target="_blank" class="btn btn-success btn-sm">Download</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script type="text/javascript">
    $('#pay-button').click(function(event) {
        event.preventDefault();
        $(this).attr("disabled", "disabled");

        var nama_siswa = $("#nama_siswa").val();
        var jmlbayar = $("#jmlbayar").val();
        var jenis_pembayaran = $("#jenis_pembayaran option:selected").text();

        function changeResult(type, data) {
            $("#result-type").val(type);
            $("#result-data").val(JSON.stringify(data));
        }

        $.ajax({
            type: 'POST',
            url: '<?= site_url() ?>/Pembayaran_lain/token',
            data: {
                nama_siswa: nama_siswa,
                jmlbayar: jmlbayar
            },
            cache: false,
            success: function(data) {
                console.log('token = ' + data);

                snap.pay(data, {
                    onSuccess: function(result) {
                        changeResult('success', result);
                        console.log(result.status_message);
                        console.log(result);
                        $("#payment-form").submit();
                    },
                    onPending: function(result) {
                        changeResult('pending', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    },
                    onError: function(result) {
                        changeResult('error', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    }
                });
            }
        });

        $.ajax({
            type: 'POST',
            url: '<?= site_url() ?>/Pembayaran_lain/bulanan',
            data: {
                nama_siswa: nama_siswa,
                jmlbayar: jmlbayar,
                jenis_pembayaran: jenis_pembayaran
            },
            cache: false,
            success: function(data) {
                console.log("Berhasil");
            }
        });
    });
</script>