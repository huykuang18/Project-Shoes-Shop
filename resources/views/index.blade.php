@include('layouts.main')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="/css/index.css">
</head>
<body style="background: url(/images/bgGalaxy1.jpg);">
<section class="slide" >
	<div id="demo" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>

		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item">
				<img src="/images/slides/adidas1.jpg" alt="Converse" width="100%" height="480">
			</div>
			<div class="carousel-item active">
				<img src="/images/slides/hunter.jpg" alt="Adidas" width="100%" height="480">
			</div>
			<div class="carousel-item">
				<img src="/images/slides/converse.jpg" alt="Bitis Hunter" width="100%" height="480">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>

</section>

<div class="btn-mxh" style="text-decoration:none;">
	<a href="https://www.facebook.com/trang.ngoc.79069"><em class="fa fa-facebook-f"></em></a>
	<a href="https://www.instagram.com/huy.nq018/"><em class="fa fa-instagram"></em></a>
	<a href="#"><em class="fa fa-google"></em></a>
	<a href="#"><em class="fa fa-twitter"></em></a>
	<a href="#" id="goTop" title="TO TOP">
		<em class="fa fa-chevron-up"></em>
	</a>
</div>

<section id="content" class="row">
	@include('layouts/left')
	<aside class="col-md-9" style=" padding-right: 20px">
		@yield('content')
	</aside>	
</section>

<script>
	$(document).ready(function(){ 
		$(window).scroll(function(){ 
			if ($(this).scrollTop() > 100) { 
				$('#goTop').fadeIn(); 
			} else { 
				$('#goTop').fadeOut(); 
			} 
		}); 
		$('#goTop').click(function(){ 
			$("html, body").animate({ scrollTop: 0 }, 600); 
			return false; 
		}); 
	});
</script>
@include('layouts/footer')
</body>
</html>


