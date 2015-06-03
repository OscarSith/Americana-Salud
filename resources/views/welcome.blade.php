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
    <div class="col-sm-3 col-xs-12 hero-feature text-center">
        <div class="thumbnail">
            <a href="detail.html" class="link-p">
                <img src="img/product-2.jpg" alt="">
            </a>
            <div class="caption prod-caption">
                <h4><a href="detail.html">Get Bigger (Crece saludablemente y se Feliz)</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                <p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-default">$ 122.51</a>
                        <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Comprar</a>
                    </div>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 hero-feature text-center">
        <div class="thumbnail">
            <a href="detail.html" class="link-p">
                <img src="img/product-3.jpg" alt="">
            </a>
            <div class="caption prod-caption">
                <h4><a href="detail.html">Pestañas Freeze ( Mirada Perfecta)</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                <p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-default">$ 628.96</a>
                        <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Comprar</a>
                    </div>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 hero-feature text-center">
        <div class="thumbnail">
            <a href="detail.html" class="link-p">
                <img src="img/product-4.jpg" alt="">
            </a>
            <div class="caption prod-caption">
                <h4><a href="detail.html">Grow Fit ( Cuerpo activo y en forma)</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                <p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-default">$ 394.64</a>
                        <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Comprar</a>
                    </div>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 hero-feature text-center">
        <div class="thumbnail">
            <a href="detail.html" class="link-p">
                <img src="img/product-1.jpg" alt="">
            </a>
            <div class="caption prod-caption">
                <h4><a href="detail.html">Less Bald ( Recuperamos tu cabello)</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                <p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-default">$ 428.96</a>
                        <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Comprar</a>
                    </div>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End Featured -->

<div class="clearfix visible-sm"></div>
@stop