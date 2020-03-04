@extends('layouts.app')

@section('content')

<div class="section-header">
    <h1>Sales</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="/home">Inicio</a></div>
        <div class="breadcrumb-item">Sales</div>
        <div class="breadcrumb-item">Sales</div>
    </div>
</div><!-- section-header -->

<div class="section-body">
  <div class="row">
  	<div class="col-12 col-md-12 col-lg-12">
  		<div class="card">

          <div class="card-body">
          	<form action="" method="" id="" >
          		<div class="col-md-7"></div>
          		<div class="form-group col-md-2 float-right">
				    <label for="exampleInputEmail1">Tipo de Venta</label>
				    <select class="form-control" name="">
				    	<option></option>
				    	<option value="ONE">ONE</option>
				    	<option value="FRONT">FORNT</option>
				    </select>
				</div>

				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Fecha</label>
				    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="clearfix col-md-12"></div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">N&uacute;mero de caso</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">N&uacute;mero de orden</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group col-md-4">
				    <label for="exampleInputEmail1">Campa&ntilde;a</label>
				    <select class="form-control" name="">
				    	<option></option>
				    	<option value="ONE">Campa&ntilde;a 1</option>
				    	<option value="FRONT">Campa&ntilde;a 2</option>
				    </select>
				</div>

				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">RUT</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Nombre</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Apellidos</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">PCS de contacto</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>

				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Producto Ofrecido</label>
				    <select class="form-control">
				    	<option>Migraci&oacute;n</option>
				    	<option>Primera Linea</option>
				    	<option>De Pre a Post</option>
				    </select>
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">PCS a portar</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Plan Ofrecido</label>
				    <select class="form-control">
				    	<option>Plan Gamer</option>
				    	<option>Llamadas Ilimitadas</option>
				    	<option>Plan XXXL </option>
				    </select>
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Plan Ofrecido</label>
				    <select class="form-control">
				    	<option>Migraci&oacute;n</option>
				    	<option>Primera Linea</option>
				    	<option>De Pre a Post</option>
				    </select>
				</div>

				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Codigo del Equipo</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Marca del Equipo</label>
				    <select class="form-control">
				    	<option>Migraci&oacute;n</option>
				    	<option>Primera Linea</option>
				    	<option>De Pre a Post</option>
				    </select>
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Modelo de Equipo</label>
				    <select class="form-control">
				    	<option>Migraci&oacute;n</option>
				    	<option>Primera Linea</option>
				    	<option>De Pre a Post</option>
				    </select>
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">N° serie/Documento ci</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>

				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Sin Card</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>

				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Grupo Solicitud</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="clearfix col-md-12"></div>

				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Forma de entrega</label>
				    <select class="form-control">
				    	<option>Migraci&oacute;n</option>
				    	<option>Primera Linea</option>
				    	<option>De Pre a Post</option>
				    </select>
				</div>
				<div class="form-group col-md-6">
				    <label for="exampleInputEmail1">Direccion de entrega</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Fecha de Entrega</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Periodo de entrega</label>
				    <select class="form-control">
				    	<option>Migraci&oacute;n</option>
				    	<option>Primera Linea</option>
				    	<option>De Pre a Post</option>
				    </select>
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Regi&oacute;n</label>
				    <select class="form-control">
				    	<option>Migraci&oacute;n</option>
				    	<option>Primera Linea</option>
				    	<option>De Pre a Post</option>
				    </select>
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Comuna</label>
				    <select class="form-control">
				    	<option>Migraci&oacute;n</option>
				    	<option>Primera Linea</option>
				    	<option>De Pre a Post</option>
				    </select>
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Zona RM</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Tipo de Acreditaci&oacute;n</label>
				    <select class="form-control">
				    	<option>Migraci&oacute;n</option>
				    	<option>Primera Linea</option>
				    	<option>De Pre a Post</option>
				    </select>
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Abono</label>
				    <select class="form-control">
				    	<option>Migraci&oacute;n</option>
				    	<option>Primera Linea</option>
				    	<option>De Pre a Post</option>
				    </select>
				</div>
				<div class="form-group col-md-3">
				    <label for="exampleInputEmail1">Monto Abonado</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>

          	</form>
          </div><!--- End Cards -body -->

        </div><!--- End Cards  -->

  	</div><!--- End Cols  -->

  </div><!--- End Row -->

</div><!--- End Section-Body -->

@endsection