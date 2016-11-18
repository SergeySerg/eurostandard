<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>Eurostandard</title>
	<meta name="title" content="{{ $meta ->getTranslate('meta_title') }}">
	<meta name="description" content="{{ $meta ->getTranslate('meta_description') }}">
	<meta name="keywords" content="{{ $meta ->getTranslate('meta_keywords') }}">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:image" content="path/to/image.jpg">

	<link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('/img/favicon/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple-touch-icon-114x114.png') }}">

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('/css/frontend/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/frontend/main.css') }}?ver={{ $version }}" rel="stylesheet">
	<link href="{{ asset('/css/frontend/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/libs/unitegallery/dist/css/unite-gallery.css') }}" rel="stylesheet">

	<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
	<link href="{{ asset('/css/plugins/sweetalert.css') }}" rel="stylesheet">

	<STYLE>
		body{
			/*
                        background-image: url("http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/wavegrid.png");
            */
			background-image: url("http://yeap.narod.ru/global/files/textures/01.jpg")
		}
		.panel-default>.panel-heading{
			background: none;
		}
		.jumbotron, .panel, .progress, .well {
			border: 1px solid #75caeb;
		}
		.panel {
			border-width: 0 0px 4px;
			box-shadow: 0 0 15px rgba(0,0,0, .15);
		}
		.navbar-default {
			background-color: #ffffff;
			border-color: #75caeb;
			box-shadow: 0 0 15px rgba(0,0,0, .15);
		}
		.navbar {
			border-width: 0 0 4px;
		}
	</STYLE>

</head>

<body>

<div class="container">

	<div class="row">

		<ul class="col-md-12 text-right lang">
			@foreach($langs as $lang)
				<li><a href="{{str_replace(url(App::getLocale()), url($lang->lang), Request::url())}}">{{$lang -> lang}}</a></li>
			@endforeach
		</ul>

	</div>

	<div class="row">

		<div class="col-md-12">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img alt="Brand" src="img/frontend/logo.jpg">
						</a>
						<p class="navbar-text">EUROSTANDARD sp. z o.o.</p>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right r-menu">
							<li @if(Request::is('ua')) class="active"@endif>
								<a href="/{{ App::getLocale() }}">
									<i class="fa fa-home"></i><br>
									{{ trans('base.home') }}
								</a>
							</li>
							<li @if(Request::is('*/company'))class="active"@endif>
								<a href="/{{ App::getLocale() }}/company">
									<i class="fa fa-paperclip"></i><br>
									{{ trans('base.company') }}
								</a>
							</li>
							<li @if(Request::is('*/news'))class="active"@endif>
								<a href="/{{ App::getLocale() }}/news"><i class="fa fa-newspaper-o"></i><br>
									{{ trans('base.news') }}
								</a>
							</li>
							<li @if(Request::is('*/works'))class="active"@endif>
								<a href="/{{ App::getLocale() }}/works"><i class="fa fa-user"></i><br>
									{{ trans('base.works') }}
								</a>
							</li>
							<li @if(Request::is('*/gallery'))class="active"@endif>
								<a href="/{{ App::getLocale() }}/gallery"><i class="fa fa-camera"></i><br>
									{{ trans('base.gallery') }}
								</a>
							</li>
							<li @if(Request::is('*/contacts'))class="active"@endif>
								<a href="/{{ App::getLocale() }}/contact"><i class="fa fa-envelope"></i><br>
									{{ trans('base.contacts') }}
								</a>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->

				</div><!-- /.container-fluid -->

			</nav>
		</div>

	</div>

	@yield('content')

</div> <!-- /container -->
<!-- Site footer -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-sm-3 col-md-3 wow fadeInUp">

				<a class="navbar-brand" href="#">
					<img alt="Brand" src="img/frontend/logo.jpg">
				</a>
				<p class="navbar-text">EUROSTANDARD sp. z o.o.</p>

			</div>

			<div class="col-sm-6 col-md-6 text-center wow fadeInDown">

				<i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
				<p>43016, Україна, м.Луцьк, вул.Драгоманова, 1а <br>84100, Poland, Puck, ul.Zamkova, 13 </p>

			</div>

			<div class="col-sm-3 col-md-3 text-right wow fadeInLeft">

				<i class="fa fa-phone fa-3x" aria-hidden="true"></i>
				<ul class="phone">
					<li>+38 (123) 456 - 78 - 90</li>
					<li>+38 (123) 456 - 78 - 90</li>
				</ul>
			</div>

		</div>
	</div>
</footer>


<script src="{{ asset('/js/frontend/jquery-11.0.min.js') }}"></script>
<script src="{{ asset('/js/frontend/bootstrap.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/js/unitegallery.js') }}"></script>
<!--<script src="{{ asset('/js/common.js') }}?ver={{ $version }}"></script>-->

<!--<script src="{{ asset('/libs/unitegallery/dist/themes/default/ug-theme-default.js') }}"></script>-->
<script src="{{ asset('/libs/unitegallery/dist/themes/slider/ug-theme-slider.js') }}"></script>
<!--<script src="{{ asset('/libs/unitegallery/dist/themes/tiles/ug-theme-tiles.js') }}"></script>-->
<!--<script src="{{ asset('/libs/unitegallery/dist/themes/tilesgrid/ug-theme-tilesgrid.js') }}"></script>-->
<!--<script src="{{ asset('/libs/unitegallery/dist/themes/compact/ug-theme-compact.js') }}"></script>-->
<!--<script src="{{ asset('/libs/unitegallery/dist/js/unitegallery.min.js') }}"></script>-->
<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- end: For unitgallery -->
<script>
	$(function(){
		$("#webstudio-slider").unitegallery({
			gallery_theme: "slider",
			tiles_justified_space_between:0,
			gallery_width:'100%',							//gallery width
			gallery_height:300,								//gallery height
			gallery_max_height: 300,
			slider_control_zoom: false,
			slider_enable_text_panel: true,			 		//true,false - enable the text panel
			slider_textpanel_always_on: true,				//true,false - text panel are always on, false - show only on mouseover
			slider_textpanel_text_valign: "middle",			//middle, top, bottom - text vertical align
			slider_textpanel_padding_top:10,				//textpanel padding top
			slider_textpanel_padding_bottom:20,				//textpanel padding bottom
			slider_textpanel_height: null,					//textpanel height. if null it will be set dynamically
			slider_textpanel_padding_title_description: 5,	//the space between the title and the description
			slider_textpanel_padding_right: 11,				//cut some space for text from right
			slider_textpanel_padding_left: 11,				//cut some space for text from left
			slider_textpanel_fade_duration: 200,			//the fade duration of textpanel appear
			slider_textpanel_enable_title: true,			//enable the title text
			slider_textpanel_enable_description: true,		//enable the description text
			slider_textpanel_enable_bg: true,				//enable the textpanel background
			slider_textpanel_bg_color:"#000000",			//textpanel background color
			slider_textpanel_bg_opacity: 0.4,
			slider_enable_bullets: false,
		});

	});
</script>


<STYLE>
	.navbar-default .navbar-text {
		font-size: 25px;
	}
	footer .navbar-text {
		font-size: 16px;
	}
</STYLE>

<script src="http://azmind.com/demo/andia-agency/v2-1/assets/js/wow.min.js" type="application/javascript"></script>
<link href="http://azmind.com/demo/andia-agency/v2-1/assets/css/animate.css" rel="stylesheet">
<script>
	$(function(){
		$(window).on('scroll', function(){
			var scrollPosition = $(this).scrollTop();
			if(scrollPosition > 100){
				if(!$('.navbar').hasClass('navbar-fixed-top')){
					$('.navbar').addClass('navbar-fixed-top');
					$('.navbar').hide(0);
					$('.navbar').fadeIn(500);
				}
			}else{
				$('.navbar').removeClass('navbar-fixed-top');
			}

		});

		$('.navbar').hover(
				function(){
					if($('.navbar').hasClass('navbar-fixed-top')){
						$(this).animate({opacity: 1});
					}
				},
				function(){
					if($('.navbar').hasClass('navbar-fixed-top')){
						$(this).animate({opacity: 0.9});
					}
				}
		);
	});
	new WOW().init();
</script>
</body>
</html>