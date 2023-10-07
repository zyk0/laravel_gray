<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function prodImages(){
        return $this->hasMany('App\ProductImage');
    }
	// hasMany() - один ко многим(один Product - много App\ProductImage.php)
	
	public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
	
	
	/*
	public function nameUpperCase($value){
        return strtoupper($value);
    }
	*/
	protected $guarded = [];
}
