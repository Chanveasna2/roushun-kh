<?php

namespace App\Http\Controllers;

use App\Product;
use App\SlideShow;
use App\SysStatic;
use Illuminate\Http\Request;
use App\Promotion;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pro=Product::all()->take(3);
        $pro_popular=Product::where('isPop',1)->orderBy('order','asc')->get()->take(6);
        $sys_s=SysStatic::where('id',5)->get();
        $sys_logo=SysStatic::where('id',6)->get();
        $sys_adv=SysStatic::where('id',7)->get();
        $sys_footerLeft=SysStatic::where('id',8)->get();
        $promotion=Promotion::orderBy('order','asc')->get()->take(3);
        $sys_static= SysStatic::where('id',1)->get();
        $slide1=SlideShow::where('id',1)->get();
        return view("frontend.homepage.homepage",compact("slide1","sys_static","promotion","pro","sys_s","pro_popular","sys_logo","sys_adv","sys_footerLeft"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
