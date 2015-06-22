<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Nutri American</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.bxslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?35EFLXiAn1hHGO5DJXpUZlvIfZHPSf2k";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
</head>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
	<header>
	    <div class="container">
	        <div class="row">

	        	<!-- Logo -->
	            <div class="col-lg-4 col-md-3 pull-left">
                    <div class="well logo">
                        <a href="/">
                            <img src="{{ asset('img/nutri.png') }}" id="img-logo">
                        </a>
                    </div>
                </div>
	            <!-- End Logo -->

				<!-- Social icons -->
                <div class="col-sm-3 pull-right text-right" style="padding-top:43px" >
                    <a class="fa-stack fa-lg social google" href="https://plus.google.com/u/0/b/116335741794886913445/116335741794886913445/about" target="_blank">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-google-plus fa-stack-1x" style="color:white"></i>
                    <a class="fa-stack fa-lg social facebook" href="https://www.facebook.com/pages/Nutri-American/1650161098563356?ref=hl" target="_blank">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x" style="color:white"></i>
                    </a>
                    <a class="fa-stack fa-lg social youtube" href="https://www.youtube.com/channel/UCe82JT7KJj3EimMWXs7N2cg" target="_blank">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-youtube-square fa-stack-1x" style="color:white"></i>
                    </a>
                </div>
                <!-- Ends Social icons -->
	        </div>
	    </div>
    </header>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- text logo on mobile view -->
                <a class="navbar-brand visible-xs" href="index.html">Mimity Online Shop</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <?php $uri = Route::current()->uri(); ?>
                    <li><a href="/" {{ $uri == '/' ? "class=active" : '' }}>Inicio</a></li>
                    <li><a href="{{ url('productos') }}" {{ $uri == 'productos' ? "class=active" : '' }}>Productos</a></li>
                    <li><a href="{{ url('nosotros') }}" {{ $uri == 'nosotros' ? "class=active" : '' }}>Acerca de Nosotros</a></li>
                    <li><a href="{{ url('contactanos') }}" {{ $uri == 'contactanos' ? "class=active" : '' }}>Contáctanos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <div class="container main-container">
    	@section('content')
    	@show
    </div>

	<footer>
        <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Información</h4>
                    <ul>
                        <li><a class="footerb" href="{{ url('nosotros') }}">Acerca de Nosotros</a></li>     
                        <li><a class="footerb" href="#terminos" data-toggle="modal">Términos de uso</a></li>
                        <li><a class="footerb" href="#politicas" data-toggle="modal">Política de privacidad</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Síguenos en:</h4>
                    <ul class="social">
                        <li><a class="footerb" href="https://plus.google.com/u/0/b/116335741794886913445/116335741794886913445/about" target="_blank">Google+</a></li>
                        <li><a class="footerb" href="https://www.facebook.com/pages/Nutri-American/1650161098563356?ref=hl" target="_blank">Facebook</a></li>
                        <li><a class="footerb" href="https://www.youtube.com/channel/UCe82JT7KJj3EimMWXs7N2cg" target="_blank">Youtube</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Contáctenos</h4>
                    <ul>
                        <li>Correo: ventas@nutriamerican.com</li>
                        <li><i class="fa fa-phone"></i> Teléfono fijo: 12388*7*1</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar-inverse text-center copyright">
            © Copyright &copy; {{ date('Y') }} Nutri American Todos los derechos reservados     
        </div>
    </footer>

    <a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
    	<i class="fa fa-angle-double-up"></i>
    </a>
    @include('partials.terminos')
    @include('partials.politicas')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('js/jquery.blImageCenter.js') }}"></script>
    @yield('script')
    <script src="{{ asset('js/mimity.js') }}"></script>
    @include('partials.modal-message-pay')
</body>
</html>