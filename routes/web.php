<?php
Route::get('/',function (){
   return view('welcome');
});
Route::get('/admin','DashboardController@index');

Route::get('/admin/user','AdminUserController@index');
Route::post('/admin/user','AdminUserController@store');
Route::get('/admin/user/create','AdminUserController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
