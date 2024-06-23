<div class="btn-group">
    <a href="{{ url('/edit-employee/'.$data->id) }}" class="btn btn-info btn-sm">Edit</a>
    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#ModalHapus"  data-name="{{ $data->name }}"  data-id="{{ $data->id }}">
        Hapus
        </button>
    <a href="{{ url('/detail-employee/'.$data->id) }}" class="btn btn-primary btn-sm">Detail</a>
</div>
