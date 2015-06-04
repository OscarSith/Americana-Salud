<div class="col-sm-6 col-md-4">
	<div class="thumbnail">
		<img src="{{ asset('img/products/' . $rec->default_img) }}" alt="{{ $rec->name}}">
		<div class="caption">
			<h3>{{ $rec->name }}<br>{{ $rec->codigo }}</h3>
			<p>{{ $rec->short_info }}</p>
			<p>{{ $rec->price }}</p>
			<p>
				<a href="{{ route('productShow', $rec->id) }}" class="btn btn-primary" role="button">Editar</a>
			</p>
		</div>
	</div>
</div>