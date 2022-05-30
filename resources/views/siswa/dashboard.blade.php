<!DOCTYPE html>
<html lang="en">

<head>
    <title>MA Ma'arif Udanawu | Siswa</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href=".../assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href=".../assets/css/style.css">
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/user.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">{{ Auth::user()->name }}</div>
						</div>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
					    <label>Navigasi</label>
					</li>
					<li class="nav-item">
					    <a href="/siswa" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item">
					    <a href="/siswa-profile" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Akun Profile</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Absen</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="/siswa-absen">Absensi</a></li>
					        <li><a href="/siswa-history">Riwayat Absensi</a></li>
					    </ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="/siswa" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="assets/images/ma-maarif.png" alt="" class="logo">
						<img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="assets/images/user/user.jpg" class="img-radius" alt="User-Profile-Image">
										<span>{{ Auth::user()->name }}</span>
									</div>
									<ul class="pro-body">
										<li><a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item"><i class="feather icon-log-out"></i>{{ __('Log Out') }}</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
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

<!-- Required Js -->
<script src=".../assets/js/vendor-all.min.js"></script>
<script src=".../assets/js/plugins/bootstrap.min.js"></script>
<script src=".../assets/js/ripple.js"></script>
<script src=".../assets/js/pcoded.min.js"></script>

<!-- JavaScript Lokasi -->
<script src=".../script.js"></script>

<!-- Apex Chart -->
<script src=".../assets/js/plugins/apexcharts.min.js"></script>

<!-- custom-chart js -->
<script src=".../assets/js/pages/dashboard-main.js"></script>
</body>

</html>

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    HI STUDENT! HAPPY STUDY AND HAVE FUN!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
