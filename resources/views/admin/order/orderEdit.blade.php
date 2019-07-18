@extends('admin.mainadmin')
<link rel="stylesheet" href="/css/app.css">
@section('content')
<form method="post" enctype="multipart/form-data">
	@csrf
	<table class="table table-boredred" style="width: 80%;margin-left: 10%;padding-top: 5%">
		<tr>
			<th>Họ tên khách hàng</th>
			<th>Phương thức thanh toán</th>
			<th>Trạng thái đơn hàng</th>
		</tr>
		@foreach($orders as $order)
		<tr>
			<td>{{$order->user->fullname}}</td>			
			<td>{{$order->method->methodName}}</td>
			<td>
				<select name="status">
					<option value="1">Chưa xử lý</option>
					<option value="2">Đang xử lý</option>
					<option value="3">Đã hoàn thành</option>
				</select>
			</td>
		</tr>
		@endforeach
	</table>
	<section class="form-group" style="margin-left: 30%;">
		<input type="submit" value="Xác nhận" class="btn btn-success">
		&nbsp;&nbsp;
		<input type="reset"  value="Đặt lại" class="btn btn-outline-warning">
	</section>
</form>
@stop