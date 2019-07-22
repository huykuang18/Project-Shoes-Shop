@extends('index')
@section('title','Trang chủ')
<link rel="stylesheet" type="text/css" href="/css/home.css">
@section('content')
{{-- <img src="http://jwpagency.com/nighttown/new-star.gif" alt="" class="new" > --}}
<img src="{{asset('/images/new.gif')}}" class="new">
<section class="row">
	<section class="product col-md-4 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Adidas/Alpha5tr.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Adidas Alpha
			</section>
			<section class="price">
				5,000,000 <sup style="color: red;"><b>VNĐ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/5')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/5')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>

	<section class="product col-md-4 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Adidas/UltraBoost4tr.png')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Adidas Ultra Boost
			</section>
			<section class="price">
				4,000,000 <sup style="color: red;"><b>VNĐ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/18')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/18')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
	<section class="product col-md-4 sp" >
		<section id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Adidas/Alpha3tr.jpg
				')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Adidas Alpha
			</section>
			<section class="price">
				3,000,000 <sup style="color: red;"><b>VNĐ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/4')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/4')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
</section>
<section class="row">
	<section class="product col-md-4 sp" >
		<section id="images">
			<section class="img">
				<img width="220px" height="175px" src="{{asset('/images/Converse/Chuck70Boardies.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Converse Chuck 70 Boardies
			</section>
			<section class="price">
				1,500,000 <sup style="color: red;"><b>VNĐ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/41')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/41')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>

	<section class="product col-md-4 sp" >
		<section  id="images">
			<section class="img">
				<img width="220px" height="175px" src="{{asset('/images/Converse/ChuckTayLorAllStarBoardies.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Converse Chuck Taylor All Star Boardies
			</section>
			<section class="price">
				1,700,000 <sup style="color: red;"><b>VNĐ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/44')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/44')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
	<section class="product col-md-4 sp" >
		<section  id="images">
			<section class="img">
				<img width="220px" height="175px" src="{{asset('/images/Converse/ChuckTayLorAllStarBoardies_1.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Converse Chuck Taylor All Star Boardies
			</section>
			<section class="price">
				1,700,000 <sup style="color: red;"><b>VNĐ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/45')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/45')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
</section>

<section class="row">
	<section class="product col-md-4 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Bitis/HunterMidnightJoy_900k.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Bitis Hunter Midnight Joy
			</section>
			<section class="price">
				900,000 <sup style="color: red;"><b>VNĐ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/29')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/29')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>

	<section class="product col-md-4 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Bitis/HunterSummer2k19_1tr.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Bitis Hunter Summer 2k19
			</section>
			<section class="price">
				1,000,000 <sup style="color: red;"><b>VNĐ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/34')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/34')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
	<section class="product col-md-4 sp" >
		<section id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Bitis/HunterRetroRedBlack_900k.jpg
				')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Bitis Hunter Retro
			</section>
			<section class="price">
				900,000 <sup style="color: red;"><b>VNĐ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/32')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/32')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
</section>

<img src="{{asset('/images/sale.gif')}}" alt="" style="width: 100%;height: 200px;padding-top: 20px;">


<section class="row " style="padding-bottom: 20px">
	<img src="{{asset('/images/sale50.gif')}}" alt="" style="width: 100%;height: 300px;padding-top: 20px;" class="col-md-3">
	<section class="product col-md-3 sp" >
		<section id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Adidas/Alpha2tr.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Adidas Alpha
			</section>
			<section class="price">
				1,500,000 <sup style="color: red;"><b>VNĐ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/1')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>

	<section class="product col-md-3 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/	
				Adidas/ProphereWOG1,65tr.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Adidas Alpha
			</section>
			<section class="price">
				1,500,000 <sup style="color: red;"><b>VNĐ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/1')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
	<section class="product col-md-3 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Adidas/Alpha1,5tr.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Adidas Alpha
			</section>
			<section class="price">
				1,500,000 <sup style="color: red;"><b>VNĐ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/1')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
</section>


@endsection