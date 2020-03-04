@extends('layouts.app')


@section('cssComponent')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">  
  <link  href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('jsComponent')
<!-- DATATABLE -->
  
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


  <script>
            $(document).ready(function() {
                $('#branchs').DataTable({
                    "serverSide": true,

                    "ajax": "{{ url('api/sales/branch/listar') }}",
                    "columns": [
                        {data: 'cod_sucursal'},
                        {data: 'forma_entrega'},
                        {data: 'destino_entrega'},
                        {data: 'region_cac'},
                        {data: 'btn'},
                    ],
                    "language": {
                        "info": "_TOTAL_ registros",
                        "search": "Buscar",
                        "paginate": {
                            "next": "Siguiente",
                            "previous": "Anterior",
                        },
                        "lengthMenu": 'Mostrar <select >'+
                                    '<option value="10">10</option>'+
                                    '<option value="30">30</option>'+
                                    '<option value="-1">Todos</option>'+
                                    '</select> registros',
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "emptyTable": "No hay datos",
                        "zeroRecords": "No hay coincidencias", 
                        "infoEmpty": "",
                        "infoFiltered": ""
                    }
                });
            });
        </script>

@endsection

@section('content')

<div class="section-header">
    <h1>Branchs</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="/home">Inicio</a></div>
        <div class="breadcrumb-item">Sales</div>
        <div class="breadcrumb-item">Ciudades
          <div class="mb-2" style="text-align: right;">
            <a href="{{ url('sales/branch/create') }}" class="btn btn-primary">Nuevo 
              <i class="far fa-plus-square"></i>
            </a>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-bordered" style="width:100%" id="branchs">
              <thead>
                <tr>
                  <th class="text-center">Cod</th>
                  <th>Ciudad</th>
                  <th>Region</th>
                  <th width="35px"></th>
                </tr>
              </thead>
              
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 @include('sales.branch.create')
@endsection

