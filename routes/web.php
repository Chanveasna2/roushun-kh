
<?php
use App\SysStatic;
use Illuminate\Support\Facades\Input as input;
use App\User;

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
Route::get('/admin/profile',function (){
    return view('auth.profile');
});
Route::get('/changepassword','ChangePasswordController@index');

Route::post('change/password',function (){
    $users = User::find(Auth::user()->id);

    if(Hash::check(Input::get('passwordOld'),$users['password']) && Input::get('password') == Input::get('password_confirmation')){
        $users->password = bcrypt(Input::get('password'));
        $users->save();
        return redirect('/admin/profile')->with('success','Password Changed');
    }else{
        return back()->with('error','Something went wrong!');
    }

});




