<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
	public function showProduct($cat, $product_id){
		//$item = Product::where('id', $product_id)->first();
		$item = Product::findOrFail($product_id);
		//$item = collect($name)->random();
		//$item = Product::orderBy(\DB::raw('RAND()'))->first();
		
		return view('product.show', [
			'item' => $item
		]);
	}
	
	/*
	public function showCategory(){
		return view('categories.index');
	}
	*/
	
	public function showCategory($cat_alias){
        $cat = Category::where('alias', $cat_alias)->first();		
		//$cat = Category::findOrFail($cat_alias);

        return view('categories.show',[
            'cat' => $cat
        ]);
    }

}
