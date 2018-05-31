@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				Psicólogo {{ $psychologist->user->name }} {{ $psychologist->user->last_name }} {{ $psychologist->user->mother_last_name }}
			</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<tr><td>Código: </td><td>{{ $psychologist->code }} </td></tr>
						<tr><td>Nombre: </td><td>{{ $psychologist->user->name }} </td></tr>
						<tr><td>Apellido: </td><td>{{ $psychologist->user->last_name }} </td></tr>
						<tr><td>Apellido Materno: </td><td>{{ $psychologist->user->mother_last_name }} </td></tr>
						<tr><td>Correo: </td><td>{{ $psychologist->user->email }} </td></tr>
						<tr><td>Estado: </td><td>@if($psychologist->user->state != 0) Desactivado @else Activado @endif </td></tr>
						<tr><td>Especialidad: </td><td>{{ $psychologist->specialty }} </td></tr>
						<tr><td>Descripción: </td><td>{{ $psychologist->description }} </td></tr>
					</table>
				</div>
				<div class="panel-footer text-left">
					<a href="{{ route('psychologists') }}" class="btn-default btn"> Regresar</a>
				</div>
			</div>
		</div>
	</div>

@endsection()

