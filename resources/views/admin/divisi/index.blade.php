@extends('layout.admin.main')
@section('title', 'ADAWAI | Divisi')
@push('styles')
    <link href="{{ asset('vendor/datatables/datatable.css') }}" rel="stylesheet">
@endpush

@section('konten-admin')
    <div class="row d-flex justify-content-left" >
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Divisi</li>
        </ol>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold">Divisi</h1>
            <a href="{{ route('tambah.divisi') }}" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Divisi</span>
            </a>
    </div>
    @if (session()->has('suksestambahdivisi'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('suksestambahdivisi') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session()->has('suksesupdatedivisi'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('suksesupdatedivisi') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session()->has('suksesdeletedivisi'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('suksesdeletedivisi') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="ModalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="{{ url('/delete-divisi') }}" method="POST">
                @method('delete')
                @csrf
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Divisi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <p>Anda yakin ingin menghapus divisi <strong id="divisi"></strong></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
            </form>
          </div>
        </div>
      </div>

    @push('scripts')
        <script src="{{ asset('vendor/datatables/datatable.js') }}"></script>
        {{ $dataTable->scripts() }}
        <script>
            $('#ModalHapus').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget)
              var id = button.data('id')
              var divisi = button.data('divisi')

              var modal = $(this)
              modal.find('.modal-body #id').val(id)
              modal.find('.modal-body #divisi').text(divisi)
            })
          </script>
    @endpush
@endsection
