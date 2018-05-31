@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Citas</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body table-responsive">
					<div class="text-right">
						<a href="{{ route('meeting-create') }}" class="btn-success btn">Registrar Cita</a>
					</div>
					<hr>
					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th>Código</th>
					      <th>Paciente</th>
					      <th>Apellido</th>
					      <th>Apellido Materno</th>
					      <th>Fecha</th>
					      <th>Hora</th>
					      <th>Opciones</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($meetings as $meeting)
					    <tr>
					      <td>{{ $meeting->id }}</td>
					      <td>{{ $meeting->patient->name }}</td>
					      <td>{{ $meeting->patient->last_name }}</td>
					      <td>{{ $meeting->patient->mother_last_name }}</td>
					      <td>{{ date("d/m/y", strtotime($meeting->date)) }}</td>
					      <td>{{ date("h:i a", strtotime($meeting->hour))  }}</td>
					      <td>
					      	<div class="row">
					      		<a href="{{ route('meeting-show', $meeting->id)}}" class="btn-primary btn">
					      			<i class="fa fa-search"></i>
					      		</a>
				      			<a href="{{ route('meeting-edit', $meeting->id)}}" class="btn-warning btn">
				      				<i class="fa fa-refresh"></i>
				      			</a>
				      			<form action="{{ route('meeting-destroy', $meeting->id )}}" method="post" style="display: inline-block;">
			      				{!! csrf_field() !!}
			      				<button type="submit" class="btn-danger btn">
			      					<i class="fa fa-times"></i>
			      				</button>
			      			</form>
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