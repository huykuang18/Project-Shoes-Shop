<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!-- Brand/logo -->
		<section class="navbar-nav mr-auto">
			<a class="navbar-brand" href="{{asset('admin')}}"><i class="	fa fa-windows" aria-hidden="true"></i> Administrator</a>

			<!-- Links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="/"><span class="oi oi-action-undo"></span><i class="fa fa-mail-forward" aria-hidden="true"></i>&nbsp;Vào trang web</a>
				</li>
			</ul>
		</section>
		<section class="navbar-nav justify-content-end">
			@if(session('userAdmin'))
			<button class="btn btn-outline-warning my-2 my-sm-0" type="button"  >
				<i class="fa fa-user">&nbsp;{{session('userAdmin')}}</i>
			</button>
			&nbsp;
			<button class="btn btn-outline-warning ">
				<a href="{{asset('admin/logout')}}" style="text-decoration: none" >Đăng xuất</a>
			</button>
			@endif
		</section>
	</nav>
	
	<table class="table table-bordered">
		<tbody>
			
			<tr>
				<td style="width: 18%">
					<a href="/admin/products"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Quản lý sản phẩm</a><hr>
					<a href="/admin/orders"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Quản lý đơn hàng</a><hr>
					<a href=""><i class="fa fa-th-list" aria-hidden="true"></i>&nbsp;Quản trị giao diện</a><hr>
					<a href="/admin/users"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;Quản lý User</a><hr>


					{{-- add --}}
					<div class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-commenting" aria-hidden="true" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"></i>&nbsp;Quản lý phản hồi sản phẩm			
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<?php $products=DB::table('products')->where('status',1)->get(); ?>
							@foreach($products as $product)
							<a class="dropdown-item" href="{{url('admin/rates/'.$product->id)}}">
								<b>{{$product->id}}</b>&nbsp;
								<img style="width: 15% " src="{{asset('/images/'.$product->productImage)}}" alt="">{{$product->productName}}<hr>
							</a>
							@endforeach
						</ul>
					</div><hr>
					<a href="/admin/brands"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;Hãng sản xuất</a><hr>
					<a href="/admin/ordermethods"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;Các phương thức thanh toán</a><hr>
					<a href="/admin/prices"><i class="fa fa-ticket" aria-hidden="true"></i>&nbsp;Quản lý đơn giá</a><hr>
					<a href="/admin/sales"><i class="fa fa-percent" aria-hidden="true"></i>&nbsp;Quản lý mức sale</a><hr>

				</td>
					<td>@yield('content')</td>
				</tr>
			</tbody>
		</table>

	</body>
	</html>