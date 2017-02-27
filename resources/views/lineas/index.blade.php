@extends('layout')

@section('content')
	<div class="container fluid">
		<h3>Líneas de Transporte</h3>
		<ul>
			@foreach ($lineas as $linea)
				<li>{{ $linea->razon_social }}</li>
			@endforeach
		</ul>
	</div>
@stop