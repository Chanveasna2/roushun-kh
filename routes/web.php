<?php
Route::get('/',function (){
   return view('welcome');
});
Route::get('/admin','DashboardController@index');

Route::resource('admin/users','AdminUserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
