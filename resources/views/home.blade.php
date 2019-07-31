@extends('index')
@section('title','Trang chủ')
<link rel="stylesheet" type="text/css" href="/css/home.css">
<style>
	#popup_banner_beta{position:fixed;width:100%;height:100vh;z-index:99999;top:0;left:0}.mask_popup_banner_beta{background:rgba(0,0,0,.38);cursor:pointer;position:absolute;width:100%;height:100vh;top:0;z-index:9;left:0}.content_popup_banner_beta{position:absolute;top:50%;left:50%;z-index:10;transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-webkit-transform:translate(-50%,-50%)}.close_icon{position:absolute;top:-70px;right:-60px;width:70px;cursor:pointer}@media only screen and (max-width:480px){.content_popup_banner_beta{width:300px}.content_popup_banner_beta a img:nth-of-type(1){width:100%}.close_icon{top:-60px;right:-20px;width:50px}}
</style>
@section('content')
{{-- <img src="http://jwpagency.com/nighttown/new-star.gif" alt="" class="new" > --}}
<!-- <img src="{{asset('/images/new.gif')}}" class="new"> -->
<header>
		<script>
        var link_image = '/images/new.gif ';
        var link = 'Sudo Link trang dich';
        function closePopupBeta(){document.getElementById("popup_banner_beta").remove(),setCookie("showPopupBannerBeta",1,1)}function setCookie(e,n,o){var t="";if(o){var i=new Date;i.setTime(i.getTime()),t="; expires="+i.toUTCString()}document.cookie=e+"="+(n||"")+t+"; path=/"}function getCookie(e){for(var n=e+"=",o=document.cookie.split(";"),t=0;t<o.length;t++){for(var i=o[t];" "==i.charAt(0);)i=i.substring(1,i.length);if(0==i.indexOf(n))return i.substring(n.length,i.length)}return null}1!=getCookie("showPopupBannerBeta")&&(document.addEventListener("DOMContentLoaded", function(event) { var e='<div id="popup_banner_beta"><div onclick="closePopupBeta()" class="mask_popup_banner_beta"></div><div class="content_popup_banner_beta"><img src="'+icon_close+'" class="close_icon" onclick="closePopupBeta()" alt="Close Image"><img style="width:500px" src="'+link_image+'" alt="Image Popup Banner"/></div></div>';setTimeout(function(){document.body.innerHTML+=e},1000)}));
    </script>
    
	</header>


<img src="https://www.adamo.com.hk/images/New-Arrival-title-eng.png" style="width: 80%" alt="">
<!-- <img src="https://blog.bbt4vw.com/wp-content/uploads/2017/11/New-Products-Badge.gif" alt="" style="width: 90%; height: 20%"> -->
<section class="row">
	<img src="/images/giay.gif" alt="">
	<section class="product col-md-3 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Adidas/Alpha5tr.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Adidas Alpha
			</section>
			<section class="price">
				5,000,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/5')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/5')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>

	<section class="product col-md-3 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Adidas/UltraBoost4tr.png')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Adidas Ultra Boost
			</section>
			<section class="price">
				4,000,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/18')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/18')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
	<section class="product col-md-3 sp" >
		<section id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Adidas/Alpha3tr.jpg
				')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Adidas Alpha
			</section>
			<section class="price">
				3,000,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/4')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/4')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
	<section class="product col-md-3 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Adidas/UltraBoost4tr.png')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Adidas Ultra Boost
			</section>
			<section class="price">
				4,000,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/18')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/18')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
	</section>
	<section class="product col-md-3 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Bitis/HunterRetroWhite_900k.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Bitis Hunter Retro White
			</section>
			<section class="price">
				900,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/33')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/33')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>

</section>


<section class="row">
	<section class="product col-md-3 sp" >
		<section id="images">
			<section class="img">
				<img width="220px" height="175px" src="{{asset('/images/Converse/Chuck70Boardies.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Converse Chuck 70 Boardies
			</section>
			<section class="price">
				1,500,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/41')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/41')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>

	<section class="product col-md-3 sp" >
		<section  id="images">
			<section class="img">
				<img width="220px" height="175px" src="{{asset('/images/Converse/ChuckTayLorAllStarBoardies.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Converse Chuck Taylor All Star Boardies
			</section>
			<section class="price">
				1,700,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/44')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/44')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
	<section class="product col-md-3 sp" >
		<section  id="images">
			<section class="img">
				<img width="220px" height="175px" src="{{asset('/images/Converse/ChuckTayLorAllStarBoardies_1.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Converse Chuck Taylor All Star Boardies
			</section>
			<section class="price">
				1,700,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/45')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/45')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
	<section class="product col-md-3 sp" >
		<section id="images">
			<section class="img">
				<img width="220px" height="175px" src="{{asset('/images/Converse/ChuckTaylorAllStarWonderland.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Converse Chuck Taylor AllStar Wonderland
			<section class="price">
				1,650,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/51')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/51')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
</section>

<section class="row">
	<section class="product col-md-3 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Bitis/HunterMidnightJoy_900k.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Bitis Hunter Midnight Joy
			</section>
			<section class="price">
				900,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/29')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/29')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>

	<section class="product col-md-3 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Bitis/HunterSummer2k19_1tr.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Bitis Hunter Summer 2k19
			</section>
			<section class="price">
				1,000,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/34')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/34')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
	<section class="product col-md-3 sp" >
		<section id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Bitis/HunterRetroRedBlack_900k.jpg
				')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Bitis Hunter Retro
			</section>
			<section class="price">
				900,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/32')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/32')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
	<section class="product col-md-3 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Bitis/HunterMidnightJoy_900k.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Bitis Hunter Midnight Joy
			</section>
			<section class="price">
				900,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/29')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/29')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>

</section>
<img src="{{asset('/images/sale.gif')}}" alt="" style="width: 70%;height: 150px;padding-top: 20px;margin:auto">
<section class="row " style="padding-bottom: 20px">
	<!-- <img src="{{asset('/images/sale50.gif')}}" alt="" style="width: 100%;height: 300px;padding-top: 20px;" class="col-md-3"> -->
	
	<section class="product col-md-3 sp" >
		<section id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/Adidas/Alpha2tr.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Adidas Alpha
			</section>
			<section class="price" style="text-decoration: line-through;">
				1,500,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="price" style="color: red; padding-bottom: px">
				1,000,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/3')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/3')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
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
			<section class="price" style="text-decoration: line-through;">
				1,500,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="price" style="color: red; padding-bottom: px">
				1,000,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/10')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/10')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
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
			<section class="price" style="text-decoration: line-through;">
				1,500,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="price" style="color: red; padding-bottom: px">
				1,200,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/1')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/1')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
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
			
			<section class="price" style="text-decoration: line-through;">
				1,500,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="price" style="color: red; padding-bottom: px">
				1,000,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/10')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/10')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
	<section class="product col-md-3 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/	
				Adidas/UltraBoost4tr.png')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Adidas Alpha
			</section>
			
			<section class="price" style="text-decoration: line-through;">
				4,000,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="price" style="color: red; padding-bottom: px">
				3,200,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/18')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/18')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>
	<section class="product col-md-3 sp" >
		<section  id="images">
			<section class="img">
				<img width="200px" height="175px" src="{{asset('/images/	
				Bitis/Hunter2k18BlueMoon_900k.jpg')}}" style="margin-top: 30px; margin-bottom: 30px">
			</section>
			<section class="productName">
				Adidas Alpha
			</section>
			
			<section class="price" style="text-decoration: line-through;">
				900,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="price" style="color: red; padding-bottom: px">
				450,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/22')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/22')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
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
			
			<section class="price" style="text-decoration: line-through;">
				1,500,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="price" style="color: red; padding-bottom: px">
				1,000,000 <sup style="color: red;"><b>đ</b></sup>
			</section>
			<section class="order">
				<a href="{{url('cart/add/10')}}" class="btn btn-outline-info" style="margin-bottom: 20px;"><i class="fa fa-cart-plus"></i>	Thêm vào giỏ</a>
				<a href="{{url('productdetail/10')}}" class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-share"></i>	Chi tiết</a>
			</section>
		</section>
		
	</section>


</section>

@endsection