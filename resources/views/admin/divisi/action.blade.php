<div class="btn-group">
    <a href="{{ url('/edit-divisi/'.$data->id) }}" class="btn btn-info btn-sm">Edit</a>
    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#ModalHapus"  data-divisi="{{ $data->divisi }}"  data-id="{{ $data->id }}">
        Hapus
        </button>
</div>
