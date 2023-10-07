<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
		$products = Product::orderBy('price', 'ASC')->take(8)->get();
		
		$once = Product::orderBy('id', 'DESC')->take(3)->first();
		
		//$products = Product::where('id')->paginate(4);
		//$products = Product::all();
		//$products = Product::orderBy('title')->take(4)->get();

        return view('home.index',[
            'prod' => $products,
			'one' => $once,
        ]); 
		// шаблон home/index. blade.php
		// ключ 'prod' => значение $products
    }
	
	// коллекции
	/*
	public function collect(){
		//$collection = collect([1, 2, 3, 4]);
		//$collection->count();
		
		$products = Product::all();
		$collection = collect($products);
		$coll = $collection->count();
		
		return view('home.index', $coll); 
	}
	*/
	
   public function secret(){
		$secret = Product::all();
        return view('secret.index',[
            'sec' => $secret,
        ]); 
    }
	
}
