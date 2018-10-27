<?php
Route::get('/','HomePageController@index');

Route::get('/admin','DashboardController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/main-page','HomePageController@index');

Route::get('/about-products',function (){
    return view("frontend.about_product");
});
Route::get('/product-category','ProductsController@index');

Route::get('/about-us','AboutUsController@index');
Route::get('/distribution-network',function (){
    return view("frontend.distribution");
});
Route::get('/contact-us','ContactUsController@index');

Route::group(['middleware'=>'IsAdmin'], function (){

    Route::resource('admin/users','AdminUserController');
    Route::resource('admin/sys_statics','SysStaticController');
    Route::resource('admin/products','ProductController');
    Route::resource('admin/slide_shows','SlideShowController');
    Route::resource('admin/promotions','PromotionController');

});


