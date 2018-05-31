@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				Perfil de Usuario
			</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<tr><td>Nombre: </td><td>{{ $user->name }} </td></tr>
						<tr><td>Apellido: </td><td>{{ $user->last_name }} </td></tr>
						<tr><td>Apellido Materno: </td><td>{{ $user->mother_last_name }} </td></tr>
						<tr><td>Correo: </td><td>{{ $user->email }} </td></tr>
						<tr><td>Tipo de Acceso: </td><td>{{ $user->role }} </td></tr>
					</table>
				</div>
				<div class="panel-footer text-left">
					<a href="{{ url('/') }}" class="btn-default btn"> Regresar</a>
				</div>
			</div>
		</div>
	</div>

@endsection