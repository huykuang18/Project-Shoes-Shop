<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rate;
use App\Product;
use App\User;
use App\Size;
use App\SizeProduct;

class ProductController extends Controller
{
	public function productDetail($id){

		$product=Product::find($id);

		$userName=User::where('username',session('user'))->first()->fullname;

		$productComments = $product->product_comments()->with('user')->get();

		$productSizes = SizeProduct::where('productId',$id)->get();

		$sizes = Size::all();

		return view('productdetail',compact('product','productComments','userName','productSizes','sizes'));
	}

	public function postProduct($id=null, Request $request)
	{	

		$productID = $id;

		$userID=User::where('username',session('user'))->first()->id;

		$comment = $request->input('comment');

		$rate = $request->rate;

		


		Rate::insert([

			'productID'=>$productID,

			'userID'=>$userID,

			'comment'=>$comment,

			'rate' => $rate

		]);

		$avgrate = Rate::where('ProductID',$id)->avg('rate');

		$countrate = Rate::where('ProductID',$id)->count('userID');

		Product::where('id',$id)->update([

			'rate'=>$avgrate,

			'viewed' => $countrate

		]);

		return redirect()->back();

	}
}