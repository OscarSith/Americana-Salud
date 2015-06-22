<div class="col-sm-6 col-md-4">
	<div class="thumbnail">
		<img src="{{ asset('img/products/' . $rec->default_img) }}" alt="{{ $rec->name}}">
		<div class="caption">
			<h3>{{ $rec->name }}<br>{{ $rec->codigo }}</h3>
			<p>{{ $rec->short_info }}</p>
			<p>{{ $rec->price }}</p>
			<div>
				<a href="{{ route('productShow', $rec->id) }}" class="btn btn-default" role="button">Editar</a>
				{!! Form::open(['route' => ['changeStatus', $rec->id], 'method' => 'put', 'style' => 'display:inline-block']) !!}
				@if($rec->estado == 'A')
					{!! Form::hidden('status', 'E') !!}
					<button class="btn btn-danger">Inactivar</button>
				@else
					{!! Form::hidden('status', 'A') !!}
					<button class="btn btn-success">Activar</button>
				@endif
				<a href="{{ route('listImages', $rec->id) }}" class="btn btn-info">Imagenes</a>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>