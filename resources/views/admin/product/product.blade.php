@extends('admin.mainadmin')
<link rel="stylesheet" href="/css/app.css">
@section('content')


<section style="width: 85%; background-color: white;margin-left: 7%">
	<a href="{{url('admin/productInsert/')}}" class="btn btn-primary" style="margin:2%"><b>+ </b>Thêm mới</a>
	<hr>
	<table class="table table-bordered table-striped mb-0">
		<thead>
			<tr>
				<th width="20%" style="text-align: center;"  >Ảnh</th>
				<th width="20%" >Sản phẩm</th>
				<th width="20%" >Giá</th>
				<th width="20%" >Hãng</th>
				<th width="20%">Thao tác</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<?php $has=0;?>
			@foreach($orderDetails as $orderDetail)
			@if($product->id==$orderDetail->productId)
			<?php $has=1; break;?>
			@endif
			@endforeach
			<tr>
				<td style="text-align: center;" ><img style="width: 40% " src="{{asset('/images/'.$product->productImage)}}" alt=""></td>
				<td>{{$product->productName}}</td>
				<td>{{$product->productPrice}}</td>
				<td>{{$product->brandName}}</td>
				<td>
					<a href="{{url('admin/productedit/'.$product->id)}}" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i>
					</a>
					<a href="product/delete/{{$product->id}}" style="display: <?=$has==0?:'none'?>;" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" ><i class="fa fa-close" aria-hidden="true"></i></a>

				</td>
			</tr>
			@endforeach
			<tr>

			</tr>
		</tbody>
	</table>	
</section>
@endsection