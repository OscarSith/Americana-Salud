@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-9">
        <div class="slider">
            <ul class="bxslider">
                <li><img src="img/banner_slider-4.jpg" alt=""/></li>
                <li><img src="img/banner_slider-3.jpg" alt=""/></li>
                <li><img src="img/banner_slider-2.jpg" alt=""/></li>
                <!--<li><img src="img/banner_slider-5.jpg" alt=""/></li>-->
                <li><img src="img/banner_slider-1.jpg" alt=""/></li>
            </ul>
        </div>
    </div>
    <div class="col-md-3 hidden-xs hidden-sm" style="padding-left: 0">
        @include('partials.fb-iframe')
    </div>
</div>

<!-- Featured -->
<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-12">
            <span class="title">PRODUCTOS</span>
        </div>
        @if(!$products->isEmpty())
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
        @else
            <div class="col-sm-12">No hay productos que mostrar</div>
        @endif
    </div>
</div>
<!-- End Featured -->

<div class="clearfix visible-sm"></div>
@stop