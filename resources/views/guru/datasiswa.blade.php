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
                            <h5 class="m-b-10">Halaman Data Siswa</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('guru.dashboard') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Kelola Siswa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('guru.datasiswa') }}">Data Siswa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- data siswa -->
            <div class="col-xl-12 col-md-12" id="ipa-1">
                <div class="card table-card">
                    <div class="card-header">
                        <h3><b>Kelas MIPA 1</b></h3>
                        {{-- <a href="#" class="btn btn-success pull-right">+Tambah Data</a> --}}
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <label class="p-r-40 p-t-10">
                                    <input type="seacrh" class="form-control form-control-sm" placeholder="Search" aria-controls="report-table">
                                </label>
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
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($siswa as $data) --}}
                                    <tr>
                                        {{-- <td>{{$loop->iteration }}</td>
                                        <td>{{$data->nis }}</td>
                                        <td>{{$data->nama_siswa }}</td>
                                        <td>{{$data->id_kelas }}</td>
                                        <td>{{$data->jenis_kelamin }}</td>
                                        <td>{{$data->alamat }}</td> --}}
                                        <td> <button type="submit" class="btn btn-warning">Edit</button>
                                            <button type="submit" class="btn btn-danger">Delete</button></td>
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-md-12" id="ipa-2">
                <div class="card table-card">
                    <div class="card-header">
                        <h3><b>Kelas MIPA 2</b></h3>
                        <a href="#" class="btn btn-success pull-right">+Tambah Data</a>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <label class="p-r-40 p-t-10">
                                    <input type="seacrh" class="form-control form-control-sm" placeholder="Search" aria-controls="report-table">
                                </label>
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
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($siswa as $data) --}}
                                    <tr>
                                        {{-- <td>{{$loop->iteration }}</td>
                                        <td>{{$data->nis }}</td>
                                        <td>{{$data->nama_siswa }}</td>
                                        <td>{{$data->id_kelas }}</td>
                                        <td>{{$data->jenis_kelamin }}</td>
                                        <td>{{$data->alamat }}</td> --}}
                                        <td> <button type="submit" class="btn btn-warning">Edit</button>
                                            <button type="submit" class="btn btn-danger">Delete</button></td>

                                    </tr>
                                    {{-- @endforeach                                 --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-md-12" id="ipa-3">
                <div class="card table-card">
                    <div class="card-header">
                        <h3><b>Kelas MIPA 3</b></h3>
                        <a href="#" class="btn btn-success pull-right">+Tambah Data</a>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <label class="p-r-40 p-t-10">
                                    <input type="seacrh" class="form-control form-control-sm" placeholder="Search" aria-controls="report-table">
                                </label>
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
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tbody>
                                        {{-- @foreach ($siswa as $data) --}}
                                        <tr>
                                            {{-- <td>{{$loop->iteration }}</td>
                                            <td>{{$data->nis }}</td>
                                            <td>{{$data->nama_siswa }}</td>
                                            <td>{{$data->id_kelas }}</td>
                                            <td>{{$data->jenis_kelamin }}</td>
                                            <td>{{$data->alamat }}</td> --}}
                                            <td> <button type="submit" class="btn btn-warning">Edit</button>
                                                <button type="submit" class="btn btn-danger">Delete</button></td>

                                        </tr>
                                        {{-- @endforeach                                         --}}
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- data siswa end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->

@endsection