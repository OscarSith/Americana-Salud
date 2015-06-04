<div class="col-sm-6 col-md-4">
	<div class="thumbnail">
		<img src="{{ asset('img/products/' . $rec->default_img) }}" alt="{{ $rec->name}}">
		<div class="caption">
			<h3>{{ $rec->name }}<br>{{ $rec->codigo }}</h3>
			<p>{{ $rec->short_info }}</p>
			<p>{{ $rec->price }}</p>
			<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
		</div>
	</div>
</div>