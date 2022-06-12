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
                            <li class="breadcrumb-item"><a href="/siswa/absensi">Halaman Absensi</a></li>
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
                        <form method="POST" action="/siswa/store">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="noid">NIS</label>
                                        <input type="text" class="form-control" id="nis" name="nis" placeholder="" readonly="readonly" value="{{ Auth::user()->noid }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="floating-label" for="nama">Nama</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="" readonly="readonly" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="col-sm-12 pt-3">
                                    <div class="form-group">
                                        <label class="floating-label" for="kelas">Kelas</label>
                                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="" readonly="readonly" value="{{ Auth::user()->kategori }}">
                                    </div>
                                </div>
                                <div class="col-sm-12 pt-3">
                                    <div class="form-group">
                                        <label for="matapelajaran">Mata Pelajaran</label>
                                        <select class="form-control" id="mapel" name="mapel">
                                            <option value="">-Pilih Mata Pelajaran-</option>
                                            <option value="Bhs Indonesia">Bahasa Indonesia</option>
                                            <option value="Bhs Inggris">Bahasa Inggris</option>
                                            <option value="Biologi">Biologi</option>
                                            <option value="Ekonomi">Ekonomi</option>
                                            <option value="Fisika">Fisika</option>
                                            <option value="Geografi">Geografi</option>
                                            <option value="Kimia">Kimia</option>
                                            <option value="Matematika Peminatan">Matematika Peminatan</option>
                                            <option value="Matematika Wajib">Matematika Wajib</option>
                                            <option value=">Matematika Wajib">Pendidikan Agama Islam</option>
                                            <option value="PKN">Pendidikan Kewarganegaraan (PKN)</option>
                                            <option value="Sejarah">Sejarah</option>
                                            <option value="Sosiologi">Sosiologi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 pt-3">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" id="location" name="location" rows="2"></textarea>
                                            {{-- <h4 class="form-control" aria-describedby="basic-addon2" id="location" name="location"></h4> --}}
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button" onclick="getLocation()">Lokasi Anda</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-right pt-4">
                                    <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
                                    {{-- <a href="#" type="button" class="btn btn-primary">SUBMIT</a> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection