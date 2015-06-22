@extends('layout.master')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="col-lg-12 col-sm-12">
			<span class="title">NUESTROS PRODUCTOS</span>
		</div>
		<div class="col-lg-12 col-sm-12 hero-feature">
			@foreach($products as $rec)
				<div class="col-sm-3 col-xs-12 hero-feature text-center">
					<div class="thumbnail">
						<?php $link_detail = route('detailProduct', $rec->id); ?>
						<a href="{{ $link_detail }}" class="link-p">
							<img src="{{ asset('img/products/' . $rec->default_img) }}" alt="{{ $rec->default_img }}">
						</a>
						<div class="caption prod-caption">
							<h4><a href="{{ $link_detail }}">{{ $rec->name }}</a></h4>
							<p>{{ $rec->short_info }}</p>
							<p>
								<div class="btn-group">
									<span class="btn btn-default">{{ $rec->price }}</span>
									<a href="{{ $link_detail }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Comprar</a>
								</div>
							</p>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>
@stop