@extends('layouts.app')

@section('cssComponent')
<link rel="stylesheet" href="{{ asset('assets/plugins/datapicker/css/bootstrap-datepicker.css') }}">
@endsection

@section('jsComponent')
<script src="{{ asset('assets/plugins/datapicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/plugins/datapicker/locales/bootstrap-datepicker.es.min.js') }}"></script>

<script type="text/javascript">
	$( function() {
		$('#dateReg').datepicker({
		    format: "dd/mm/yyyy",
		    todayBtn: "linked",
		    language: "es"
		}); 
	});
</script>
@endsection

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
         			<div class="row">
						<div class="col-12 col-sm-12 col-md-3">
	                        <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
	                          <li class="nav-item">
	                            <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-home"></i> Inicio</a>
	                          </li>
	                          <li class="nav-item">
	                            <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#cliente" role="tab" aria-controls="cliente" aria-selected="false"><i class="fas fa-user-tie"></i> Cliente</a>
	                          </li>
	                          <li class="nav-item">
	                            <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#producto" role="tab" aria-controls="producto" aria-selected="false">Producto</a>
	                          </li>
	                          <li class="nav-item">
	                            <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#equipo" role="tab" aria-controls="equipo" aria-selected="false"><i class="fas fa-mobile-alt"></i> Equipo</a>
	                          </li>
	                          <li class="nav-item">
	                            <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#delivery" role="tab" aria-controls="delivery" aria-selected="false"><i class="fas fa-truck"></i> Delivery</a>
	                          </li>
	                          <li class="nav-item">
	                            <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#abono" role="tab" aria-controls="abono" aria-selected="false"><i class="far fa-money-bill-alt"></i> Abono</a>
	                          </li>
	                        </ul>
                      </div>
                      <div class="col-12 col-sm-12 col-md-9">
                        <form action="" method="post">
                        <div class="tab-content no-padding" id="myTab2Content">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab4">
                          	<div class="form-group">
		                      		<label class="form-label">Tipo de Venta</label>
		                      		<div class="selectgroup selectgroup-pills">
		                      			<label class="selectgroup-item">
				                          <input type="radio" name="icon-input" value="1" class="selectgroup-input" checked="">
				                          <span class="selectgroup-button selectgroup-button-icon">ONE</span>
				                        </label>
				                        <label class="selectgroup-item">
				                          <input type="radio" name="icon-input" value="1" class="selectgroup-input" checked="">
				                          <span class="selectgroup-button selectgroup-button-icon">FRONT</span>
				                        </label>

			                      	</div>
			                    </div>
                                
                                <div class="form-group col-md-5" style="display: inline-block;">
	                                <label for="exampleInputEmail1">Fecha</label>
	                                <div class="input-group mb-3 date">
									  <input type="text" class="form-control" aria-label="s" aria-describedby="basic-addon2" id="dateReg">
									  <div class="input-group-append">
									    <span class="input-group-text" id="basic-addon2"><i class="far fa-calendar-alt"></i></span>
									  </div>
									</div>
	                            </div>
	                            <div class="form-group col-md-5" style="display: inline-block;">
	                                <label for="exampleInputEmail1">N&uacute;mero de caso</label>
	                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	                            </div>
	                             <div class="form-group col-md-5" style="display: inline-block;">
								    <label for="exampleInputEmail1">N&uacute;mero de orden</label>
								    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								</div>
								<div class="form-group col-md-5" style="display: inline-block;">
								    <label for="exampleInputEmail1">Campa&ntilde;a</label>
								    <select class="form-control" name="">
								    	<option></option>
								    	<option value="ONE">Campa&ntilde;a 1</option>
								    	<option value="FRONT">Campa&ntilde;a 2</option>
								    </select>
								</div>
                          </div>
                          <div class="tab-pane fade" id="cliente" role="tabpanel" aria-labelledby="profile-tab4">
                            <div class="form-group col-md-6">
							    <label for="exampleInputEmail1">RUT</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group col-md-5" style="display: inline-block;">
							    <label for="exampleInputEmail1">Nombre</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group col-md-5" style="display: inline-block;">
							    <label for="exampleInputEmail1">Apellidos</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group col-md-6">
							    <label for="exampleInputEmail1">PCS de contacto</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
                          </div>

                          <div class="tab-pane fade" id="producto" role="tabpanel" aria-labelledby="contact-tab4">
                            <div class="form-group col-md-4">
							    <label for="exampleInputEmail1">Producto Ofrecido</label>
							    <select class="form-control">
							    	<option>Migraci&oacute;n</option>
							    	<option>Primera Linea</option>
							    	<option>De Pre a Post</option>
							    </select>
							</div>
							<div class="form-group col-md-7">
							    <label for="exampleInputEmail1">PCS a portar</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group col-md-5">
							    <label for="exampleInputEmail1">Plan Ofrecido</label>
							    <select class="form-control">
							    	<option>Plan Gamer</option>
							    	<option>Llamadas Ilimitadas</option>
							    	<option>Plan XXXL </option>
							    </select>
							</div>
					
                          </div>
                          <div class="tab-pane fade" id="equipo" role="tabpanel" aria-labelledby="contact-tab4">
                            <div class="form-group col-md-8">
							    <label for="exampleInputEmail1">Codigo del Equipo</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group col-md-5" style="display: inline-block;">
							    <label for="exampleInputEmail1">Marca del Equipo</label>
							    <select class="form-control">
							    	<option>Migraci&oacute;n</option>
							    	<option>Primera Linea</option>
							    	<option>De Pre a Post</option>
							    </select>
							</div>
							<div class="form-group col-md-5" style="display: inline-block;">
							    <label for="exampleInputEmail1">Modelo de Equipo</label>
							    <select class="form-control">
							    	<option>Migraci&oacute;n</option>
							    	<option>Primera Linea</option>
							    	<option>De Pre a Post</option>
							    </select>
							</div>
							<div class="form-group col-md-5" style="display: inline-block;">
							    <label for="exampleInputEmail1">N° serie/Documento ci</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>

							<div class="form-group col-md-5" style="display: inline-block;">
							    <label for="exampleInputEmail1">Sin Card</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
                          </div>
                          <!-------------------------------- ----------------------------------------------------->
                          <!-------------------------------- ----------------------------------------------------->
                          <div class="tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="contact-tab4">
                            <div class="form-group col-md-5" style="display: inline-block;">
							    <label for="exampleInputEmail1">Forma de entrega</label>
							    <select class="form-control">
							    	<option>Migraci&oacute;n</option>
							    	<option>Primera Linea</option>
							    	<option>De Pre a Post</option>
							    </select>
							</div>
							<div class="form-group col-md-11" style="display: inline-block;">
							    <label for="exampleInputEmail1">Direccion de entrega</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group col-md-4" style="display: inline-block;">
							    <label for="exampleInputEmail1">Fecha de Entrega</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group col-md-4" style="display: inline-block;">
							    <label for="exampleInputEmail1">Periodo de entrega</label>
							    <select class="form-control">
							    	<option>Migraci&oacute;n</option>
							    	<option>Primera Linea</option>
							    	<option>De Pre a Post</option>
							    </select>
							</div>
							<div class="form-group col-md-4" style="display: inline-block;">
							    <label for="exampleInputEmail1">Regi&oacute;n</label>
							    <select class="form-control">
							    	<option>Migraci&oacute;n</option>
							    	<option>Primera Linea</option>
							    	<option>De Pre a Post</option>
							    </select>
							</div>
							<div class="form-group col-md-5" style="display: inline-block;">
							    <label for="exampleInputEmail1">Comuna</label>
							    <select class="form-control">
							    	<option>Migraci&oacute;n</option>
							    	<option>Primera Linea</option>
							    	<option>De Pre a Post</option>
							    </select>
							</div>
							<div class="form-group col-md-2" style="display: inline-block;">
							    <label for="exampleInputEmail1">Zona RM</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
                          </div>
                          <!-- -->
                          <div class="tab-pane fade" id="abono" role="tabpanel" aria-labelledby="contact-tab4">
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
                          </div>
                        </div>
                      </form>
                      </div>
                    
                      
                    
         			</div> <!-- FIN del ROW -->
         		</div>

     		</div>
  		</div>
	</div>
</div>
@endsection