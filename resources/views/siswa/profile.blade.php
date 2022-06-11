@extends('siswa.layouts.main')

@section('content')

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
                            <li class="breadcrumb-item"><a href="{{ route('siswa.dashboard') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('siswa.profile') }}">Halaman Profile</a></li>
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
                                    <div class="col-md-5 text-center">
                                        <img src="{{ asset('assets/images/user/user.jpg') }}" alt="" width="200">
                                    </div>
                                    <div class="col-md-7">
                                        <h5 style="line-height: 3ch">
                                            {{ Auth::user()->name }}<br>
                                            {{ Auth::user()->email }}<br>
                                            {{ Auth::user()->kategori }}<br>
                                            Perempuan <br>
                                            {{ Auth::user()->alamat }} <br>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row p-4 mt-5">
                                    <div class="col">
                                        <a href="#" type="button" class="btn btn-primary"><i class="feather icon-user"></i> EDIT</a>
                                    </div>
                                </div>
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