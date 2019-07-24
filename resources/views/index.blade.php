@include('layouts.main')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="/css/index.css">
	<style>
		#popup_banner_beta{position:fixed;width:100%;height:100vh;z-index:99999;top:0;left:0}.mask_popup_banner_beta{background:rgba(0,0,0,.38);cursor:pointer;position:absolute;width:100%;height:100vh;top:0;z-index:9;left:0}.content_popup_banner_beta{position:absolute;top:50%;left:50%;z-index:10;transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-webkit-transform:translate(-50%,-50%)}.close_icon{position:absolute;top:-70px;right:-60px;width:70px;cursor:pointer}@media only screen and (max-width:480px){.content_popup_banner_beta{width:300px}.content_popup_banner_beta a img:nth-of-type(1){width:100%}.close_icon{top:-60px;right:-20px;width:50px}}
	</style>
</head>
<body >
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=366848667335925&autoLogAppEvents=1"></script>
	<section class="slide" >
		<div id="demo" class="carousel slide" data-ride="carousel" >

			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="demo" data-slide-to="0" class="active"></li>
				<li data-target="demo" data-slide-to="1"></li>
				<li data-target="demo" data-slide-to="2"></li>
				<li data-target="demo" data-slide-to="3"></li>
			</ul>

			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active ">
					<img src="/images/slides/converse1.jpg" alt="Bitis Hunter" width="100%" height="500">
				</div>
				<div class="carousel-item ">
					<img src="/images/slides/adidas2.jpg" alt="Converse" width="100%" height="500">
				</div>
				<div class="carousel-item">
					<img src="/images/slides/hunter1.jpg" alt="Adidas" width="100%" height="500">
				</div>
				<div class="carousel-item">
					<img src="/images/slides/nike.jpg" alt="Adidas" width="100%" height="500">
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