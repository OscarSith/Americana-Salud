@extends('layout.master')

@section('content')
    <div class="row">
    	<div class="col-md-3 col-sm-12">
            <div class="no-padding">
                <span class="title">PRODUCTO SELECCIONADO</span>
            </div>
            <div class="thumbnail col-md-12 col-sm-6 text-center">
                <a href="{{ route('detailProduct', $product['id']) }}" class="link-p">
                    <img src="{{ asset('img/products/' . $product['default_img']) }}" alt="">
                </a>
                <div class="caption prod-caption">
                    <h4>
                        <a href="{{ route('detailProduct', $product['id']) }}">{{ $product['name']}}</a>
                    </h4>
                    <p>{{ $product['short_info'] }}</p>
                </div>
            </div>
    	</div>
    	<!-- Cart -->
    	<div class="col-md-9 col-sm-12">
            <div class="row">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title">CHECKOUT</span>
            	</div>
                <div class="col-lg-12 col-sm-12 hero-feature">
                    @include('partials.errors')
                    {!! Form::open(['route' => 'sendOrder']) !!}
        			<table class="table table-bordered tbl-checkout">
        				<tbody>
                            <tr>
                                <td>Nombre Completo</td>
                                <td colspan="4">
                                    {!! Form::text('full_name', session('client')->nombres . ' ' . session('client')->apellido , ['class' => 'form-control']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>Teléfono 1</td>
                                <td>
                                    {!! Form::text('telefono1', session('client')->telefono, ['class' => 'form-control']) !!}
                                </td>
                                <td>Teléfono 2</td>
                                <td>
                                    {!! Form::text('telefono2', null, ['class' => 'form-control']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>Dirección</td>
                                <td colspan="3">
                                    {!! Form::textarea('direccion', session('client')->direccion, ['class' => 'form-control', 'style' => 'height:60px']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>Referencia</td>
                                <td colspan="3">
                                    {!! Form::text('referencia', null, ['class' => 'form-control']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>País</td>
                                <td>
                                    {!! Form::select('pais', $paises, null, ['class' => 'form-control']) !!}
                                </td>
                                <td>Ciudad - Estado</td>
                                <td>
                                    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
                                </td>
                            </tr>
                        </tbody>
        			</table>
                    <table class="table table-bordered tbl-cart">
                        <thead>
                            <tr>
                                <td>Nombre Producto</td>
                                <td>Precio Unitario</td>
                                <td class="td-qty">Cantidad</td>
                                <td>Precio Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sinIgv = $product['price'] / 1.18;
                            $totalSinImpuesto = number_format($sinIgv * (int) session('quanty'), 2);
                            $totalPagar = $product['price'] * (int) session('quanty');
                            ?>
                            <tr>
                                <td>{{ $product['name'] }}</td>
                                <td class="price">S/. {{ number_format($sinIgv, 2)  }}</td>
                                <td>{{ session('quanty') }}</td>
                                <td>S/. {{ $totalSinImpuesto }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" align="right">IGV</td>
                                <td class="total" colspan="2"><b>S/. {{ number_format($totalPagar - $totalSinImpuesto, 2)}}</b></td>
                            </tr>
                            <tr>
                                <td colspan="3" align="right">Costo de envío</td>
                                <td class="total" colspan="2"><b>S/. 0.00</b></td>
                            </tr>
                            <tr>
                                <td colspan="3" align="right">Total</td>
                                <td class="total"><b>S/. {{ number_format($totalPagar, 2) }}</b></td>
                            </tr>
                        </tbody>
                    </table>
        			<div class="btn-group btns-cart">
                        <a href="{{ route('cancelarPedido') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
        				<button class="btn btn-primary"><i class="fa fa-check"></i> Confirmar Pedido</button>
        			</div>
                    {!! Form::close() !!}
                </div>
            </div>
    	</div>
    	<!-- End Cart -->
    </div>
@stop