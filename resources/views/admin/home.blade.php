@extends('layout.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Listado de Productos <a href="{{ route('productCreate') }}" class="btn btn-primary">Nuevo Producto</a></div>

				<div class="panel-body">
					<ul>
					@each('record.item', $products, 'rec', 'record.no-items')
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
