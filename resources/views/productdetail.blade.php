@extends('index')
@section('title','Chi tiết sản phẩm')
<link rel="stylesheet" type="text/css" href="{{'/css/productdetail.css'}}">
<script src="{{'/js/productdetail.js'}}" type="text/javascript"></script>
@section('content')
<section class="container-fluid">
	<section class="row">
		<section class="col-md-6">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#menu1"><img width="40" height="30" src="{{asset('/images/'.$product->productImage)}}"></a></li>&nbsp;
				<li><a data-toggle="tab" href="#menu2"><img width="40" height="30" src="{{asset('/images/'.$product->view1)}}"></a></li>&nbsp;
				<li><a data-toggle="tab" href="#menu3"><img width="40" height="30" src="{{asset('/images/'.$product->view2)}}"></a></li>
			</ul>
	<br>
			<div class="tab-content img-magnifier-container">
				<div id="menu1" class="tab-pane fade in active">
					<img id="img1" width="400" height="300" src="{{asset('/images/'.$product->productImage)}}">
				</div>
				<div id="menu2" class="tab-pane fade">
					<img id="img2" width="400" height="300" src="{{asset('/images/'.$product->view1)}}">
				</div>
				<div id="menu3" class="tab-pane fade">
					<img id="img3" width="400" height="300" src="{{asset('/images/'.$product->view2)}}">
				</div>
			</div>
		</div>


		@if($product->viewed == 0)
		<h5>(chưa có phản hồi đánh giá)</h5>
		@else
		<strong>Đánh giá chung:</strong>&nbsp;&nbsp;<b style="font-size: 20px;">{{round($product->rate, 1)}}</b><span class="fa fa-star checked" style="font-size: 30px;"></span>
		<h5>({{$product->viewed}} lượt đánh giá)</h5>
		@endif
	</section>
	<section class="col-md-6">
		<h2><b>{{$product->productName}}</b></h2>
		<h2 style="color: red;">{{number_format($product->productPrice,0,',','.')}}VNĐ</h2>

		<form style="width: 60%;padding-right: 30%;margin-left: 20%;float: left;">
			<strong>Chọn size:</strong>
			<div class="form-group" style=" ">
				<select class="form-control" id="sel1">
					<option value="36">36</option>
					<option value="37">37</option>
					<option value="38">38</option>
					<option value="39">39</option>
					<option value="40">40</option>
					<option value="41">41</option>
					<option value="42">42</option>
					<option value="43">43</option>
				</select>
			</div>
		</form>
		<a href="{{url('cart/add/'.$product->id)}}" class="btn btn-outline-dark" style="margin-bottom: 20px;">Thêm vào giỏ</a>
	</section>
</section>
<section class="row" style="padding-top: 30px;">
	<h3><b>Mô tả:</b></h3>
	{{$product->productDescription}}
</section>


</section>
<section class="contaner-fluid" id="show">
	<h3 style="color: orange; font-style: italic;"><b>Phản hồi từ khách hàng</b></h3>
	<div class="table-wrapper-scroll-y my-custom-scrollbar">
		<table id="comment" class="table table-bordered table-striped mb-0">

			@foreach($productComments as $productComment)

			<tr>
				<td scope="row"><h5>{{$productComment->user->fullname}}</h5></td>
				<td scope="row"><i class="fa fa-user-circle" style="font-size: 30px;"></i></td>
			</tr>
			<tr>
				<td scope="row">
					<small id="cmt"><i class="fa fa-commenting-o" ></i>&nbsp;{{$productComment->comment}}</small><br>
					<small><i class="fa fa-clock-o">&nbsp;{{$productComment->created_at}}</i></small>
				</td>
				<td scope="row">Voted:{{$productComment->rate}}&nbsp;<span class="fa fa-star checked"></span></td>
			</tr>
			@endforeach

		</table>
	</div>
	@if(session('user'))		
	<form method="post" class="frm">
		@csrf
		<section class="form-group">
			<input id="txt" type="text" name="comment" placeholder="Viết bình luận..." required>&nbsp;&nbsp;
			<input class="ip" type="number" min="1" max="10" name="rate" placeholder="Đánh giá" required>&nbsp;
			<b>| 10 </b><span class="fa fa-star checked"></span>
			<input type="submit" class="btn btn-sm btn-outline-dark" value="Post">
		</section>
	</form>
	@else
	<a href="{{asset('login')}}">Đăng nhập để bình luận</a>
	@endif
</section>
<script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify("img1", 3.5);
magnify("img2", 3.5);
magnify("img3", 3.5);
</script>

@stop