@extends('siswa.layouts.main')

@section('content')

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Halaman Profile</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Absen</a></li>
                            <li class="breadcrumb-item"><a href="/absen">Halaman Absensi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Latest Customers start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3><b>Form Absensi GPS</b></h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" placeholder="" readonly="readonly" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="col-sm-12 pt-3">
                                    <div class="form-group">
                                        <label class="floating-label" for="kelas">Kelas</label>
                                        <input type="text" class="form-control" id="nama" placeholder="" readonly="readonly" value="{{ Auth::user()->kategori }}">
                                    </div>
                                </div>
                                <div class="col-sm-12 pt-3">
                                    <div class="form-group">
                                        <label for="matapelajaran">Mata Pelajaran</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
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
                                <div class="col-sm-12 pt-3">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <h4 class="form-control" aria-describedby="basic-addon2" id="location" name="location"></h4>
                                            <div class="input-group-append">
                                                <button class="btn  btn-primary" type="button" onclick="getLocation()">Lokasi Anda</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-9 pt-4">
                                    <fieldset disabled="disabled">
                                        <div class="">
                                            <h5 id="location"></h5>
                                        </div>
                                    </fieldset>
								</div>
								<div class="col-sm-3 pt-4">
                                    <button type="button" class="btn btn-primary" onclick="getLocation()">Lokasi Anda</button>
                                </div> --}}
                            </div>
                        </form>
						<div class="row p-3 mt-3">
							<div class="col text-right">
								<a href="#" type="button" class="btn btn-primary">SUBMIT</a>
							</div>
						</div>
                    </div>
                </div>
            </div>
            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection