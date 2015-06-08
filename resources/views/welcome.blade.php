@extends('layout.master')

@section('content')
<div class="row">
    <!-- Slider -->
    <div class="col-lg-9 col-md-12">
        <div class="slider">
            <ul class="bxslider">
                <li>
                    <a href="index.html">
                        <img src="img/banner_slider-3.jpg" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <img src="img/banner_slider-2.jpg" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <img src="img/banner_slider-1.jpg" alt=""/>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Slider -->
    <div class="col-md-3 sm-hidden xs-hidden" style="padding-left: 0" >
        <div  class="fb-page" data-href="https://www.facebook.com/pages/Nutri-American/1650161098563356?ref=hl" data-width="280" data-height="342" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Nutri-American/1650161098563356?ref=hl"><a href="https://www.facebook.comv">Facebook</a></blockquote></div>
        </div>
    </div>
</div>

<!-- Featured -->
<div class="col-sm-12">
    <div class="col-sm-12">
        <span class="title">PRODUCTOS</span>
    </div>
    @if(!$products->isEmpty())
    @foreach($products as $rec)
        <div class="col-sm-3 col-xs-12 hero-feature text-center">
            <div class="thumbnail">
                <a href="detail.html" class="link-p">
                    <img src="{{ asset('img/products/' . $rec->default_img) }}" alt="{{ $rec->default_img }}">
                </a>
                <div class="caption prod-caption">
                    <h4><a href="detail.html">{{ $rec->name }}</a></h4>
                    <p>{{ $rec->short_info }}</p>
                    <p>
                        <div class="btn-group">
                            <a href="#" class="btn btn-default">{{ $rec->price }}</a>
                            <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Comprar</a>
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
<!-- End Featured -->

<div class="clearfix visible-sm"></div>
@stop