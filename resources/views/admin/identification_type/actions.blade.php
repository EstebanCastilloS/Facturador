<a href="{{ route('identification_type.edit', $id) }}" class="btn btn-warning"
data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a>


<a class="btn btn-danger" href="" data-target="#modal-delete-{{ $id }}"
data-toggle="modal" title="Eliminar"><i class="fas fa-trash fa-fw"></i></a>

@include('admin.identification_type.delete', ['id' => $id])
