<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    public function boot()
    {
        //categories
		$categories = Category::orderBy('id')->get();

        View::share([
            'categories' => $categories
        ]);
    }
}
