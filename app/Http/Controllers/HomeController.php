<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\colorProd;
use \App\Country;
use \App\Region;
use \App\Packaging;

class HomeController extends Controller {
	public function index(Request $request){
		$page=$request->page;
		if(is_null($page)){
			$page=1;
		}

		return view('winelist')->with([
			'products' => Product::skip(($page-1)*183)->take(183)->get(),
			'pages' => Product::count(),
			'page' => $page,
			'colors' => colorProd::all(),
			'countries' => Country::all(),
			'regions' => Region::all(),
			//	if the packages table was in use
			// 'packages' => Packaging::all(),
		]);
	}
	public function wine(Request $request, Product $wine){
		return view('wine')->with([
			'product' => $wine
		]);
	}	


	//Used this function to index the database
	public function db_index(Request $request){
		// $tables = \DB::select('SHOW TABLES');
		// foreach($tables as $table) {
		//       var_dump($table);
		// }
    	// var_dump(\DB::select('SELECT * from Country'));
    	// var_dump(\DB::select('SELECT * from Packaging'));
    	// var_dump(\DB::select('SELECT * from Producers'));
    	// var_dump(\DB::select('SELECT * from Products'));
    	// var_dump(\DB::select('SELECT * from Regions'));
    	// var_dump(\DB::select('SELECT * from Suppliers'));
    	// var_dump(\DB::select('SELECT * from colorProd'));
	}
}
