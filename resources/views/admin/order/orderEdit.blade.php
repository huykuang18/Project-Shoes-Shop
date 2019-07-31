@extends('admin.mainadmin')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" type="text/css" href="/css/orderdetail.css">
@section('content')
<?php $total=0;?>
<section style="border: darkblue thin solid; padding:3%;">
	<form method="post">
		@csrf
		<table class="table table-bordered table-striped">
			<thead  style="background: #99bbff;">
				<tr>
					<th colspan="6"><h2>HÓA ĐƠN BÁN HÀNG</h2><br>
						<table style="background: #99bbff;" class="table table-sm">
							<tr>
								<td>Mã hóa đơn:</td>
								<td>00SH0{{$order->id}}</td>
							</tr>
							<tr>
								<td>Trạng thái đơn hàng:</td>
								<td>
									<select name="status">
										@if($order->status==1)
										<option selected="" value="1">Chưa xử lý</option>
										<option value="2">Đã đóng gói</option>
										<option value="3">Đang vận chuyển</option>
										<option value="4">Đã hoàn thành</option>
										@elseif($order->status==2)
										<option value="1">Chưa xử lý</option>
										<option selected="" value="2">Đã đóng gói</option>
										<option value="3">Đang vận chuyển</option>
										<option value="4">Đã hoàn thành</option>
										@elseif($order->status==3)
										<option value="1">Chưa xử lý</option>
										<option value="2">Đã đóng gói</option>
										<option selected="" value="3">Đang vận chuyển</option>
										<option value="4">Đã hoàn thành</option>
										@else
										<option value="1">Chưa xử lý</option>
										<option value="2">Đã đóng gói</option>
										<option value="3">Đang vận chuyển</option>
										<option selected="" value="4">Đã hoàn thành</option>
										@endif
									</select>
								</td>
							</tr>
							<tr>
								<td>Ngày lập:</td>
								<td>{{$order->orderDate}}</td>
							</tr>
						</table>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<table class="table">
						<tr>
							<td>Đơn vị bán hàng:</td>
							<th>HUTRA SHOES SHOP</th>
						</tr>
						<tr>
							<td>Điện thoại:</td>
							<th>0394366374</th>
						</tr>
						<tr>
							<td>Địa chỉ:</td>
							<th>63 Cầu Giấy, Hà Nội</th>
						</tr>
						<tr>
							<td>STK Vietcombank:</td>
							<th>0344458779451616</th>
						</tr>
					</table>
				</tr>
				<tr>
					<table class="table">
						<tr>
							<td>Người đặt hàng:</td>
							<th>{{$order->user->fullname}}</th>
						</tr>
						<tr>
							<td>Điện thoại:</td>
							<th>{{$order->user->mobile}}</th>
						</tr>
						<tr>
							<td>Email:</td>
							<th>{{$order->user->email}}</th>
						</tr>
						<tr>
							<td>Địa chỉ:</td>
							<th>{{$order->user->address}}</th>
						</tr>
						<tr>
							<td>Thông tin giao hàng:</td>
							<th>Người nhận: {{$order->receiver}} <br>SĐT: {{$order->receiverMobile}} <br>Địa chỉ: {{$order->receiverAddress}}</th>
						</tr>
					</table>
				</tr>
				<tr>
					<table class="table table-bordered table-striped mb-0">
						<thead style="background: #99bbff;">
							<tr>
								<th colspan="6">Danh sách sản phẩm</th>
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
							<td width="450"><a href="{{asset('productdetail/'.$orderDetail->product->id)}}"><img class="rounded-circle" style="width: 15% " src="{{asset('/images/'.$orderDetail->product->productImage)}}">{{$orderDetail->product->productName}}</a></td>
							<td>{{$orderDetail->size}}</td>
							<td>{{$orderDetail->quantity}}</td>
							<td>{{number_format($orderDetail->price,0,',','.')}}</td>
							<td>{{number_format($orderDetail->quantity*$orderDetail->price,0,',','.')}}</td>
							@if($order->status==4)
							<td><a class="btn btn-warning" href="{{asset('product/rate/'.$orderDetail->product->id)}}"><i class="fa fa-star"></i>&nbsp;Rate</a></td>
							@else
							@endif
						</tr>
						<?php $total += $orderDetail->quantity*$orderDetail->price; ?>
						@endforeach
						<tr>
							<td colspan="2"></td>
							<td colspan="3"><h3>Tổng tiền:&nbsp;&nbsp;{{number_format($total,0,',','.')}}</h3></td>
						</tr>
					</table>
				</tr>
			</tbody>
		</table>
		<section class="form-group" style="margin-left: 30%;">
			<input type="submit" value="Xác nhận" class="btn btn-success">
			&nbsp;&nbsp;
			<input type="reset"  value="Đặt lại" class="btn btn-outline-warning">
		</section>
	</form>

</section>

@stop

