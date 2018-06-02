@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Editar Cita</h1>
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
					{!! Form::open(['route' => ['meeting-update', $meeting->id], 'method' => 'PATCH', 'class' => 'form']) !!}
						<div class="form-group">
							{!! Form::label('meeting_code', 'Código Cita: '.$meeting->id) !!}
						</div>
						<div class="form-group">
							{!! Form::label('patient_code', 'Código Paciente: '.$meeting->patient->id) !!}
						</div>
						<div class="form-group">
							{!! Form::label('patient_full_name', 'Paciente: '.$meeting->patient->name.' '.$meeting->patient->last_name.' '.$meeting->patient->mother_last_name) !!}
						</div>
						<div class="form-group">
							{!! Form::label('date', 'Fecha') !!}
							{!! Form::date('date', $meeting->date, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('hour', 'Hora') !!}
							{!! Form::time('hour', $meeting->hour , ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('clinical_criteria', 'Criterio Clínico') !!}
							{!! Form::textarea('clinical_criteria', $meeting->clinical_criteria, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('usas', 'USAS') !!}
							{!! Form::number('usas', $meeting->usas , ['class' => 'form-control', 'step' => '.01']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('diagnosis', 'Diagnóstico') !!}
							{!! Form::textarea('diagnosis', $meeting->diagnosis , ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('sweating_measure', 'Nivel de Sudor') !!}
							{!! Form::number('sweating_measure', $meeting->sweating_measure, ['class' => 'form-control', 'step' => '.01']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('pulse', 'Nivel de Pulso') !!}
							{!! Form::number('pulse', $meeting->pulse, ['class' => 'form-control', 'step' => '.01']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('task', 'Tareas') !!}
							{!! Form::textarea('task', $meeting->task, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('description', 'Descripción') !!}
							{!! Form::textarea('description', $meeting->description, ['class' => 'form-control']) !!}
						</div>
						<div class="panel-footer">
							<div class="row text-left">
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