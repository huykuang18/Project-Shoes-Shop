@extends('index')
@section('title','Chi tiết sản phẩm')
<link rel="stylesheet" type="text/css" href="{{'/css/productdetail.css'}}">
@section('content')
<section class="container-fluid">
	<section class="row">
		<section class="col-md-6">
			<img width="400" height="300" src="{{asset('/images/'.$product->productImage)}}">
			
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
				<td scope="row"></td>
			</tr>
			<tr>
				<td scope="row"><small><i class="fa fa-commenting-o"></i>&nbsp;{{$productComment->comment}}</small></td>
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

@stop