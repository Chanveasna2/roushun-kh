
<?php
use App\SysStatic;

Route::get('/','HomePageController@index');

Route::get('/admin','DashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/main-page','HomePageController@index');

Route::get('/about-products',function (){
    $sys_s=SysStatic::where('id',5)->get();
    return view("frontend.about_product",compact("sys_s"));
});
Route::get('/product-category','ProductsController@index');

Route::get('/about-us','AboutUsController@index');

Route::get('/distribution-network',function (){
    $sys_s=SysStatic::where('id',5)->get();
    return view("frontend.distribution",compact("sys_s"));
});
Route::get('/contact-us','ContactUsController@index');




Route::resource('admin/sys_statics','SysStaticController');

Route::resource('admin/products','ProductController');

Route::resource('admin/slide_shows','SlideShowController');

Route::resource('admin/promotions','PromotionController');


Route::group(['middleware'=>'IsAdmin'], function (){


    Route::resource('admin/users', 'AdminUserController');


});


