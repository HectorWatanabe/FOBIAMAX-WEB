@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Pacientes</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body table-responsive">
					<div class="text-right">
						<a href="{{ route('patient-create') }}" class="btn-success btn">Registrar Paciente</a>
					</div>
					<hr>
					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th>Código</th>
					      <th>Nombre</th>
					      <th>Apellido</th>
					      <th>Apellido Materno</th>
					      <th>Documento</th>
					      <th>N° Documento</th>
					      <th>Opciones</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($patients as $patient)
					    <tr>
					      <td>{{ $patient->id }}</td>
					      <td>{{ $patient->name }}</td>
					      <td>{{ $patient->last_name }}</td>
					      <td>{{ $patient->mother_last_name }}</td>
					      <td>{{ $patient->document }}</td>
					      <td>{{ $patient->n_document }}</td>
					      <td>
					      	<div class="row">
					      		<a href="{{ route('patient-show', $patient->id)}}" class="btn-primary btn">
					      			<i class="fa fa-search"></i>
					      		</a>
				      			<a href="{{ route('patient-edit', $patient->id)}}" class="btn-warning btn">
				      				<i class="fa fa-refresh"></i>
				      			</a>
					      	</div>
					      </td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection