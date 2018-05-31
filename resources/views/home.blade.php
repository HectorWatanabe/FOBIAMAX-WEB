@extends('layouts.minimal_admin')   

@section('banner')
	<span>Dashboard</span>
@endsection

@section('content')
	<div class="blank-page">		
		<p>Bienvenido {{ Auth::user()->role }}</p>			
	</div>

	<br>

	@if(Auth::user()->role == "Administrador")
	<div class="col-md-4 ">
		<div class="content-top-1">
			<div class="col-md-6 top-content">
				<h5>Psicólogos</h5>
				<label>20</label>
			</div>
			 <div class="clearfix"> </div>
		</div>
	</div>
	<div class="col-md-4 ">
		<div class="content-top-1">
			<div class="col-md-6 top-content">
				<h5>Clientes</h5>
				<label>20</label>
			</div>
			 <div class="clearfix"> </div>
		</div>
	</div>
	@endif
	
@endsection