<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontend 
    Route::post('postlogin','Auth\LoginController@postlogin')->name('postlogin');
    Route::get('logout','Auth\LoginController@logout')->name('logout');
    Route::post('postregister','Auth\LoginController@register')->name('postregister');
    Route::post('postforgetpass','Auth\LoginController@postforgetpass')->name('postforgetpass');

    Route::get('index','FrontendController@index' )->name('index');

    Route::get('about','FrontendController@about' )->name('about');

    Route::get('sale','FrontendController@sale' )->name('sale');

    Route::get('service','FrontendController@service' )->name('service');

    Route::get('product','FrontendController@product' )->name('product');
    Route::post('search','FrontendController@search' )->name('search');

    Route::get('contact','FrontendController@contact' )->name('contact');
    Route::post('postcontact','FrontendController@postcontact' )->name('postcontact');

    Route::get('book','FrontendController@book' )->name('book');
    Route::post('postbook','FrontendController@postbook' )->name('postbook');

    Route::get('bookk','FrontendController@bookk' )->name('bookk');

    Route::get('news','FrontendController@news' )->name('news');

    Route::get('userinfo','FrontendController@userinfo' )->name('userinfo');
    Route::post('postedituserinfo', 'FrontendController@postedituserinfo')->name('postedituserinfo');
    Route::post('postavataruserinfo', 'FrontendController@postavataruserinfo')->name('postavataruserinfo');

    Route::get('usersecurity','FrontendController@usersecurity' )->name('usersecurity');
    Route::post('usersecurity','FrontendController@postusersecurity' )->name('postusersecurity');

    Route::get('userhistory','FrontendController@userhistory' )->name('userhistory');

    Route::post('addcart','FrontendController@addcart' )->name('addcart');
    Route::get('cart','FrontendController@cart' )->name('cart');
    Route::get('deleteitemcart','FrontendController@deleteitemcart' )->name('deleteitemcart');

    Route::get('checkout','FrontendController@checkout' )->name('checkout');
    Route::post('checkout','FrontendController@postcheckout' )->name('postcheckout');

    Route::get('finish','FrontendController@finish' )->name('finish');

    Route::get('detailorder','FrontendController@detailorder' )->name('detailorder');

    Route::get('/', function () {
        return view('Admin.dashboard.index');
    });
       
Route::group(['prefix'=>'admin'],function(){

    // Admin Dashboard

    Route::get('/', 'AdminController@indexdashboard')->name('indexdashboard')->middleware('can:index-dashboard');

     // Admin Category

    Route::get('category', 'AdminController@indexcategory')->name('indexcategory')->middleware('can:index-category');

    Route::get('addcategory', 'AdminController@addcategory')->name('addcategory')->middleware('can:add-category');

    Route::post('postaddcategory', 'AdminController@postaddcategory')->name('postaddcategory');

    Route::get('editcategory','AdminController@editcategory')->name('editcategory')->middleware('can:edit-category');
    
    Route::post('posteditcategory','AdminController@posteditcategory')->name('posteditcategory');
    
    Route::get('deletecategory', 'AdminController@deletecatergory')->name('deletecategory')->middleware('can:delete-category');

     // Admin Product

     Route::get('product', 'AdminController@indexproduct')->name('indexproduct')->middleware('can:index-product');

     Route::get('addproduct', 'AdminController@addproduct')->name('addproduct')->middleware('can:add-product');

     Route::post('postaddproduct', 'AdminController@postaddproduct')->name('postaddproduct');

     Route::get('editproduct','AdminController@editproduct')->name('editproduct')->middleware('can:edit-product');
    
     Route::post('posteditproduct','AdminController@posteditproduct')->name('posteditproduct');
    
     Route::get('deleteproduct', 'AdminController@deleteproduct')->name('deleteproduct')->middleware('can:delete-product');

    // Admin Service

    Route::get('service', 'AdminController@indexservice')->name('indexservice');

    Route::get('addservice', 'AdminController@addservice')->name('addservice');

    Route::post('postaddservice', 'AdminController@postaddservice')->name('postaddservice');

    Route::get('editservice','AdminController@editservice')->name('editservice');
   
    Route::post('posteditservice','AdminController@posteditservice')->name('posteditservice');
   
    Route::get('deleteservice', 'AdminController@deleteservice')->name('deleteservice');

     //Admin Banner

     Route::get('banner', 'AdminController@indexbanner')->name('indexbanner')->middleware('can:index-banner');

     Route::get('addbanner', 'AdminController@addbanner')->name('addbanner')->middleware('can:add-banner');

     Route::post('postaddbanner', 'AdminController@postaddbanner')->name('postaddbanner');

     Route::get('editbanner','AdminController@editbanner')->name('editbanner')->middleware('can:edit-banner');
    
     Route::post('posteditbanner','AdminController@posteditbanner')->name('posteditbanner');

     Route::get('deletebanner', 'AdminController@deletebanner')->name('deletebanner')->middleware('can:delete-banner');


     //Admin Contact

     Route::get('contact', 'AdminController@indexcontact')->name('indexcontact')->middleware('can:index-contact');
     Route::get('readcontact', 'AdminController@readcontact')->name('readcontact')->middleware('can:read-contact');
     Route::get('deletecontact', 'AdminController@deletecontact')->name('deletecontact')->middleware('can:delete-contact');


     // Admin News

    Route::get('news', 'AdminController@indexnews')->name('indexnews')->middleware('can:index-news');

    Route::get('addnews', 'AdminController@addnews')->name('addnews')->middleware('can:add-news');

    Route::post('postaddnews', 'AdminController@postaddnews')->name('postaddnews');

    Route::get('editnews','AdminController@editnews')->name('editnews')->middleware('can:edit-news');
    
    Route::post('posteditnews','AdminController@posteditnews')->name('posteditnews');
    
    Route::get('deletenews', 'AdminController@deletenews')->name('deletenews')->middleware('can:delete-news');


    // Admin Intro

    Route::get('intro', 'AdminController@indexintro')->name('indexintro')->middleware('can:index-intro');

    Route::get('addintro', 'AdminController@addintro')->name('addintro')->middleware('can:add-intro');

    Route::post('postaddintro', 'AdminController@postaddintro')->name('postaddintro');

    Route::get('editintro','AdminController@editintro')->name('editintro')->middleware('can:edit-intro');
    
    Route::post('posteditintro','AdminController@posteditintro')->name('posteditintro');
    
    Route::get('deleteintro', 'AdminController@deleteintro')->name('deleteintro')->middleware('can:delete-intro');

    // Admin Coupon

    Route::get('coupon', 'AdminController@indexcoupon')->name('indexcoupon')->middleware('can:index-coupon');

    Route::get('addcoupon', 'AdminController@addcoupon')->name('addcoupon')->middleware('can:add-coupon');

    Route::post('postaddcoupon', 'AdminController@postaddcoupon')->name('postaddcoupon');

    Route::get('editcoupon','AdminController@editcoupon')->name('editcoupon')->middleware('can:edit-coupon');
    
    Route::post('posteditcoupon','AdminController@posteditcoupon')->name('posteditcoupon');
    
    Route::get('deletecoupon', 'AdminController@deletecoupon')->name('deletecoupon')->middleware('can:delete-coupon');

    // Admin News

    Route::get('newssale', 'AdminController@indexnewssale')->name('indexnewssale')->middleware('can:index-newssale');

    Route::get('addnewssale', 'AdminController@addnewssale')->name('addnewssale')->middleware('can:add-newssale');

    Route::post('postaddnewssale', 'AdminController@postaddnewssale')->name('postaddnewssale');

    Route::get('editnewssale','AdminController@editnewssale')->name('editnewssale')->middleware('can:edit-newssale');
    
    Route::post('posteditnewssale','AdminController@posteditnewssale')->name('posteditnewssale');
    
    Route::get('deletenewssale', 'AdminController@deletenewssale')->name('deletenewssale')->middleware('can:delete-newssale');

    // Admin books

    Route::get('book', 'AdminController@indexbook')->name('indexbook')->middleware('can:index-book');

    Route::get('editbook', 'AdminController@editbook')->name('editbook');

    Route::post('posteditbook/{id}','AdminController@posteditbook')->name('posteditbook');

    Route::get('deletebook', 'AdminController@deletebook')->name('deletebook')->middleware('can:delete-book');

    // Admin Users_Role

    Route::get('indexuser', 'AdminController@indexuser')->name('indexuser')->middleware('can:index-user');

    Route::get('adduser', 'AdminController@adduser')->name('adduser')->middleware('can:add-user');

    Route::post('postadduser', 'AdminController@postadduser')->name('postadduser');

    Route::get('edituser', 'AdminController@edituser')->name('edituser')->middleware('can:edit-user');

    Route::post('postedituserrole','AdminController@postedituserrole')->name('postedituserrole');
    

    // Admin Role

    Route::get('indexrole', 'AdminController@indexrole')->name('indexrole')->middleware('can:index-role');

    Route::get('editrole', 'AdminController@editrole')->name('editrole');

    Route::post('posteditrole/{id}', 'AdminController@posteditrole')->name('posteditrole');

    Route::get('addrole', 'AdminController@addrole')->name('addrole');

    Route::post('postaddrole', 'AdminController@postaddrole')->name('postaddrole');

    Route::get('deleterole', 'AdminController@deleterole')->name('deleterole');

   

    // Admin Revenue

    Route::get('indexrevenue', 'AdminController@indexrevenue')->name('indexrevenue')->middleware('can:index-revenue');

    Route::get('index2revenue', 'AdminController@index2revenue')->name('index2revenue')->middleware('can:index2-revenue');

    Route::get('showdetailday', 'AdminController@showdetailday')->name('showdetailday')->middleware('can:show-detailday');

    Route::get('deleterevenue', 'AdminController@deleterevenue')->name('deleterevenue')->middleware('can:delete-revenue');

    // Admin Order

    Route::get('indexorder', 'AdminController@indexorder')->name('indexorder');

    Route::get('showdetailorder', 'AdminController@showdetailorder')->name('showdetailorder');

    Route::get('deleteorder', 'AdminController@deleteorder')->name('deleteorder');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
