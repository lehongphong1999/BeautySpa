<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\users;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        // Gate::define('view-admin',function ($user){
        //     return $user->checkPemissionAccess('view-admin');
        // });
        // Gate::define('create-admin',function ($user){
        //     return $user->checkPemissionAccess('create-admin');
        // });
        // Gate::define('edit-admin',function ($user){
        //     return $user->checkPemissionAccess('edit-admin');
        // });
        // Gate::define('delete-admin',function ($user){
        //     return $user->checkPemissionAccess('delete-admin');
        // });

    //dashboard
    
        Gate::define('index-dashboard',function ($user){
            return $user->checkPemissionAccess('index-dashboard');
        });
    //category
        Gate::define('index-category',function ($user){
            return $user->checkPemissionAccess('index-category');
        });
        Gate::define('add-category',function ($user){
            return $user->checkPemissionAccess('add-category');
        });
        Gate::define('edit-category',function ($user){
            return $user->checkPemissionAccess('edit-category');
        });
        Gate::define('delete-category',function ($user){
            return $user->checkPemissionAccess('delete-category');
        });

        Gate::define('index-product',function ($user){
            return $user->checkPemissionAccess('index-product');
        });
        Gate::define('add-product',function ($user){
            return $user->checkPemissionAccess('add-product');
        });
        Gate::define('edit-product',function ($user){
            return $user->checkPemissionAccess('edit-product');
        });
        Gate::define('delete-product',function ($user){
            return $user->checkPemissionAccess('delete-product');
        });
    //banner
        Gate::define('index-banner',function ($user){
            return $user->checkPemissionAccess('index-banner');
        });
        Gate::define('add-banner',function ($user){
            return $user->checkPemissionAccess('add-banner');
        });
        Gate::define('edit-banner',function ($user){
            return $user->checkPemissionAccess('edit-banner');
        });
        Gate::define('delete-banner',function ($user){
            return $user->checkPemissionAccess('delete-banner');
        });
    //contact
        Gate::define('index-contact',function ($user){
            return $user->checkPemissionAccess('index-contact');
        });
        Gate::define('read-contact',function ($user){
            return $user->checkPemissionAccess('read-contact');
        });
        // Gate::define('edit-contact',function ($user){
        //     return $user->checkPemissionAccess('edit-contact');
        // });
        Gate::define('delete-contact',function ($user){
            return $user->checkPemissionAccess('delete-contact');
        });   
    //news
        Gate::define('index-news',function ($user){
            return $user->checkPemissionAccess('index-news');
        });
        Gate::define('add-news',function ($user){
            return $user->checkPemissionAccess('add-news');
        });
        Gate::define('edit-news',function ($user){
            return $user->checkPemissionAccess('edit-news');
        });
        Gate::define('delete-news',function ($user){
            return $user->checkPemissionAccess('delete-news');
        });      
    //intro
        Gate::define('index-intro',function ($user){
            return $user->checkPemissionAccess('index-intro');
        });
        Gate::define('add-intro',function ($user){
            return $user->checkPemissionAccess('add-intro');
        });
        Gate::define('edit-intro',function ($user){
            return $user->checkPemissionAccess('edit-intro');
        });
        Gate::define('delete-intro',function ($user){
            return $user->checkPemissionAccess('delete-intro');
        });
    //coupon
        Gate::define('index-coupon',function ($user){
            return $user->checkPemissionAccess('index-coupon');
        });
        Gate::define('add-coupon',function ($user){
            return $user->checkPemissionAccess('add-intro');
        });
        Gate::define('edit-coupon',function ($user){
            return $user->checkPemissionAccess('edit-coupon');
        });
        Gate::define('delete-coupon',function ($user){
            return $user->checkPemissionAccess('delete-coupon');
        });
    //newssale
        Gate::define('index-newssale',function ($user){
            return $user->checkPemissionAccess('index-newssale');
        });
        Gate::define('add-newssale',function ($user){
            return $user->checkPemissionAccess('add-newssale');
        });
        Gate::define('edit-newssale',function ($user){
            return $user->checkPemissionAccess('edit-newssale');
        });
        Gate::define('delete-newssale',function ($user){
            return $user->checkPemissionAccess('delete-newssale');
        });
    //book
        Gate::define('index-book',function ($user){
            return $user->checkPemissionAccess('index-book');
        });
        Gate::define('delete-book',function ($user){
            return $user->checkPemissionAccess('delete-book');
        });
    //user-role
        Gate::define('index-user',function ($user){
            return $user->checkPemissionAccess('index-user');
        });
        Gate::define('add-user',function ($user){
            return $user->checkPemissionAccess('add-user');
        });
        Gate::define('edit-user',function ($user){
            return $user->checkPemissionAccess('edit-user');
        });
        // Gate::define('delete-user',function ($user){
        //     return $user->checkPemissionAccess('delete-user');
        // });
    //revenue
        Gate::define('index-revenue',function ($user){
            return $user->checkPemissionAccess('index-revenue');
        });
        Gate::define('index2-revenue',function ($user){
            return $user->checkPemissionAccess('index2-revenue');
        });
        Gate::define('delete-revenue',function ($user){
            return $user->checkPemissionAccess('delete-revenue');
        });    


        Gate::define('index-role',function ($user){
            return $user->checkPemissionAccess('index-role');
        });
    }
}
