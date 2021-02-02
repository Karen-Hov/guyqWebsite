<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsEditPost;
use App\Http\Requests\AboutUsPost;
use App\Models\AboutUs;
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
//        dd('about_us' == config('type.about_us'));
        $about_us = AboutUs::with(['translate'=>function ($q) {
            $q->where('code','hy');
        } ])->first();
//dd($about_us);
        return view('admin.about_us.index')->with('about_us',$about_us);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about_us.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutUsPost $request)
    {
        //
//        dd($request->all());
        AboutUs::storeAboutUs($request);
        return redirect('my_admin/about_us/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUs $aboutUs,$id)
    {
        //
//        dd($id,$aboutUs);
        $about_us= AboutUs::with('translate')->find($id);
        return view('admin.about_us.edit')->with('about_us', $about_us);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(AboutUsEditPost $request, AboutUs $aboutUs,$id)
    {
        //
//        dd($request->all());
        AboutUs::updateAboutUs($request,$id);
        return redirect('/my_admin/about_us/')->with('flash_message_success','Հրապարակումը հաջողությամբ խմբագրված է ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
