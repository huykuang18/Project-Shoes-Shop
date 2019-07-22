@extends('index')
@section('title','Giỏ hàng')
<style>
	table{
		background:  #ebf2f9;
	}
	thead{
		color: blue;
		text-align: center;
	}
	td h3{
		color: red;
	}
</style>
@section('content')
<?php $total=0;?>
<h1>Chi tiết hóa đơn</h1>
<section class="row">
	<section class="col-md-5">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th colspan="2">Thông tin đơn hàng</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>Mã hóa đơn:</th>
					<td>00SH0{{$order->id}}</td>
				</tr>
				<tr>
					<th>Trạng thái đơn hàng:</th>
					<td>
						@if($order->status==1)
						Chưa xử lý
						@elseif($order->status==2)
						Đang xử lý
						@elseif($order->status==3)
						Đã giao hàng thành công
						@endif
					</td>
				</tr>
				<tr>
					<th>Ngày lập:</th>
					<td>{{$order->orderDate}}</td>
				</tr>
			</tbody>
		</table>
	</section>
	<section class="col-md-7">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th colspan="2">Thông tin khách hàng</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>Họ và tên:</th>
					<td>{{$order->user->fullname}}</td>
				</tr>
				<tr>
					<th>Điện thoại:</th>
					<td>{{$order->user->mobile}}</td>
				</tr>
				<tr>
					<th>Email:</th>
					<td>{{$order->user->email}}</td>
				</tr>
				<tr>
					<th>Địa chỉ đặt hàng:</th>
					<td>{{$order->user->address}}</td>
				</tr>
			</tbody>
		</table>
	</section>
</section>

<table class="table table-bordered table-striped mb-0">
	<thead>
		<tr>
			<th colspan="5">Danh sách sản phẩm</th>
		</tr>
	</thead>
	<tr>
		<th>Sản phẩm</th>		
		<th>Size</th>
		<th>Số lượng</th>
		<th>Đơn giá</th>
		<th>Thành tiền</th>
	</tr>
	@foreach($orderDetails as $orderDetail)
	<tr>
		<td width="450"><a href="{{asset('productdetail/'.$orderDetail->product->id)}}"><img style="width: 15% " src="{{asset('/images/'.$orderDetail->product->productImage)}}">{{$orderDetail->product->productName}}</a></td>
		<td>{{$orderDetail->size}}</td>
		<td>{{$orderDetail->quantity}}</td>
		<td>{{number_format($orderDetail->price,0,',','.')}}</td>
		<td>{{number_format($orderDetail->quantity*$orderDetail->price,0,',','.')}}</td>
	</tr>
	<?php $total += $orderDetail->quantity*$orderDetail->price; ?>
	@endforeach
	<tr>
		<td colspan="2"></td>
		<td colspan="3"><h3>Tổng tiền:&nbsp;&nbsp;{{number_format($total,0,',','.')}}</h3></td>
	</tr>
</table>

@stop