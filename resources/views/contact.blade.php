@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-md-3 col-sm-12 hidden-sm hidden-xs">
        <div class="no-padding">
            <span class="title1">Cobertura en todo el Perú</span>
        </div>
        @include('partials.fb-iframe')
	</div>
	<div class="col-lg-9 col-md-9 col-sm-12">
		<div class="col-lg-12 col-sm-12">
    		<span class="title">CONTÁCTANOS</span>
    	</div>
        <div class="col-lg-12 col-sm-12 hero-feature">
            @include('partials.message-info')
            @include('partials.errors')
            {!! Form::open(['route' => 'sendContact']) !!}
            <table class="table table-bordered tbl-checkout">
                <tbody>
                    <tr>
                        <td>Nombre</td>
                        <td>
                            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                        </td>
                    </tr>
                  <!--   <tr>
                        <td>Last Name</td>
                        <td>
                            {!! Form::text('', null, ['class' => 'form-control']) !!}
                        </td>
                    </tr> -->
                    <tr>
                        <td>Correo</td>
                        <td>
                            {!! Form::email('correo', null, ['class' => 'form-control']) !!}
                        </td>
                    </tr>
                  <!--   <tr>
                        <td>Telephone</td>
                        <td>
                            {!! Form::text('', null, ['class' => 'form-control']) !!}
                        </td>
                    </tr> -->
                    <tr>
                        <td>Consulta</td>
                        <td colspan="3">
                            {!! Form::textarea('consulta', null, ['class' => 'form-control']) !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-group btns-cart">
                <button class="btn btn-primary">Enviar</button>
            </div>
            {!! Form::close() !!}
        </div>
	</div>
</div>
@stop