@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Psicólogos</h1>
		</div>
	</div>

	<div class="row">
		@if (Session::has('success'))
			<div class="alert alert-success">{{ Session::get('success') }}</div>
		@endif
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body table-responsive">
					<div class="text-right">
						<a href="{{ route('psychologist-create') }}" class="btn-success btn">
							Registrar Psicólogo
						</a>	
					</div>
					<hr>
					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th>Código</th>
					      <th>Nombre</th>
					      <th>Apellido</th>
					      <th>Apellido Materno</th>
					      <th>Email</th>
					      <th>Estado</th>
					      <th>Opciones</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($psychologists as $psychologist)
					    <tr>
					      <td>{{ $psychologist->code }}</td>
					      <td>{{ $psychologist->user->name }}</td>
					      <td>{{ $psychologist->user->last_name }}</td>
					      <td>{{ $psychologist->user->mother_last_name }}</td>
					      <td>{{ $psychologist->user->email }}</td>
					      <td>
					      		@if($psychologist->user->state == 0)
					      			Activo
					      		@else
					      			Inactivo
					      		@endif
					      </td>
					      <td>
				      		<a href="{{ route('psychologist-show', $psychologist->id)}}" class="btn-primary btn">
				      			<i class="fa fa-search"></i>
				      		</a>
			      			<a href="{{ route('psychologist-edit', $psychologist->id)}}" class="btn-warning btn" style="display: inline-block;">
			      				<i class="fa fa-refresh"></i>
			      			</a>
			      			<form action="{{ route('psychologist-change', $psychologist->id )}}" method="post" style="display: inline-block;">
			      				{!! csrf_field() !!}
			      				<button type="submit" class="btn-danger btn">
			      					<i class="fa fa-times"></i>
			      				</button>
			      			</form>
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