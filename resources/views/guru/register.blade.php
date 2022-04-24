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
						<img src="assets/images/ma-maarif.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Register Guru</h4>
						<form action="/register-guru" method="POST">
							@csrf 
						<div class="form-group mb-3"">
							<label class="floating-label" for="nama_guru">Nama Guru</label>
							<input type="text" class="form-control" id="nama_guru" placeholder="">
						</div>
						<div class="form-group mb-3">
							<div class="row">
									<div class="col-xl-3">
										<input type="text" readonly class="form-control-plaintext" id="namaMapel" value="Mapel :">
							</div>
								<div class="col-xl-9">
										<select class="form-control" id="mapel">
											<option>PAI</option>
											<option>PKN</option>
											<option>Bahasa Indonesia</option>
											<option>Bahasa Inggris</option>
											<option>Matematika Wajib</option>
											<option>Matematika Peminatan</option>
											<option>Fisika</option>
											<option>Biologi</option>
											<option>Kimia</option>
											<option>Geografi</option>
											<option>Ekonomi</option>
											<option>Sejarah</option>
											<option>Sosiologi</option>
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
										<select class="form-control" id="jenkel">
											<option>Laki-laki</option>
											<option>Perempuan</option>
										</select>
									</div>
								</div>
							</div>
						<div class="form-group mb-3">
								<label class="floating-label" for="Address">Alamat</label>
								<input type="text" class="form-control" id="alamat" placeholder="">
						</div>
						<div class="form-group mb-3">
								<label class="floating-label @error('nip') is-invalid @enderror" for="id_guru">NIP</label>
								<input type="text" class="form-control" id="id_guru" placeholder="">
								@error('nip')
								<div class="invalid-feedback">
									NIP harus berupa angka
								</div>
								@enderror
							</div>
						<div class="form-group mb-4">
								<label class="floating-label" for="password">Password</label>
								<input type="password" class="form-control" id="password" placeholder="">
						</div>

						<button class="btn btn-primary btn-block mb-4">DAFTAR</button>
						</form>
						<p class="mb-2">Sudah Memiliki Akun? <a href="/login-guru" class="f-w-400">Login</a></p>
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