<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" />

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Nutri Americana</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('admin') }}">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{ asset('js/jquery.hotkeys.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/bootstrap-wysiwyg.min.js') }}"></script>
	<script>
			$(function() {
		    	function initToolbarBootstrapBindings()
		    	{
		      		var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
		            	'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
		            	'Times New Roman', 'Verdana'],
	            		fontTarget = $('[title=Font]').siblings('.dropdown-menu');
		      
		      		$.each(fonts, function (idx, fontName)
		      		{
		          		fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
		      		});

		      		$('a[title]').tooltip({container:'body'});

		    		$('.dropdown-menu input').click(function() {return false;})
				    	.change(function () {
				    		$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
				    	}).keydown('esc', function () {
	        				this.value = '';
	        				$(this).change();
	        			});

		    		// $('[data-role=magic-overlay]').each(function ()
		      // 		{ 
		      //  			var overlay = $(this), target = $(overlay.data('target')); 
		      //   		overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
		      // 		});
		      
		      		if ("onwebkitspeechchange"  in document.createElement("input")) 
		      		{
		        		var editorOffset = $('#editor').offset();
		      		}
		      		else
		      		{
		        		$('#voiceBtn').hide();
					}
				};

				function showErrorAlert (reason, detail)
				{
					var msg='';
					if (reason==='unsupported-file-type')
					{
						msg = "Unsupported format " + detail;
					}
					else
					{
						console.log("error uploading file", reason, detail);
					}

					$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
						'<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
				};

				initToolbarBootstrapBindings();  

				$('#editor-description').wysiwyg({
					fileUploadError: showErrorAlert
				});
			});

			$('#frm-product').on('submit', function(e) {
				$(this).find('#description').val($('#editor-description').cleanHtml(true));
			});
		</script>
</body>
</html>
