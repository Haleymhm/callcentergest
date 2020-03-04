<!-- <form action="{{ url('sales/branch/edit') }}" method="GET" style="display: block-inline;">
	<input type="hidden" name="id" value="{{ $id }}">
	<button type="button" class="btn btn-sm btn-primary" style="display: block-inline;" data-toggle="tooltip" data-placement="bottom" title="Editar Registro">
		<i class="fa fa-edit"></i>
	</button>
</form>
<form action="{{ url('sales/branch/edit') }}" method="POST" style="display:block-inline;">
	<input type="hidden" name="id" value="{{ $id }}">
	<button type="button" class="btn btn-sm btn-danger" style="display: block-inline;" data-toggle="tooltip" data-placement="bottom" title="Eliminar Registro">
		<i class="fa fas fa-trash-alt"></i>
	</button>
</form> -->
<a href="{{ url('sales/branch/') }}/{{ $id }}/edit" class=""><i class="fa fa-edit"></i></a>
<a href="{{ url('sales/branch/delete') }}/{{ $id }}" class=""><i class="fa fas fa-trash-alt"></i></a>