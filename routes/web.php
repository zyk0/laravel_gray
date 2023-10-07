<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/show/{cat}/{product_id}', 'ProductController@showProduct')->name('showProduct'); //category/1
Route::get('/show/{cat}', 'ProductController@showCategory')->name('showCategory'); //Category
Route::get('/', 'HomeController@index')->name('homeProduct');
//Route::get('/start', 'StartController@index')->name('startProduct');;

Route::get('/secret', 'HomeController@secret')->middleware('secretpage');
/*
Route::get('/secret', function(){
	return 'secret! only for Localhost';
})->middleware('secretpage');
*/


//Route::get('/', 'UpdateController@update');