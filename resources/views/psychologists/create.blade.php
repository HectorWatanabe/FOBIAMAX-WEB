@extends('layouts.app')

@section('content')
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Crear Psicólogo</h1>
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
					{!! Form::open(['route' => 'psychologist-store', 'method' => 'POST', 'class' => 'form']) !!}
						<div class="form-group">
							{!! Form::label('name', 'Nombre') !!}
							{!! Form::text('name', '', ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('last_name', 'Apellido') !!}
							{!! Form::text('last_name', '', ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('mother_last_name', 'Apellido Materno') !!}
							{!! Form::text('mother_last_name', '' , ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('email', 'Correo') !!}
							{!! Form::text('email', '', ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('code', 'Código') !!}
							{!! Form::text('code', '' , ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('specialty', 'Especialidad') !!}
							{!! Form::text('specialty', '' , ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('description', 'Descripción') !!}
							{!! Form::textarea('description', '', ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('password', 'Contraseña') !!}
							{!! Form::text('password', '', ['class' => 'form-control']) !!}
						</div>
						<div class="panel-footer">
							<div class="row text-center">
								{!! Form::submit('Enviar', ['class' => 'btn-primary btn']) !!} 
								<a href="{{ route('psychologists') }}" class="btn-default btn"> Regresar</a>
							</div>
						 </div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection