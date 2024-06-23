@extends('layout.admin.main')
@section('title', 'ADAWAI | Divisi')
@section('konten-admin')
    <div class="row d-flex justify-content-left">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Divisi</li>
        </ol>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold"><strong>Tambah Divisi</strong></h1>
    </div>


    <div class="card mb-4 bg-info border-start border-black border-3">
        <div class="card-body">
            <form name="divisiForm" action="{{ route('simpan.divisi') }}" method="POST">
                @csrf
                <div class="row mb-3 fw-bold">
                    <div class="col-md-12">
                        <label for="divisi" class="form-label">Divisi:</label>
                        <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Divisi Pegawai" value="{{ old('divisi') }}">
                        <div id="errorDivisi" class="error"></div>
                    </div>
                </div>
                <div class="row mb-3 fw-bold">
                    <div class="col-md-12 mb-3">
                        <label for="description" class="form-label">Deskripsi:</label>
                        <textarea id="description"  class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                        <div id="errorDescription" class="error"></div>
                    </div>
                </div>
                <div class="row mb-3 fw-bold d-flex">
                    <div class="col">
                        <a type="button" href="{{ route('admin.divisi') }}"
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
    <script src="{{ asset('js/admin/validasi_form/divisi/script.js') }}"></script>
    @endpush


@endsection
