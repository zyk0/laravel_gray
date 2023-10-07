<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class UpdateController extends Controller
{

    public function update()
    {
		
        $products = Product::find(9);
       
		$products->update([
            'title' => '.Portrait',
            'description' => 'a drowing of a beatiful person ',
             ]);
		
		return view('home.index'); 	 
		
        dd("updated");
    }
}
