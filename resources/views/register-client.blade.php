@extends('layout.master')

@section('content')
    <div class="col-sm-8 col-sm-offset-2">
        <div class="white-container pt0">
            <span class="title">REGISTRAR</span>
            <p>Llene el siguiente formualario para el proceso de compra</p>
			@include('partials.errors')
            {!! Form::open(['route' => 'clientRegister']) !!}
                <div class="col-lg-6">
                    <label for="nombres">Nombre</label>
                    {!! Form::text('nombres', null, ['class'=>'form-control']) !!}
                    <br clear="all"/>
                </div>
                <div class="col-sm-6">
                    <label for="apellido">Apellido</label>
                    {!! Form::text('apellido', null, ['class'=>'form-control']) !!}
                    <br clear="all"/>
                </div>
                <div class="col-xs-12">
                    <label for="correo">Correo Electrónico</label>
                    {!! Form::email('correo', null, ['class'=>'form-control']) !!}
                    <br clear="all"/>
                </div>
                <div class="col-sm-5">
                    <label for="telefono">Teléfono</label>
                    {!! Form::text('telefono', null, ['class'=>'form-control', 'type' => 'tel']) !!}
                    <br clear="all"/>
                </div>
                <div class="col-xs-12">
                    <label for="direccion">Dirección</label>
                    {!! Form::text('direccion', null, ['class'=>'form-control']) !!}
                    <br clear="all"/>
                </div>
                <div class="col-xs-6">
                    <label for="cantidad">Cantidad Solicitada</label>
                    {!! Form::text('cantidad', null, ['class'=>'form-control']) !!}
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