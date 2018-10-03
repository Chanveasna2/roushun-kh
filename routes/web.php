<?php
Route::get('/',function (){
   return view('welcome');
});

Route::get('/admin','DashboardController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'IsAdmin'], function (){

    Route::resource('admin/users','AdminUserController');
    Route::resource('admin/sys_statics','SysStaticController');
    Route::resource('admin/products','ProductController');

});
