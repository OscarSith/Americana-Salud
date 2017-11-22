@extends('layout.master')

@section('content')
<div class="row">
	<div class="col-md-3 hidden-sm hidden-xs">
		@include('partials.fb-iframe')
	</div>
	<div class="col-lg-9 col-md-9 col-sm-12">
		<div class="row">
			<div class="col-sm-12">
	    		<span class="title">{{ $product->name }}</span>
	    	</div>
	        <div class="col-sm-12 hero-feature">
				<div class="row">
					<div class="col-sm-6">
						<!-- Main Image -->
						<div class="product-main-image-container">
							<img src="{{ asset('img/loader.gif') }}" alt="" class="product-loader">
							<span class="thumbnail product-main-image">
								<img src="{{ asset('img/products/' . $product->default_img) }}" alt="{{ $product->default_img }}">
							</span>
						</div>
						<!-- End Main Image -->
						<!-- Thumbnail Image -->
						@foreach($images as $image)
						<div class="col-xs-3 product-thumb-image">
							<?php $url_img = asset('img/products/' . $image->img); ?>
							<a href="{{ $url_img }}" class="thumbnail">
								<img src="{{ $url_img }}" alt="{{ $image->img }}">
							</a>
						</div>
						@endforeach
						<!-- End Thumbnail Image -->
					</div>

					<div class="visible-xs">
						<div class="clearfix"></div>
					</div>

					<div class="col-sm-6">
						<div class="well product-short-detail">
							<div class="row">
								<div class="the-list">
									<h3 class="col-xs-12">
										<!-- <span class="price-old">$169</span> -->
										{{ $product->currency == 'S' ? 'S/. ' : '$. '}} {{ $product->price }}
									</h3>
								</div>
								<div class="the-list">
									<div class="col-xs-4">
										<span>Disponible</span>
									</div>
									<div class="col-xs-8">
										<!-- <span class="red">OUT OF STOCK</span> -->
										<span class="green">En Stock</span>
									</div>
								</div>
								<div class="clearfix"></div>
								<hr/>
								{!! Form::open(['route' => 'agregarCarrito', 'method' => 'post']) !!}
								<input type="hidden" name="product_id" value="{{ $product->id }}">
								<div class="col-xs-12 input-qty-detail">
									<input type="text" name="quantity" class="form-control input-qty text-center" value="1">
									<button class="btn btn-default pull-left"><i class="fa fa-shopping-cart"></i> Quiero</button>
								</div>
								{!! Form::close() !!}
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
					<br clear="all"/>

					<div class="col-xs-12 product-detail-tab">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#desc" data-toggle="tab">Descripción</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="desc">
								<div class="well well-sm">
									{!! $product->description !!}
								</div>
							</div>
						</div>
					</div>
				</div>
	        </div>
		</div>
	</div>
</div>
@stop

@section('script')
<script src="{{ asset('js/bootstrap.touchspin.js') }}"></script>
<script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
@stop