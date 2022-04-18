@extends('siswa.layouts.main')

@section('content')

<!-- [ Index Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Halaman Utama</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/">Halaman Utama</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Profil card -->
            <div class="col-xl-6 col-md-12">
                <div class="card table-card">
                    <div class="card-header" style="background-color: #E2EAF5; text-align:center;">
                        <h5>PROFILE SAYA</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item minimize-card">
                                        <a href="#!">
                                            <span><i class="feather icon-minus"></i> collapse</span>
                                            <span style="display:none"><i class="feather icon-plus"></i> expand</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row p-3">
                            <div class="col-md-5 text-center">
                                <img src="assets/images/user/user.jpg" alt="User" width="180">
                            </div>
                            <div class="col-md-7">
                                <br>
                                <h6 style="line-height: 3ch">Rara Nasution <br>
                                    raranasujae@gmail.com <br>
                                    MIPA-I <br>
                                    Perempuan <br>
                                    Perumahan Oce Blok B2 Surabaya Barat <br>
                                    Narara123 <br>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="card latest-update-card">
                    <div class="card-header">
                        <h5>Lorem Ipsum</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item minimize-card">
                                        <a href="#!">
                                            <span><i class="feather icon-minus"></i> collapse</span>
                                            <span style="display:none"><i class="feather icon-plus"></i> expand</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col p-4">
                                <h5>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profil card end -->

            <!-- Latest Customers start -->
            <div class="col-lg-12 col-md-12">
                <div class="card table-card review-card">
                    <div class="card-body">
                        <div class="row p-4">
                            <div class="col">
                                <br>
                                <h5 style="line-height: 1cm">
                                    Hai, Rara jangan lupa absen! <br>
                                    Absensi adalah suatu bentuk pendataan presensi atau kehadiran seorang atau pegawai yang merupakan bagian pelaporan dari suatu institusi yang berisi data-data status kehadiran yang disusun dan diatur secara rapi dan mudah untuk di cari dan digunakan apabila sewaktu-waktu diperlukan oleh pihak berkepentingan
                                </h5>
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