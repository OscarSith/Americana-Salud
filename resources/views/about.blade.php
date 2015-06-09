@extends('layout.master')

@section('content')
<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-12">
		<div class="no-padding">
			<span class="title">&nbsp;</span>
		</div>
		@include('partials.fb-iframe')
	</div>

		<div class="clearfix visible-sm"></div>

		<!-- Cart -->
	<div class="col-lg-9 col-md-9 col-sm-12">
		<div class="col-lg-12 col-sm-12">
			<span class="title">ACERCA DE NOSOTROS</span>
		</div>
		<div class="col-lg-12 col-sm-12 hero-feature">
			<p>Nutri American es una empresa que desde el 2004 está brindando los mejores productos para la salud y la belleza tanto para hombres como mujeres. Nuestro staff de profesionales esta constantemente innovando para traerte lo mejor a tus manos.</p>
		    <p>A través de nuestros productos de origen netamente americano, buscamos entregar la mejor calidad en todo momento, proporcionando un servicio de alta calidad, y atención constante.</p>
		    <p>Vive la experiencia de adquirir alguno de nuestros productos en cualquiera de las líneas y siente cómo cambia tu vida por completo.</p>
		    <p>Contáctenos (link a contáctenos)</p>
		    <h4>Ventajas</h4>
			<ul>
				<li>Garantía – La empresa tiene un prestigio ganado durante 11 años en el mercado . Nuestros productos nos respaldan al ser 100% seguros, confiables y originales.</li>
				<li>Envío – Totalmente gratuito a cualquier parte del Perú.</li>
				<li>Rapidez – Entregas en máximo dos días.</li>
				<li>Formas de pago – Pago contra-entrega.</li>
		        <li>Confidencialidad – Productos entregados en embalaje que no permite su visualización.</li>
		        <li>Contacto inmediato – Chat en la web, soporte telefónico, correos.</li>
			</ul>
			<h4>Información de envío</h4>
			<p>Los productos adquiridos en NutriAmerican y solicitados a través de www.nutriamerican.com, son enviados a la dirección que usted solicite a nivel nacional.</p>
			<p>El envío es totalmente gratis, sin importar el número de productos que usted requiera.</p>
		</div>
	</div>
</div>
@stop