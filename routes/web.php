<?php
Route::get('/',function (){
   return view('welcome');
});
Route::get('/admin','DashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
