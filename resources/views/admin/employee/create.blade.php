@extends('layout.admin.main')
@section('title', 'ADAWAI | Pegawai')
@push('styles')
<style>
    .error {
        color: rgb(202, 4, 4);
        font-size: 0.9em;
    }
</style>
@endpush
@section('konten-admin')
    <div class="row d-flex justify-content-left">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
        </ol>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold"><strong>Tambah Pegawai</strong></h1>
    </div>


    <div class="card mb-4 bg-info border-start border-black border-3">
        <div class="card-body">
            <form name="pegawaiForm" action="{{ route('simpan.employee') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3 fw-bold">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Nama Pegawai" value="{{ old('name') }}">
                            <div id="errorName" class="error"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="InputNIP" class="form-label" title="Nomor Induk Pegawai">NIP</label>
                        <input type="text" class="form-control" id="InputNIP" name="nip"
                            placeholder="NIP Pegawai" value="{{ old('nip') }}">
                            <div id="errorNIP" class="error"></div>
                    </div>
                </div>
                <div class="row mb-3 fw-bold">
                    <div class="col-md-6">
                        <label for="no_telepon" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="no_telepon" name="no_telepon"
                            placeholder="Nomor Telepon Pegawai" value="{{ old('no_telepon') }}">
                            <div id="errorNo_Telepon" class="error"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Email Pegawai" value="{{ old('email') }}">
                            <div id="errorEmail" class="error"></div>
                    </div>
                </div>
                <div class="row mb-3 fw-bold">
                    <div class="col-md-6">
                        <label for="gender" class="form-label">Gender</label><br>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group" id="gender">
                            <input type="radio" class="btn-check" name="gender" id="btnradio1" value="Male" autocomplete="off" checked>
                            <label class="btn btn-outline-primary fw-bold rounded-start" for="btnradio1">Laki-laki</label>
                            <input type="radio" class="btn-check" name="gender" id="btnradio2" value="Female" autocomplete="off">
                            <label class="btn btn-outline-danger fw-bold" for="btnradio2">Perempuan</label>
                        </div><br>
                        <div id="errorGender" class="error"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="divisi_id" class="form-label">Divisi</label>
                        <select class="form-select" id="divisi_id" name="divisi_id">
                            <option value="" selected>Pilih Divisi Pegawai</option>
                            @foreach ($divisi as $divisi)
                                <option value="{{ $divisi->id }}">{{ $divisi->divisi }}</option>
                            @endforeach
                          </select>
                          <div id="errorDivisi_Id" class="error"></div>
                    </div>
                </div>
                <div class="row mb-3 fw-bold">
                    <div class="col-md-6">
                        <label for="marital_status" class="form-label">Status Perkawinan</label>
                        <select class="form-select" id="marital_status" name="marital_status">
                            <option value="" selected>Pilih Status Perkawinan</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Duda">Duda</option>
                                <option value="Janda">Janda</option>
                          </select>
                          <div id="errorMarital_Status" class="error"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="education" class="form-label">Pendidikan Terakhir</label>
                        <select class="form-select" id="education" name="education">
                            <option value="" selected>Pilih Pendidikan Terakhir</option>
                                <option value="SMA">SMA</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                          </select>
                          <div id="errorEducation" class="error"></div>
                    </div>
                </div>
                <div class="row mb-3 fw-bold">
                    <div class="col-md-6">
                        <label for="sallary" class="form-label">Gaji</label>
                        <input type="number" class="form-control" id="sallary" name="sallary"
                            placeholder="Gaji Pegawai" value="{{ old('sallary') }}">
                        <div id="errorSallary" class="error"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="foto" class="form-label">Foto</label><br>
                        <div class="input-group mb-3" id="foto">
                            <input type="file" class="form-control" name="foto" id="foto">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div id="errorFoto" class="error"></div>
                    </div>
                </div>
                <div class="row mb-3 fw-bold">
                    <div class="col-md-12 mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3">{{ old('alamat') }}</textarea>
                        <div id="errorAlamat" class="error"></div>
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

    @push('scripts')
        <script src="{{ asset('js/admin/validasi_form/pegawai/tambah.js') }}"></script>
    @endpush

@endsection
