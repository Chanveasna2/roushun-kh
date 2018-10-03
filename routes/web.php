<?php
Route::get('/',function (){
   return "Welcome to Home Page";
});

Route::get('/admin','DashboardController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'IsAdmin'], function (){

    Route::resource('admin/users','AdminUserController');
    Route::resource('admin/sys_statics','SysStaticController');
    Route::resource('admin/products','ProductController');
    Route::resource('admin/slide_shows','SlideShowController');
    Route::resource('admin/promotions','PromotionController');

});
