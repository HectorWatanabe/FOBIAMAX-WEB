@extends('layouts.app')

@section('content')

<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				Cita
			</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<tr><td>Código: </td><td>{{ $meeting->id }} </td></tr>
						<tr><td>Nombre: </td><td>{{ $meeting->patient->name }} </td></tr>
						<tr><td>Apellido: </td><td>{{ $meeting->patient->last_name }} </td></tr>
						<tr><td>Apellido Materno: </td><td>{{ $meeting->patient->mother_last_name }} </td></tr>
						<tr><td>Día: </td><td>{{ date("d/m/y", strtotime($meeting->date))  }} </td></tr>
						<tr><td>Hora: </td><td>{{ date("h:i a", strtotime($meeting->hour)) }}</td></tr>
						<tr><td>Criterio Clínico: </td><td>{{ $meeting->clinical_criteria }} </td></tr>
						<tr><td>USAS: </td><td>{{ $meeting->usas }} </td></tr>
						<tr><td>Diagnóstico: </td><td>{{ $meeting->diagnosis }} </td></tr>
						<tr><td>Nivel de sudoración: </td><td>{{ $meeting->sweating_measure }} </td></tr>
						<tr><td>Nivel de pulsos: </td><td>{{ $meeting->pulse }} </td></tr>
						<tr><td>Preguntas: </td><td>{{ $meeting->task }} </td></tr>
						<tr><td>Descripción: </td><td>{{ $meeting->description }} </td></tr>
					</table>
				</div>
				<div class="panel-footer text-left">
					<a href="{{ route('meetings') }}" class="btn-default btn"> Regresar</a>
				</div>
			</div>
		</div>
	</div>

@endsection()