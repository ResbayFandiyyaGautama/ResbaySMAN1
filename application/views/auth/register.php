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
								<form class="user" method="POST" action="<?= base_url('auth/register'); ?>">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>" class="form-control ps-15 bg-transparent" placeholder="Nama Lengkap">
										</div>
										<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
											<input type="email" name="email" id="email" value="<?= set_value('email'); ?>" class="form-control ps-15 bg-transparent" placeholder="Alamat Email">
										</div>
										<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" name="password1" id="password1" value="<?= set_value('password1'); ?>" class="form-control ps-15 bg-transparent" placeholder="Kata Sandi">
										</div>
										<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" name="password2" id="password2" value="<?= set_value('password2'); ?>" class="form-control ps-15 bg-transparent" placeholder="Ulangi Kata Sandi">
										</div>
										<?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>

									<!-- captca -->
									<div class="form-group">
										<div class="g-recaptcha" data-sitekey="6LcCVxUqAAAAANxMAQhGPp53KZY5KV1UUFHSrLtW" data-callback="enableSubmitBtn"></div>
									</div>

									<div class="row">
										<div class="col-12 text-center">
											<button type="submit" id="mySubmitBtn" name="submit" disabled="disabled" class="btn btn-info margin-top-10">DAFTAR</button>
										</div>
									</div>
								</form>
								<div class="text-center">
									<p class="mt-15 mb-0">Sudah Memiliki Akun ?<a href="<?= base_url('Auth'); ?>" class="text-primary"> Masuk</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		function enableSubmitBtn() {
			document.getElementById("mySubmitBtn").disabled = false;
		}
	</script>