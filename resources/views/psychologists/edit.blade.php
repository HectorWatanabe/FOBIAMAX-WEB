@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Actualizar a {!! $psychologist->user->name !!}</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
				@if (count($errors) > 0)
					<div class="alert alert-danger" role="alert">
						<strong>Corrige los siguientes errores:<strong><br>
					        @foreach ($errors->all() as $message)
					            <strong>{{ $message }}<strong><br>
					        @endforeach
					</div>
				@endif
				{!! Form::open(['route' => ['psychologist-update', $psychologist->id], 'method' => 'PATCH', 'class' => 'form']) !!}
					<div class="form-group">
						{!! Form::label('name', 'Nombre') !!}
						{!! Form::text('name', $psychologist->user->name, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('last_name', 'Apellido') !!}
						{!! Form::text('last_name', $psychologist->user->last_name, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('mother_last_name', 'Apellido Materno') !!}
						{!! Form::text('mother_last_name', $psychologist->user->mother_last_name, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('email', 'Correo') !!}
						{!! Form::text('email', $psychologist->user->email, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('description', 'Descripción') !!}
						{!! Form::textarea('description', $psychologist->description, ['class' => 'form-control', 'rows' => 3]) !!}
					</div>
					<div class="form-group">
						{!! Form::label('activa', 'Cambiar Contraseña') !!}
						{!! Form::checkbox('activa', 'true', false, [ 'onClick' => 'activar()']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('password', 'Contraseña') !!}
						{!! Form::text('password', '', ['class' => 'form-control', 'disabled' => 'disabled']) !!}
						<p>Ingresa una contraseña de minimo 6 caracteres.<p>
					</div>
					<div class="panel-footer">
						<div class="row text-center">
						{!! Form::submit('Enviar', ['class' => 'btn-primary btn']) !!} 
						<a href="{{ route('psychologists') }}" class="btn-default btn">Regresar</a>
						</div>
					 </div>
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">

		var checkBox = document.getElementById("activa");
		var password = document.getElementById("password");

		checkBox.checked = false;
		password.value = "";

		function activar()
		{
			var checkBox = document.getElementById("activa");
			if (checkBox.checked == true)
			    document.getElementById("password").disabled = false;
			else
			    document.getElementById("password").disabled = true;	
		}
	</script>
@endsection