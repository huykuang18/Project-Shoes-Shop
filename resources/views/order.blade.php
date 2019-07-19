@extends('index')
@section('title','Đặt hàng')
<link rel="stylesheet" type="text/css" href="/css/order.css">
@section('content')

<section class="order">
	<h1>ĐẶT HÀNG</h1>
	<section>
		<h2><img width="50" src="/images/ship.gif" alt="">&nbsp;Thông tin giao hàng:</h2><br>
		<section>
			<form method="post" action="{{url('updateinfo')}}">
				@csrf 
				<section class="form-group">
					<label>Họ và tên:</label>
					<input type="text" name="fullName" class="form-control" value="{{$user->fullname}}">
				</section>

				<section class="form-group">
					<label>Điện thoại:</label>
					<input type="tel" name="mobile" class="form-control" value="{{$user->mobile}}">
				</section>

				<section class="form-group">
					<label>Email:</label>
					<input type="email" name="email" class="form-control" value="{{$user->email}}">
				</section>

				<section class="form-group">
					<label>Địa chỉ nhận hàng:</label>
					<textarea class="form-control" name="address" placeholder="Vui lòng nhập địa chỉ cụ thể để chúng tôi dễ dàng giao hàng đến cho bạn nhanh nhất...">{{$user->address}}</textarea>
				</section> 

				<section class="form-group">
					<input type="submit" class="btn btn-info" value="Xác nhận thông tin">
				</section>
	 		</form>
		</section>
	</section>

	<h2><i class="fa fa-money" style="font-size:35px;color:green"></i>&nbsp;Lựa chọn hình thức thanh toán</h2>
	<form method="post">
	@csrf
		<section class="form-group">
			@foreach($ordermethods as $ordermethod)
			<section>
				<input type="radio" name="methodId" checked value="{{$ordermethod->id}}">&nbsp;{{$ordermethod->methodName}}
			</section>
			@endforeach
			<section class="success">
				<input type="submit" value="Xác nhận đặt hàng" class="btn btn-success">
			</section>
		</section>
	</form>
	
</section>

@endsection