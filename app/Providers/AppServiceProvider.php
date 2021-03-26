<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\categories;
use App\products;
use App\news;
use App\news_sales;
use App\cart;

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

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with([
                'data_categories' => categories::all(),
                'dataproduct_category' => categories::where('devide',2)->get(),
                'data_products' => products::all(),
                'datanews' => news::limit(4)->get(),
                'data_newssale' => news_sales::all(),
                // 'data_cart'=> cart::all(),
            ]);
        });
    }
}
