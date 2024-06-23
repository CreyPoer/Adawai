@extends('layout.admin.main')
@section('title', 'ADAWAI | Pegawai')
@section('konten-admin')
    <div class="row d-flex justify-content-left">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
        </ol>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold"><strong>Edit Pegawai</strong></h1>
    </div>


    <div class="card mb-4 bg-info border-start border-black border-3">
        <div class="card-body">
            <form action="{{  route('update.employee', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3 fw-bold">
                    <div class="col-md-6">
                        <label for="InputName" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="InputName" name="name"
                            placeholder="Nama Pegawai" value="{{ $data->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="InputNIP" class="form-label" title="Nomor Induk Pegawai">NIP</label>
                        <input type="text" class="form-control" id="InputNIP" name="nip"
                            placeholder="NIP Pegawai" value="{{ $data->nip }}">
                        @error('nip')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3 fw-bold">
                    <div class="col-md-6">
                        <label for="InputNoTelepon" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="InputNoTelepon" name="no_telepon"
                            placeholder="Nomor Telepon Pegawai" value="{{ $data->no_telepon }}">
                        @error('no_telepon')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="InputEmail" class="form-label">Email</label>
                        <input type="text" class="form-control" id="InputEmail" name="email"
                            placeholder="Email Pegawai" value="{{ $data->email }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3 fw-bold">
                    <div class="col-md-6">
                        <label for="InputGender" class="form-label">Gender</label><br>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group" id="InputGender">
                            <input type="radio" class="btn-check" name="gender" id="btnradio1" value="Male" autocomplete="off" {{ $data->gender == 'Male' ? 'checked' : '' }}>
                            <label class="btn btn-outline-primary fw-bold rounded-start" for="btnradio1">Laki-laki</label>
                            <input type="radio" class="btn-check" name="gender" id="btnradio2" value="Female" autocomplete="off" {{ $data->gender == 'Female' ? 'checked' : '' }}>
                            <label class="btn btn-outline-danger fw-bold" for="btnradio2">Perempuan</label>
                        </div><br>
                        @error('gender')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputDivisi" class="form-label">Divisi</label>
                        <select class="form-select" id="inputDivisi" name="divisi_id">
                            <option selected>Pilih Divisi Pegawai</option>
                            @foreach ($divisi as $divisi)
                            <option value="{{ $divisi->id }}" {{ $divisi->id == $data->divisi_id ? 'selected' : '' }}>
                                {{ $divisi->divisi }}
                            </option>
                            @endforeach
                          </select>
                        @error('divisi_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3 fw-bold">
                    <div class="col-md-6">
                        <label for="inputMaritalStatus" class="form-label">Status Perkawinan</label>
                        <select class="form-select" id="inputMaritalStatus" name="marital_status">
                            <option selected>Pilih Status Perkawinan</option>
                                <option {{ $data->marital_status == 'Belum Menikah' ? 'selected' : '' }} value="Belum Menikah">Belum Menikah</option>
                                <option {{ $data->marital_status == 'Menikah' ? 'selected' : '' }} value="Menikah">Menikah</option>
                                <option {{ $data->marital_status == 'Duda' ? 'selected' : '' }} value="Duda">Duda</option>
                                <option {{ $data->marital_status == 'Janda' ? 'selected' : '' }} value="Janda">Janda</option>
                          </select>
                        @error('marital_status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputPendidikan" class="form-label">Pendidikan Terakhir</label>
                        <select class="form-select" id="inputPendidikan" name="education">
                            <option selected>Pilih Pendidikan Terakhir</option>
                                <option {{ $data->education == 'SMA' ? 'selected' : '' }} value="SMA">SMA</option>
                                <option {{ $data->education == 'D3' ? 'selected' : '' }} value="D3">D3</option>
                                <option {{ $data->education == 'S1' ? 'selected' : '' }} value="S1">S1</option>
                                <option {{ $data->education == 'S2' ? 'selected' : '' }} value="S2">S2</option>
                                <option {{ $data->education == 'S3' ? 'selected' : '' }} value="S3">S3</option>
                          </select>
                        @error('education')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3 fw-bold">
                    <div class="col-md-6">
                        <label for="InputSallary" class="form-label">Gaji</label>
                        <input type="number" class="form-control" id="InputSallary" name="sallary"
                            placeholder="Gaji Pegawai" value="{{ $data->sallary }}">
                        @error('sallary')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputFoto" class="form-label">Foto <small>silahkan upload foto jika ingin merubah foto Pegawai {{ $data->name }}</small></label><br>
                        <div class="input-group mb-3" id="inputFoto">
                            <input type="file" class="form-control" name="foto" id="inputFoto">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        @error('foto')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3 fw-bold">
                    <div class="col-md-12 mb-3">
                        <label for="inputAddress" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="inputAddress" rows="3">{{ $data->alamat }}</textarea>
                        @error('alamat')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3 fw-bold d-flex">
                    <div class="col">
                        <a type="button" href="{{ route('admin.employee') }}"
                            class="tombol-form btn border-start border-black border-2 text-black w-100"><strong
                                class="text-uppercase">Kembali</strong></a>
                    </div>
                    <div class="col">
                        <button type="submit"
                            class="tombol-form btn border-start border-black border-2 text-black w-100"><strong
                                class="text-uppercase">Simpan</strong></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
