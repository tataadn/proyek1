<!DOCTYPE html>
<html lang="en">

<head>

	<title>MA Ma'arif Udanawu | Register</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="assets/images/ma-maarif.png" alt="" class="img-fluid mb-2">
						<h4 class="mb-3 f-w-400">DAFTAR AKUN SISWA</h4>
						<form action="/register-siswa" method="POST">
							<div class="form-group mb-3">
								@csrf
								<label class="floating-label" for="Name">Nama Lengkap</label>
								<input type="text" class="form-control" id="name" placeholder="">
							</div>
							<div class="form-group mb-3">
								<div class="row">
									<div class="col-xl-3">
										<input type="text" readonly class="form-control-plaintext" id="teksKelas" value="Kelas :">
									</div>
									<div class="col-xl-9">
										<select class="form-control" id="kelas">
											<option>IPA 1</option>
											<option>IPA 2</option>
											<option>IPA 3</option>
											<option>IPS 1</option>
											<option>IPS 2</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group mb-3">
								<div class="row">
									<div class="col-xl-5">
										<input type="text" readonly class="form-control-plaintext" id="teksJk" value="Jenis Kelamin :">
									</div>
									<div class="col-xl-7">
										<select class="form-control" id="jenis_kelamin">
											<option>Laki-laki</option>
											<option>Perempuan</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group mb-3">
								<label class="floating-label" for="Address">Alamat</label>
								<input type="text" class="form-control" id="address" placeholder="">
							</div>
							<div class="form-group mb-3">
								<label class="floating-label @error('nis') is-invalid @enderror" for="Nis">NIS</label>
								<input type="text" class="form-control" id="nis" placeholder="">
								@error('nis')
								<div class="invalid-feedback">
									NIS harus berupa angka
								</div>
								@enderror
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">Password</label>
								<input type="password" class="form-control" id="Password" placeholder="">
							</div>
							<button class="btn btn-primary btn-block mb-2">Daftar</button>
						</form>
						<p class="mb-2">Sudah punya akun? <a href="/login-siswa" class="f-w-400">Login di Sini</a></p>
						<a href="/" class="f-w-400">Kembali ke Halaman Utama</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>

</body>

</html>