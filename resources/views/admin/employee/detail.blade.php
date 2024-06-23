@extends('layout.admin.main')
@section('title', 'ADAWAI | Divisi')
@section('konten-admin')
    <div class="row d-flex justify-content-left">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
        </ol>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold"><strong>Detail Pegawai</strong></h1>
    </div>


    <div class="card mb-4 bg-info border-start border-black border-3">
        <div class="card-body d-flex align-items-center">
            <div class="row p-2">
                <div class="col-md-8 rounded">
                    <img src="{{ asset($data->foto) }}" class="img-fluid w-100" alt="...">
                </div>
                <div class="col-md-4 bg-info text-black">
                    <small class="fw-bold">Nama</small>
                    <h5 class="fw-bold">
                        {{ $data->name }}
                    </h5>
                    <small class="fw-bold">Nomer Induk Pegawai</small>
                    <h5 class="fw-bold">
                        {{ $data->nip }}
                    </h5>

                    <small class="fw-bold">Divisi</small>
                    <h5 class="fw-bold">
                        {{ $data->divisi->divisi }}
                    </h5>

                    <small class="fw-bold">Jenis Kelamin</small>
                    @if ($data->gender == "Male")
                        <h5 class="fw-bold">
                            Laki-laki
                        </h5>
                    @else
                        <h5 class="fw-bold">
                            Perempuan
                        </h5>
                    @endif

                    <small class="fw-bold">Nomor Telepon</small>
                    <h5 class="fw-bold">
                        {{ $data->no_telepon }}
                    </h5>

                    <small class="fw-bold">Email</small>
                    <h5 class="fw-bold">
                        {{ $data->email }}
                    </h5>

                    <small class="fw-bold">Status Pernikahan</small>
                    <h5 class="fw-bold">
                        {{ $data->marital_status }}
                    </h5>

                    <small class="fw-bold">Pendidikan Terkahir</small>
                    <h5 class="fw-bold">
                        {{ $data->education }}
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4 bg-info border-start border-black border-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <small class="fw-bold fs-4">Alamat</small>
                    <h3 class="fw-bold">
                        <i class="fa-solid fa-location-dot"></i>
                        <strong>{{ $data->alamat }}</strong>
                    </h3>
                </div>
                <div class="col-md-4">
                    <small class="fw-bold fs-4">Gaji</small>
                    <h3 class="fw-bold">
                        <i class="fa-solid fa-sack-dollar"></i>
                       <strong> {{ 'Rp ' . number_format($data->sallary, 0, ',', '.'); }}</strong>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-end mb-4">
            <a href="{{ route('admin.employee') }}" class="btn bg-black text-white btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fa-solid fa-arrow-right-from-bracket" style="color: white;"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
    </div>

@endsection
