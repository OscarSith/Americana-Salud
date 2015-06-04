<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Oscar Larriega <larriega@gmail.com>">
    <title>Home - Mimity</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.bxslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
	            <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
                    <div class="well logo">
                        <a href="index.html">
                            <img src="img/nutri.png" width="120px">
                        </a>
                    </div>
                </div>
	            <!-- End Logo -->

				<!-- Social icons -->
                <div class="col-sm-3 pull-right text-right" style="padding-top:20px" >
                    <a class="fa-stack fa-lg" href="https://plus.google.com/u/0/b/116335741794886913445/116335741794886913445/about" target="_blank">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-google-plus fa-stack-1x" style="color:white"></i>
                    <a class="fa-stack fa-lg"  href="https://www.facebook.com/pages/Nutri-American/1650161098563356?ref=hl" target="_blank">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x" style="color:white"></i>
                    </a>
                    <a class="fa-stack fa-lg" href="https://www.youtube.com/channel/UCe82JT7KJj3EimMWXs7N2cg" target="_blank">
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
                    <li><a href="/" class="active">Inicio</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="{{ url('nosotros') }}">Acerca de Nosotros</a></li>
                    <li><a href="contact.html">Contáctanos</a></li>
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
                    <h4>Información</h4>Información
                    <ul>
                        <li><a href="about.html">Acerca de Nosotros</a></li>
                        <li><a href="typography.html">Ventajas</a></li>         
                        <li><a href="typography.html">Términos y condiciones</a></li>
                        <li><a href="typography.html">Política de privacidad</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Productos</h4>
                    <ul>
                        <li><a href="catalogue.html">Promociones</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Customer Service</h4>
                    <ul>
                        <li><a href="contact.html">Contáctenos</a></li>
                        <li><a href="#">Teléfono: 014243536</a></li>
                        <li><a href="#">Correo: contacto@nutriamerican.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Síguenos</h4>
                    <ul class="social">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar-inverse text-center copyright">
            Copyright &copy; {{ date('Y') }} Nutri American All right reserved | Ver terminos de uso

        </div>
    </footer>

    <a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
    	<i class="fa fa-angle-double-up"></i>
    </a>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('js/jquery.blImageCenter.js') }}"></script>
    <script src="{{ asset('js/mimity.js') }}"></script>
</body>
</html>