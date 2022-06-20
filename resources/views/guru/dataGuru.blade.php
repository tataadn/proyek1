@extends('guru.layout.main')

@section('contents')

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Halaman Data Guru</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('guru.dashboard') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('guru.datasiswa') }}">Data Guru</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- data siswa -->
            <div class="col-xl-12 col-md-12">
                <div class="col-xl-12 col-md-12">
                    @if($data->count())
                        <div class="col-xl-12 col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h3><b>Data Guru</b></h3>
                                    <div class="card-header-right">
                                        <div class="btn-group card-option">
                                            {{-- <label class="p-r-40 p-t-15">
                                                <input type="search" class="form-control form-control-sm" placeholder="Search" name="search">
                                            </label> --}}
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="feather icon-more-horizontal"></i>
                                            </button>
                                            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                                <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body table-border-style p-3">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Mata Pelajaran</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Alamat</th>
                                                    <th>Email</th>
                                                    <th>Verifikasi</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $d)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $d->noid }}</td>
                                                    <td>{{ $d->name }}</td>
                                                    <td>{{ $d->kategori }}</td>
                                                    <td>{{ $d->jenkel }}</td>
                                                    <td>{{ $d->alamat }}</td>
                                                    <td>{{ $d->email }}</td>
                                                    <td>{{ $d->email_verified_at }}</td>
                                                    <td>
                                                        <form action="/guru/data-guru/{{ $d->id }}" method="GET" onsubmit="return confirm('Yakin menghapus data ini?')">
                                                        @csrf
                                                        <x-button class="btn btn-danger">Delete</x-button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-xl-12 col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h3><b>Kelas IPS 1</b></h3>
                                    <div class="card-header-right">
                                        <div class="btn-group card-option">
                                            {{-- <a href="/guru/exportabsensi" class="btn btn-primary m-r-20 mb-2 mt-2">
                                                Rekap Absen
                                            </a> --}}
                                            {{-- <label class="p-r-40 p-t-15">
                                                <input type="search" class="form-control form-control-sm" placeholder="Search" name="search">
                                            </label> --}}
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="feather icon-more-horizontal"></i>
                                            </button>
                                            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                                <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body table-border-style p-3">
                                    <h6>No records found!</h6>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <!-- data siswa end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->

@endsection