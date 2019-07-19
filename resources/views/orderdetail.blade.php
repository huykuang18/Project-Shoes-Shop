@extends('index')
@section('title','Giỏ hàng')
<link rel="stylesheet" type="text/css" href="">
@section('content')
<?php $total=0;?>
<h2>Chi tiết đơn hàng</h2>
<table class="table table-bordered table-striped mb-0">
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
		<td colspan="2"><h5 style="font-weight: bold; font-style: italic; color: green;">Giao hàng đến:</h5>{{$orders->user->fullname}}&nbsp;,{{$orders->user->address}}</td>
		<td colspan="3"><h3>Tổng tiền:&nbsp;&nbsp;{{number_format($total,0,',','.')}}</h3></td>
	</tr>
</table>

@stop