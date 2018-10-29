<?php

namespace App\Http\Controllers;

use App\SysStatic;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sys_static= SysStatic::where('id',1)->get();
        $sys_static2= SysStatic::where('id',2)->get();
        $sys_static3= SysStatic::where('id',3)->get();
        $sys_s=SysStatic::where('id',5)->get();
        $sys_logo=SysStatic::where('id',6)->get();
        $sys_adv=SysStatic::where('id',7)->get();
        $sys_footerLeft=SysStatic::where('id',8)->get();
        return view("frontend.aboutus",compact("sys_footerLeft","sys_static","sys_static2","sys_static3","sys_s","sys_logo","sys_adv"));
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
