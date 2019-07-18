<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Members;
use App\OrderMethod;
use App\Order;
use App\Product;
use App\OrderDetail;
use App\Price;
use App\Sale;

class Ccontroller extends Controller
{
	public function index()
	{
		return view('home');
	}
	public function help()
	{
		return view('help');
	}

	public function search(Request $request,$type=null,$id=null)
	{
		if ($type=='brandID') {
			$products=Product::where('status',1)->where('brandID',$id)->get();

		}elseif ($type == 'mucgia') {
			$mucgia = Price::where('id',$id)->first();
			if($mucgia->priceTo==0){
				$products = Product::where('status',1)->where('productPrice','>=',$mucgia->priceFrom*1000000)->get();
			}else{
				$products = Product::where('status',1)->where('productPrice','>=',$mucgia->priceFrom*1000000)->where('productPrice','<=',$mucgia->priceTo*1000000)->get();
			}

		}elseif ($type=='keyword') {
			$products=Product::where('status',1)->where('productName','like','%'.$request->keyword.'%')->get();

		}elseif($type==null){
			$products=Product::where('status',1)->get();
		}
		return view('showproduct',compact('products'));
	}
	public function searchSale(Request $request, $type=null, $id=null)
	{
		if ($type == 'sale') {
			$sale = Sale::where('id',$id)->first();
			$sales = Product::where('status',1)->where('sale',$sale->price)->get();
		}
		return view('showproductSale',compact('sales'));
	}
}
