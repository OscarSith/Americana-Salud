@extends('layout.master')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<h2 class="text-center">Listado del Carrito</h2>
			<div class="table-responsive">
				<table class="table table-responsive table-bordered">
					<thead>
					<tr>
						<th>#ID</th>
						<th>Nombre</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Total</th>
						<th>Acciones</th>
					</tr>
					</thead>
					<tbody>
					@if (Session::has('cart'))
						@foreach(session('cart') as $item)
						<tr>
							<td>{{ $item['codigo'] }}</td>
							<td>{{ $item['name'] }}</td>
							<td>{{ $item['currency'] === 'S' ? 'S/. ' : '$.' }} {{ $item['price'] }}</td>
							<td>{{ $item['quantity'] }}</td>
							<td>{{ $item['currency'] === 'S' ? 'S/. ' : '$.' }} {{ $item['price'] * $item['quantity'] }}</td>
							<td>
								{!! Form::open(['route' => 'deleteItemCart', 'method' => 'delete']) !!}
									<input type="hidden" name="id" value="{{ $item['id'] }}">
									<button class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
						@endforeach
					@else
						<tr>
							<td colspan="6">
								<p>No hay items agregados al carrito</p>
							</td>
						</tr>
					@endif
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-sm-12">
			<a href="{{ url('productos') }}" class="btn btn-primary pull-left"> <i class="fa fa-chevron-left fa-fw"></i> Ir al listado de Productos</a>
			@if (Session::has('cart'))
			<a href="{{ url('registrar-datos') }}" class="btn btn-success pull-right">Continuar Proceso de Pago <i class="fa fa-credit-card fa-fw"></i></a>
			@endif
		</div>
	</div>
	<br><br>
@stop