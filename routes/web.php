<?php
Route::get('/',function (){
   return view("frontend.homepage.homepage");
});

Route::get('/admin','DashboardController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/main-page',function (){
    return view("frontend.homepage.homepage");
});

Route::get('/about-products',function (){
   return view("frontend.about_product");
});
Route::get('/about-us',function (){
    return view("frontend.aboutus");
});
Route::get('/distribution-network',function (){
    return view("frontend.distribution");
});
Route::get('/contact-us',function (){
    return view("frontend.contactus");
});

Route::group(['middleware'=>'IsAdmin'], function (){

    Route::resource('admin/users','AdminUserController');
    Route::resource('admin/sys_statics','SysStaticController');
    Route::resource('admin/products','ProductController');
    Route::resource('admin/slide_shows','SlideShowController');
    Route::resource('admin/promotions','PromotionController');

});


