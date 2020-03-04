@extends('layouts.app')

@section('content')

      <div class="section-header">
            <h1>Inicio</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item"><a href="/home">inicio</a></div>
            <!--  <div class="breadcrumb-item">Profile</div> -->
            </div>
          </div>
      <div class="section-body">
            @include('partials.tablero') 
      </div>

@endsection
