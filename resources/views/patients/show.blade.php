@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				Cliente {{ $patient->name }} {{ $patient->last_name }} {{ $patient->mother_last_name }}
			</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<tr><td>Código: </td><td>{{ $patient->id }} </td></tr>
						<tr><td>Nombre: </td><td>{{ $patient->name }} </td></tr>
						<tr><td>Apellido: </td><td>{{ $patient->last_name }} </td></tr>
						<tr><td>Apellido Materno: </td><td>{{ $patient->mother_last_name }} </td></tr>
						<tr><td>Documento: </td><td>{{ $patient->document }} </td></tr>
						<tr><td>N° Documento: </td><td>{{ $patient->n_document }}</td></tr>
						<tr><td>Estado Civil: </td><td>{{ $patient->civil_status }} </td></tr>
						<tr><td>Genero: </td><td>{{ $patient->gender }} </td></tr>
						<tr><td>Dirección: </td><td>{{ $patient->address }} </td></tr>
						<tr><td>Grado de Instrucción: </td><td>{{ $patient->degree_of_instruction }} </td></tr>
					</table>
				</div>
				<div class="panel-footer text-left">
					<a href="{{ route('patients') }}" class="btn-default btn"> Regresar</a>
				 </div>
			</div>
		</div>
	</div>

@endsection()
