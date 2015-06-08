@extends('layout.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Listado de Imagenes</div>
				<div class="panel-body">
					{!! Form::open(['route' => 'addImageToProduct', 'files' => true]) !!}
						{!! Form::hidden('product_id', $id) !!}
						<div class="form-group">
							<div class="row">
								<div class="col-sm-8">
									{!! Form::file('img', ['class' => 'form-control']) !!}
								</div>
								<div class="col-sm-4">
									<button class="btn btn-primary">Agregar</button>
								</div>
							</div>
						</div>
					{!! Form::close() !!}
					<hr>
					@include('partials.message-info')
					<div class="row">
					@if(!$images->isEmpty())
					@foreach($images as $rec)
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail {{$default_img}} {{ $default_img === $rec->img ? 'current-default' : '' }}">
								<img src="{{ asset('img/products/' . $rec->img) }}" alt="{{ $rec->img}}">
								<hr>
								{!! Form::open(['route' => ['delImageToProduct', $rec->id], 'method' => 'DELETE', 'style' => 'display:inline-block']) !!}
								<button class="btn btn-danger">Eliminar</button>
								{!! Form::close() !!}
								@if($default_img !== $rec->img)
									{!! Form::open(['route' => ['setDefaultImage', $id], 'method' => 'put', 'class' => 'pull-rigth', 'style' => 'display:inline-block']) !!}
									{!! Form::hidden('default_img', $rec->img) !!}
									<button class="btn btn-warning" title="Establecer esta imagen como vista inicial">Por defecto</button>
									{!! Form::close() !!}
								@endif
							</div>
						</div>
					@endforeach
					@else
						<p>No hay datos que mostrar</p>
					@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
