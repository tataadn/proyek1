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
                            <h5 class="m-b-10">Halaman Riwayat</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('siswa.dashboard') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Absen</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('siswa.history') }}">Halaman Riwayat</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Tabel -->
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <h3><b>RIWAYAT ABSENSI</b></h3>
                    </div>
                    @if($history->count())
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Tanggal Absensi</th>
                                        <th>Nama siswa</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Alamat</th>
                                        <th>Lokasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($history as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->nis }}</td>
                                            <td>{{ $data->created_at }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->kelas }}</td>
                                            <td>{{ $data->mapel }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>{{ $data->location }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                    <div class="card-body">
                        <h6 class="text-center text-danger">Anda belum melakukan absensi!</h6>
                    </div>
                    @endif
                </div>
            </div>
            <!-- Tabel end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection