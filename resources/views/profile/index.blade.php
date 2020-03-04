@extends('layouts.app')


@section('cssComponent')

@endsection


@section('content')

<div class="section-header">
    <h1>Perfil de Usuario</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="/home">Inicio</a></div>
        <div class="breadcrumb-item">Perfil</div>
    </div>
</div>

<div class="section-body">
	
    <div class="row mt-sm-4">
    	<div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Metas</div>
                        <div class="profile-widget-item-value">187</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Homologado</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Confirmados</div>
                        <div class="profile-widget-item-value">2,1K</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">{{ Auth::user()->name }} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Web Developer</div></div>
                    
                  </div>
                  
                </div>
              </div>



              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Editar Perfil</h4>
                    </div>
                    <form action="{{ route('profile.store') }}" autocomplete="on" method="POST" id="editProfile">
                    	@csrf
                    <div class="card-body">
                        <div class="row">
                        	<div class="form-group col-md-4 col-12">
                            <label>RUN</label>
                            <input type="text" class="form-control" name="run" value="{{ Auth::user()->run }}" required />
                          </div>
	                      <div class="form-group col-md-8 col-12">
	                        <label>Nombre Completo</label>
	                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required />
	                      </div>
                          
                        </div>

                        <div class="row">
                          <div class="form-group col-md-5 col-12">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required />
                          </div>

                          <div class="form-group col-md-3 col-12">
                            <label>Telefono</label>
                            <input type="tel" name="telephone" class="form-control" value="{{ Auth::user()->telephone }}">
                          </div>
                        
                          <div class="form-group col-md-4 col-12">
                            <label>Fecha de Nacimiento</label>
                            <input type="date" name="birthday" class="form-control" value="{{ Auth::user()->birthday }}" required />
                          </div>
                          
                        </div>

                        <div class="row">
                        	<div class="form-group col-md-5 col-12">
                            	<label>Password</label>
                            	<input type="passw" class="form-control" />
                         	</div>
                        </div>

                        
                        
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Actualizar</button>
                    </div>
                  </form>
                </div>
              </div>
    </div>
            
</div>

@endsection