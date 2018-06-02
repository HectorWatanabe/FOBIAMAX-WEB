{!! Form::open(['route' => $route, 'method' => $method, 'class' => 'form']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', $patient->name, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('last_name', 'Apellido') !!}
		{!! Form::text('last_name', $patient->last_name, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('mother_last_name', 'Apellido Materno') !!}
		{!! Form::text('mother_last_name', $patient->mother_last_name , ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('document', 'Tipo de Documento') !!}
		{!! Form::select('document', 
			[ 'DNI' => 'DNI' , 'DOCUMENTO DE EXTRANGERÍA'  => 'DOCUMENTO DE EXTRANGERÍA'] ,
			$patient->document,
			['class' => 'form-control']
		) !!}
	</div>
	<div class="form-group">
		{!! Form::label('n_document', 'N° Documento') !!}
		{!! Form::text('n_document', $patient->n_document , ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('civil_status', 'Estado Civil') !!}
		{!! Form::select('civil_status', 
			[ 'SOLTERO' => 'SOLTERO', 'CASADO' => 'CASADO', 'CONVIVIENTE' => 'CONVIVIENTE'],
			$patient->civil_status ,
			['class' => 'form-control']
		) !!}
	</div>
	<div class="form-group">
		{!! Form::label('gender', 'Genero') !!}
		{!! Form::select('gender', 
			[ 'MASCULINO' => 'MASCULINO' , 'FEMENINO' => 'FEMENINO' ],
			$patient->gender,
			['class' => 'form-control']
		 ) !!}
	</div>
	<div class="form-group">
		{!! Form::label('address', 'Dirección') !!}
		{!! Form::text('address', $patient->address, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('degree_of_instruction', 'Grado de Instrucción') !!}
		{!! Form::select('degree_of_instruction', 
			[ 'NINGUNO' => 'NINGUNO', 'PRIMARIA' => 'PRIMARIA', 'SECUNDARIA' => 'SECUNDARIA', 'INSTITUTO' => 'INSTITUTO' ,'SUPERIOR' => 'SUPERIOR' ],
			$patient->degree_of_instruction,
			['class' => 'form-control']
		) !!}
	</div>
	<div class="panel-footer">
		<div class="row text-left">
			{!! Form::submit('Enviar', ['class' => 'btn-primary btn']) !!} 
			<a href="{{ route('patients') }}" class="btn-default btn"> Regresar</a>
		</div>
	 </div>
{!! Form::close() !!}