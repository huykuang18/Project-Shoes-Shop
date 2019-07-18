@include('layouts.main')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="/css/index.css">
</head>
<body style="background-color: #7ecfb8;">
	<nav id="line" class="navbar navbar-expand-sm navbar-static-top ship">
		<ul class="navbar-nav mr-auto">
			<img width="20" src="/images/call.gif">&nbsp;<b>Hotline: 0394366374 | 0373872918</b>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img width="40" src="/images/ship.gif">&nbsp;<b>Giao hàng miễn phí nội thành</b>
		</ul>
		<ul class="navbar-nav justify-content-end">
			@if(session('user'))
			<li class="nav-item">				
				<a class="nav-link" href="{{url('cart')}}" style="color:black; font-weight: bold;"><i class="fa fa-shopping-cart" style="font-size:20px;color:orange;"></i>&nbsp;Giỏ hàng của tôi</a>
			</li>

			<div class="dropdown dropleft">
				<button class="btn btn-outline-info my-2 my-sm-0 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-user">&nbsp;{{session('user')}}</i>
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
					<a href="/logout" class="dropdown-item">Đăng xuất</a>
				</div>
			</div>
			@else

			<li class="nav-item user">

				<a class="nav-link" href="{{url('login')}}"><i class="fa fa-user-circle-o" style="font-size:20px;color:orange;"></i>&nbsp;Đăng nhập</a>
			</li>
			&nbsp;
			<li class="nav-item user">
				<a class="nav-link" href="{{url('register')}}"><i class="fa fa-user-plus" style="font-size:20px;color:orange;"></i>&nbsp;Đăng ký</a>
			</li>
			@endif
		</ul>
	</nav>
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
					<img src="/images/slides/adidas1.jpg" alt="Converse" width="100%" height="400">
				</div>
				<div class="carousel-item active">
					<img src="/images/slides/hunter.jpg" alt="Adidas" width="100%" height="400">
				</div>
				<div class="carousel-item">
					<img src="/images/slides/converse.jpg" alt="Bitis Hunter" width="100%" height="400">
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


