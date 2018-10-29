
<?php
use App\SysStatic;
Route::get('/404error',function (){
    return view('admin.errors.error404');
});
Route::get('/','HomePageController@index');

Route::get('/admin','DashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/main-page','HomePageController@index');

Route::get('/about-products',function (){
    $sys_s=SysStatic::where('id',5)->get();
    $sys_logo=SysStatic::where('id',6)->get();
    $sys_adv=SysStatic::where('id',7)->get();
    $sys_footerLeft=SysStatic::where('id',8)->get();
    return view("frontend.about_product",compact("sys_s","sys_logo","sys_adv","sys_footerLeft"));
});
Route::get('/product-category','ProductsController@index');

Route::get('/about-us','AboutUsController@index');

Route::get('/distribution-network',function (){
    $sys_s=SysStatic::where('id',5)->get();
    $sys_logo=SysStatic::where('id',6)->get();
    $sys_adv=SysStatic::where('id',7)->get();
    $sys_footerLeft=SysStatic::where('id',8)->get();
    return view("frontend.distribution",compact("sys_s","sys_logo","sys_adv","sys_footerLeft"));
});
Route::get('/contact-us','ContactUsController@index');




Route::resource('admin/sys_statics','SysStaticController');

Route::resource('admin/products','ProductController');

Route::resource('admin/slide_shows','SlideShowController');

Route::resource('admin/promotions','PromotionController');


Route::group(['middleware'=>'IsAdmin'], function (){


    Route::resource('admin/users', 'AdminUserController');


});


