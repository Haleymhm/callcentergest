<li class="menu-header">Ventas</li>
<li><a class="nav-link" href="{{ url('sales/sales') }}"><i class="fas fa-pencil-ruler"></i> <span>Sales v1</span></a></li>
<li><a class="nav-link" href="{{ url('sales/sales') }}"><i class="fas fa-pencil-ruler"></i> <span>Sales v2</span></a></li>
<li class="nav-item dropdown">
	<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Reportes</span></a>
	<ul class="dropdown-menu">
	  <li><a class="nav-link" href="layout-default.html">General</a></li>
	  <li><a class="nav-link" href="layout-transparent.html">Por Ejecutivo</a></li>
	  <li><a class="nav-link" href="layout-top-navigation.html">Calls</a></li>
	  <li><a class="nav-link" href="layout-default.html">Sucursales</a></li>
	  <li><a class="nav-link" href="layout-transparent.html">Canales</a></li>
	  <li><a class="nav-link" href="layout-top-navigation.html">Planes</a></li>
	</ul>
</li>
<li class="nav-item dropdown">
	<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Configuraci&oacute;n</span></a>
	<ul class="dropdown-menu">
		<li><a class="nav-link" href="{{ asset('sales/branch') }}">Sucursales</a></li>
		<li><a class="nav-link" href="{{ asset('sales/brand') }}">Equipos</a></li>
		<li><a class="nav-link" href="{{ asset('sales/channel') }}">Marcas</a></li>
		<li><a class="nav-link" href="/sales/branch">Branch offices</a></li>
		<li><a class="nav-link" href="layout-transparent.html">Channels</a></li>
		<li><a class="nav-link" href="layout-top-navigation.html">Planes</a></li>
	</ul>
</li>