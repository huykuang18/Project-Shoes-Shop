<link rel="stylesheet" href="\css\left.css">
<aside id="left" class="col-md-3">
	<section class="sanpham">
		<h4>Mức giá sản phẩm</h4>
	</section>
	<?php $prices=DB::table('prices')->get(); ?>
	@foreach($prices as $price)
	<section style="padding-top: 10px">
		<a class="nav-link" href="{{url('search/mucgia/'.$price->id)}}"><i class="fa fa-tag" aria-hidden="true"></i>&nbsp;{{$price->priceName}}<hr style="margin:7px 7px"></a>
	</section>
	@endforeach

	<section class="sanpham">
		<h4 >Sản phẩm sale</h4>
	</section>
	<?php $sales=DB::table('sales')->get(); ?>
	@foreach($sales as $sale)
	<section style="padding-top: 10px">
		<a class="nav-link"  href="{{url('searchSale/sale/'.$sale->id)}}"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;{{$sale->sale}}<hr style="margin:7px 7px"></a>
	</section>
	@endforeach

	<section>
		<a href="{{asset('search/brandID/4')}}"><img src="{{asset('/images/logo_nike.png')}}" class="nike"></a>
		<a href="{{asset('search/brandID/1')}}"><img src="{{asset('/images/logo_adidas.png')}}" class="adidas" ></a>
		<a href="{{asset('search/brandID/3')}}"><img src="{{asset('/images/logo_converse.png')}}" class="converse"></a>
		<a href="{{asset('search/brandID/2')}}"><img src="https://salt.tikicdn.com/ts/categorybanner/c2/71/b0/7198b098997111bb3ca2c070440bf89f.png" alt="" style="width: 60%"></a>
	</section>

	<div class="fb-page" data-href="https://www.facebook.com/VienCongNgheDevmaster25/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
</aside>