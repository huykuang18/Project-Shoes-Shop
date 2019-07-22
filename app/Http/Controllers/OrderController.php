<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\OrderMethod;
use App\Order;
use App\Product;
use App\OrderDetail;
use App\Prices;

class OrderController extends Controller
{
	public function getOrder(){
		$user = User::where('username',session('user'))->first();
		$ordermethods=OrderMethod::where('status',1)->get();
		return view('order',compact('user','ordermethods'));
	}

    public function postOrder(Request $request)
	{
		$user = User::where('username',session('user'))->first();
		$userId=$user->id;
		$methodId=$request->methodId;
		Order::insert([
			'userId'=>$userId,
			'methodId'=>$methodId
		]);
		$order = Order::orderBy('id','desc')->first();
		$orderId = $order->id;
		foreach (array_keys(session('cart')) as $productId):
			$quantity = session("cart.$productId");
			$size = session("cart.size");
			$price = Product::where('id',$productId)->first()->productPrice;
			OrderDetail::insert([
				'orderId'=>$orderId,
				'productId'=>$productId,
				'size'=>$size,
				'quantity'=>$quantity,
				'price'=>$price
			]);
		endforeach;
		session()->forget("cart");
		return redirect('order/follow')->with('alert','success');

	}

	public function updateInfo(Request $request){

		User::where('username',session('user'))->update([
			'fullName'=>$request->input('fullName'),
			'mobile'=>$request->input('mobile'),
			'email'=>$request->input('email'),
			'address'=>$request->input('address')
		]);
		return redirect()->back();
	}

	public function followOrder(){
		$user = User::where('username',session('user'))->first();
		$userId=$user->id;
		$orders=Order::where('userId',$userId)->get();
		$count=Order::where('userId',$userId)->count();
		return view('follow',compact('orders','count'));
	}

	public function OrderDetail($id){
		$user = User::where('username',session('user'))->first();
		$userId=$user->id;
		$order=Order::where('userId',$userId)->first();
		$orderDetails=OrderDetail::where('orderId',$id)->get();
		return view('orderDetail',compact('order','orderDetails'));
	}
}