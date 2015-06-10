@extends('layout.master')

@section('content')
	<div class="col-sm-4">
		<div class="col-sm-12">
			<div class="no-padding">
				<span class="title">PRODUCTO SELECCIONADO</span>
			</div>
			<div class="thumbnail col-md-12 col-sm-6 text-center">
				<a href="{{ route('detailProduct', $product->id) }}" class="link-p">
					<img src="{{ asset('img/products/' . $product->default_img) }}" alt="">
				</a>
				<div class="caption prod-caption">
					<h4>
						<a href="{{ route('detailProduct', $product->id) }}">{{ $product->name}}</a>
					</h4>
					<p>{{ $product->short_info }}</p>
				</div>
			</div>
		</div>
    </div>
    <div class="col-sm-8">
        <div class="white-container pt0">
            <span class="title">REGISTRAR</span>
            <p>Llene el siguiente formualario para el proceso de compra del producto <strong>{{ $product->name }}</strong></p>
			@include('partials.errors')
            {!! Form::open(['route' => 'clientRegister']) !!}
            	<input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="col-lg-6 col-xs-12">
                    <label for="nombres">Nombre</label>
                    {!! Form::text('nombres', null, ['class'=>'form-control']) !!}
                    <br clear="all"/>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <label for="apellido">Apellido</label>
                    {!! Form::text('apellido', null, ['class'=>'form-control']) !!}
                    <br clear="all"/>
                </div>
                <div class="col-xs-12">
                    <label for="correo">Correo Electrónico</label>
                    {!! Form::email('correo', null, ['class'=>'form-control']) !!}
                    <br clear="all"/>
                </div>
                <div class="col-sm-5 col-xs-12">
                    <label for="telefono">Teléfono</label>
                    {!! Form::text('telefono', null, ['class'=>'form-control', 'type' => 'tel']) !!}
                    <br clear="all"/>
                </div>
                <div class="col-xs-12">
                    <label for="direccion">Dirección</label>
                    {!! Form::text('direccion', null, ['class'=>'form-control']) !!}
                    <br clear="all"/>
                </div>
                <div class="col-xs-2">
                    <label for="cantidad">Cantidad Solicitada</label>
                    {!! Form::text('cantidad', $quanty, ['class'=>'form-control']) !!}
                    <br clear="all"/>
                </div>
                <div class="clearfix"></div>
                <div class="checkbox">
                    <label>
                        {!! Form::checkbox('terminos') !!} Acepto los <a href="#terminos" data-toggle="modal">terminos y condiciones.</a>
                    </label>
                </div>
                <button class="btn btn-primary">Siguiente</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop