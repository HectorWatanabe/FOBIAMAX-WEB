@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Crear Cliente</h1>
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
					@include('patients.form', ['route' => ['patient-store'], 'method' => 'POST'])
				</div>
			</div>
		</div>
	</div>
@endsection