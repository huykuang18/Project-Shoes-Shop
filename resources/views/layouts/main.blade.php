<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ $title ?? "" }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	@stack("styles")
</head>
<body>
	<nav id="nav" class="navbar navbar-expand-sm navbar-dark navbar-static-top fixed-top">
		<!-- Brand/logo -->
		<img style="width: 5%" src="/images/logo.png" alt="">
		<a class="navbar-brand" href="/" style="padding-top: 8px"><h3 class="hutra">HUTRA SHOES</h3><small>Uy tín & Chất lượng</small></a>

		<!-- Links -->
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="/">Trang chủ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{asset('search/brandID/1')}}">Adidas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{asset('search/brandID/2')}}">Bitis Hunter</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{asset('search/brandID/3')}}">Converse</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{asset('search/brandID/4')}}">Nike</a>
			</li>
			<li class="nav-item">
				<a href="{{asset('help')}}" class="nav-link">Hướng dẫn chọn giày</a>
			</li>
		</ul>
		<ul class="navbar-nav justify-content-end">
			<form class="form-inline" method="get" action="{{url('search/keyword/key')}}">
				<input type="search" name="keyword" class="form-control mr-2" placeholder="Tìm kiếm sản phẩm..."> 
				<input type="submit" value="Tìm kiếm" class="btn btn-outline-dark">
			</form>
		</ul>
	</nav>
	<a href="" class="btn-call-now" style="text-decoration:none;">
		<em class="fa fa-phone">
			&nbsp;
		</em>
		<span class="lienhe">Liên hệ ngay 0373872918</span>
	</a>
	<script src="/js/app.js?v={{env('APP_ENV') == 'local' ? time() : base64(2)}}"></script>
	@stack("scripts")


</body>
</html>