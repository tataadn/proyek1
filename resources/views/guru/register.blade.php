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
						<div class="form-group mb-3">
							<label class="floating-label @error('nip') is-invalid @enderror" for="nip">NIP Guru</label>
							<input type="text" name="nip" class="form-control" id="nip" placeholder="" required value="{{ old('nip') }}">
							@error('nip')
								<div class="invalid-feedback">
									NIP anda tidak valid / tidak boleh kosong
								</div>
							@enderror
						</div>

						<div class="form-group mb-3">
							<label class="floating-label @error('nama') is-invalid @enderror" for="nama_guru">Nama Guru</label>
							<input type="text" name="nama" class="form-control" id="nama_guru" placeholder="" required value="{{ old('nama') }}">
							@error('nama')
								<div class="invalid-feedback">
									Nama Guru tidak boleh kosong
								</div>
							@enderror
						</div>

						<div class="form-group mb-3">
							<div class="row">
									<div class="col-xl-3">
										<label class=" @error('nama') is-invalid @enderror" for="nama_guru">Mapel</label>
									</div>
									<div class="col-xl-9">
										<select name="mapel" class="form-select @error('mapel') is-invalid @enderror" aria-label="Default select example" required autocomplete="mapel" autofocus>
											<option value="bindo">Bahasa Indonesia</option>
											<option value="bing">Bahasa Inggris</option>
											<option value="bio">Biologi</option>
											<option value="eko">Ekonomi</option>
											<option value="fis">Fisika</option>
											<option value="geo">Geografi</option>
											<option value="kim">Kimia</option>
											<option value="mat_p">Matematika Peminatan</option>
											<option value="mat_w">Matematika Wajib</option>
											<option value="pai">Pendidikan Agama Islam</option>
											<option value="pkn">Pendidikan Kewarganegaraan</option>
											<option value="sej">Sejarah</option>
											<option value="sos">Sosiologi</option>
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
										<select name="jenkel" class="form-select @error('jenkel') is-invalid @enderror" aria-label="Default select example" required autocomplete="jenkel" autofocus>
											<option value="laki-laki">laki-laki</option>
											<option value="Wanita">Wanita</option>
										</select>
									</div>
								</div>
						</div>

						<div class="form-group mb-3">
							<label class="floating-label @error('email') is-invalid @enderror" for="email">Email</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="" required value="{{ old('email') }}" autocomplete="email">
							@error('email')
							<div class="invalid-feedback">
								Email anda tidak sesuai / tidak boleh kosong
							</div>
							@enderror
						</div>

						<div class="form-group mb-3">
								<label class="floating-label" for="Address">Alamat</label>
								<input type="text" name="alamat" class="form-control" id="alamat" placeholder="">
						</div>
						
						<div class="form-group mb-4">
								<label class="floating-label @error('password') is-invalid @enderror" for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" placeholder="" required>
								@error('password')
								<div class="invalid-feedback">
									Password harus terdiri dari 6 karakter
								</div>
								@enderror
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