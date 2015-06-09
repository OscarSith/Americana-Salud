@extends('layout.master')

@section('content')
    <div class="row">
    	<div class="col-md-3 col-sm-12">
            <div class="col-sm-12">
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
    	</div>

    	<div class="clearfix visible-sm"></div>

    	<!-- Cart -->
    	<div class="col-lg-9 col-md-9 col-sm-12">
    		<div class="col-lg-12 col-sm-12">
        		<span class="title">CHECKOUT</span>
        	</div>
            <div class="col-lg-12 col-sm-12 hero-feature">
    			<table class="table table-bordered tbl-checkout">
    				<tbody>
                        <tr>
                            <td>First Name</td>
                            <td>
                                <input type="text" name="" class="form-control" />
                            </td>
                            <td>Last Name</td>
                            <td>
                                <input type="text" name="" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="text" name="" class="form-control" />
                            </td>
                            <td>Telephone</td>
                            <td>
                                <input type="text" name="" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td colspan="3">
                                <textarea name="" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>
                                <input type="text" name="" class="form-control" />
                            </td>
                            <td>Post Code</td>
                            <td>
                                <input type="text" name="" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>
                                <select class="form-control">
                                    <option value=""> --- Please Select --- </option>
                                    <option value="244">Aaland Islands</option>
                                    <option value="1">Afghanistan</option>
                                    <option value="2">Albania</option>
                                  </select>
                            </td>
                        </tr>
                    </tbody>
    			</table>
                <table class="table table-bordered tbl-cart">
                    <thead>
                        <tr>
                            <td>Product Name</td>
                            <td class="td-qty">Quantity</td>
                            <td>Unit Price</td>
                            <td>Sub Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $product['name'] }}</td>
                            <td>1</td>
                            <td class="price">S/. {{ number_format($product['price'] / 1.18, 2)  }}</td>
                            <td>S/. {{ $product['price'] }}</td>
                            <td class="text-center">
                                <a href="#" class="remove_cart" rel="2">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="right">Costo de envío</td>
                            <td class="total" colspan="2"><b>S/. 5.00</b></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <td class="total" colspan="2"><b>S/. {{ number_format($product['price'] + 5, 2) }}</b></td>
                        </tr>
                    </tbody>
                </table>
    			<div class="btn-group btns-cart">
                    <a href="{{ route('cancelarPedido') }}" class="btn btn-danger">Cancelar</a>
    				<button type="button" class="btn btn-primary">Confirmar Pedido</button>
    			</div>

            </div>
    	</div>
    	<!-- End Cart -->
    </div>
@stop