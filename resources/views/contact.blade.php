@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="no-padding">
            <span class="title1">&nbsp;</span>
        </div>
            @include('partials.fb-iframe')
    	</div>

    	<div class="clearfix visible-sm"></div>

			<!-- Cart -->
    	<div class="col-lg-9 col-md-9 col-sm-12">
    		<div class="col-lg-12 col-sm-12">
        		<span class="title">CONTÁCTANOS</span>
        	</div>
            <div class="col-lg-12 col-sm-12 hero-feature">
                <table class="table table-bordered tbl-checkout">
                    <tbody>
                        <tr>
                            <td>Nombre</td>
                            <td>
                                <input type="text" name="" class="form-control" />
                            </td>
                        </tr>
                      <!--   <tr>
                            <td>Last Name</td>
                            <td>
                                <input type="text" name="" class="form-control" />
                            </td>
                        </tr> -->
                        <tr>
                            <td>E-mail</td>
                            <td>
                                <input type="text" name="" class="form-control" />
                            </td>
                        </tr>
                      <!--   <tr>
                            <td>Telephone</td>
                            <td>
                                <input type="text" name="" class="form-control" />
                            </td>
                        </tr> -->
                        <tr>
                            <td>Consulta</td>
                            <td colspan="3">
                                <textarea name="" class="form-control" rows="5"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-group btns-cart">
                    <button type="button" class="btn btn-primary">Enviar</button>
                </div>
            </div>
    	</div>
    </div>
@stop