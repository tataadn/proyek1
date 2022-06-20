@extends('guru.layout.main')

@section('contents')

<!-- [ Profile Content ] start -->
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
                            <li class="breadcrumb-item"><a href="{{ route('guru.dashboard') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ url('guru/profile') }}">Halaman Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Latest Customers start -->
            <div class="col-lg-12 col-md-12">
                <div class="card table-card review-card">
                    <div class="card-body">
                        <div class="row p-4">
                            <div class="col">
                                <h3 class="text-center p-2"><b>PROFILE SAYA</b></h3>
                                <div class="row p-2 mt-3">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group row">
                                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="name" name="name" readonly value="{{ Auth::user()->name }}">
                                                        <small id="warn" class="form-text text-muted">Warning! You can't change your name! Please call IT Team if you need help!</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="noid" class="col-sm-2 col-form-label">NIP</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="noid" name="noid" readonly value="{{ Auth::user()->noid }}">
                                                        <small id="warn" class="form-text text-muted">Warning! You can't change your student ID! Please call IT Team if you need help!</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="kategori" class="col-sm-2 col-form-label">Bidang</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="kategori" name="kategori" readonly value="{{ Auth::user()->kategori }}">
                                                        <small id="warn" class="form-text text-muted">Warning! You can't change your class! Please call IT Team if you need help!</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="alamat" name="alamat" readonly value="{{ Auth::user()->alamat }}">
                                                        <small id="warn" class="form-text text-muted">Warning! You can't change your address! Please call IT Team if you need help!</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="jenkel" name="jenkel" readonly value="{{ Auth::user()->jenkel }}">
                                                        <small id="warn" class="form-text text-muted">Warning! You can't change your gender! Please call IT Team if you need help!</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="email" name="email" readonly value="{{ Auth::user()->email }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="col mb-5">
                                            <img src="{{ asset('assets/images/user/user.jpg') }}" alt="" width="200">
                                            <small id="warn" class="form-text text-muted">Warning! Feature change profile picture <br> will be release soon!</small>
                                        </div>
                                        <div class="col pt-5">
                                            <a href="/guru/editprofile/{{ Auth::user()->id }}" type="button" class="btn btn-primary"><i class="feather icon-user"></i> EDIT</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row p-4 mt-5">
                                    <div class="col">
                                        <a href="#" type="button" class="btn btn-primary"><i class="feather icon-user"></i> EDIT</a>
                                    </div>
                                </div> --}}
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