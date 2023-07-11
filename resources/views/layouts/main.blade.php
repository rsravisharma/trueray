<!DOCTYPE html>

<!-- Mirrored from templates.stillidea.net/crazyhour/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 15:49:53 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trueray </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

<!-- Styles -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/revolution.css" media="screen" />
<link rel="stylesheet" href="css/audioplayer.css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/color/color.css" title="color" />
</head>
<body>
<div class="page-loader">
  <div class="item one"><img src="images/loader.png" alt="" /></div>
</div><!-- Page Loader -->

@include('layouts.navbar')

@yield('content')


@include('layouts.footer')


<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>

<script type="text/javascript" src="js/jquery2.1.1.js"></script>
<!-- SLIDER REVOLUTION -->
<script type="text/javascript" src="js/revolution/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/revolution/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.downCount.js"></script> 
<script type="text/javascript" src="js/audioplayer.js"></script>
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/jquery.downCount.js"></script> 
<script type="text/javascript" src="js/script.js"></script>
<script>
$(document).ready(function() {
	$('.countdown').downCount({
	    date: '06/25/2016 12:00:00',
	    offset: +10
	});


	/* =============== Service Carousel ===================== */
	$('.service-carousel').owlCarousel({
		loop: true,
		smartSpeed : 1000,
		autoplay: true,
		autoplayTimeout: 3000,
		dots: true,
		mouseDrag: false,
		items:1,
		margin: 0,
		singleItem: true,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn'
	});

	$( function() { $( 'audio' ).audioPlayer(); } );
});

$(window).load(function() {
	/* =============== Fun Facts Counter ===================== */
	$(".counter").counterUp({
	    time: 1000
	});

	/* =============== Revolution Slider ===================== */
	var revapi;
	revapi = jQuery('.tp-banner').revolution(
		{
			delay:9000,
			startwidth:1170,
			startheight:768,
			hideThumbs:10,
			fullWidth:"on",
			forceFullWidth:"off"
		});
});
</script>

</body>
