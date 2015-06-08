@extends('layout.app')

@section('content')
<div class="col-sm-8 col-sm-offset-2">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">Nuevo Producto</h4>
		</div>
		<div class="panel-body">
			@include('partials.errors')
			{!! Form::open(['route' => 'productStore', 'method' => 'post', 'files' => true, 'id' => 'frm-product']) !!}
				@include('partials.fields-product')
			{!! Form::close() !!}
		</div>
	</div>
</div>
@stop