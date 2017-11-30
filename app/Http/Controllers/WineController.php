<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class WineController extends Controller
{
	public function add_wine(Request $request) {
		//Generate product number
		$prodNum=rand(10000000, 20000000);
		//make sure product number is unique
		while(Product::where('prodNum', '==', $prodNum)->count() > 0){
			$prodNum=rand(10000000, 20000000);
		}
		  $product = Product::create([
			  'prodNum' => $prodNum,
			  'prodName' => $request->name,
			  'prodColorID' => $request->color,
			  'prodPack' => $request->packQty,
			  'prodRegionID' => $request->region,
			  'prodFormat' => $request->size,
			  'prodPriceBuy' => $request->priceBuy,
			  'prodSellPrice' => $request->priceSell,
			  'prodQtyBuy' => $request->prodQtyBuy,
			  'prodSoldOut' => 1,
			  'prodAvailable' => 0,
		  ]);
		return redirect()->back()->with('message-success', 'New wine added successfully.');
	}
	public function show_first_five(Request $request) {
		$products=Product::get(['prodID', 'prodNum', 'prodName', 'prodColorID', 'prodPack']);
		dd($products->toJson());
	}
}
