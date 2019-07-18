<link rel="stylesheet" href="\css\left.css">
<aside id="left" class="col-md-3">
	<section class="sanpham">
		<h4>Mức giá sản phẩm</h4>
	</section>
	<?php $prices=DB::table('prices')->get(); ?>
	@foreach($prices as $price)
	<section style="padding-top: 10px">
		<a class="nav-link" href="{{url('search/mucgia/'.$price->id)}}">{{$price->priceName}}<hr style="margin:7px 7px"></a>
	</section>
	@endforeach

	<section class="sanpham">
		<h4 >Sản phẩm sale</h4>
	</section>
	<?php $sales=DB::table('sales')->get(); ?>
	@foreach($sales as $sale)
	<section style="padding-top: 10px">
		<a class="nav-link"  href="{{url('searchSale/sale/'.$sale->id)}}">{{$sale->sale}}<hr style="margin:7px 7px"></a>
	</section>
	@endforeach

	<section>
		<img src="{{asset('/images/logo_nike.png')}}" class="nike">
		<img src="{{asset('/images/logo_adidas.png')}}" class="adidas" >
		<img src="{{asset('/images/logo_converse.png')}}" class="converse">
		<img src="https://salt.tikicdn.com/ts/categorybanner/c2/71/b0/7198b098997111bb3ca2c070440bf89f.png" alt="" style="width: 50%">
	</section>
</aside>