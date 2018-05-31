@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Crear Cita</h1>
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
					{!! Form::open(['route' => 'meeting-store', 'method' => 'POST', 'class' => 'form']) !!}
						<div class="form-group">
							{!! Form::label('patient_id', 'Código Paciente') !!}
							{!! Form::text('patient_id', '', ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('date', 'Fecha') !!}
							{!! Form::date('date', '', ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('hour', 'Hora') !!}
								{!! Form::time('hour', '' , ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('clinical_criteria', 'Criterio Clínico') !!}
							{!! Form::textarea('clinical_criteria', '', ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('usas', 'USAS') !!}
							{!! Form::number('usas', '' , ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('diagnosis', 'Diagnóstico') !!}
							{!! Form::textarea('diagnosis', '' , ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('sweating_measure', 'Nivel de Sudor') !!}
							{!! Form::number('sweating_measure', '', ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('pulse', 'Nivel de Pulso') !!}
								{!! Form::number('pulse', '', ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('task', 'Tareas') !!}
							{!! Form::textarea('task', '', ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('description', 'Descripción') !!}
							{!! Form::textarea('description', '', ['class' => 'form-control']) !!}
						</div>
						<div class="panel-footer">
							<div class="row">
								{!! Form::submit('Enviar', ['class' => 'btn-primary btn']) !!} 
								<a href="{{ route('meetings') }}" class="btn-default btn"> Regresar</a>
							</div>
						 </div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection