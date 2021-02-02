<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Features::with(['translate'=>function ($q) {
            $q->where('code','hy');
        } ])->paginate(10);
//dd($features);
        return view('admin.features.index')->with('features',$features);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.features.create');

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
        Features::storeFeatures($request);
        return redirect('my_admin/features/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function show(Features $Features)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function edit(Features $Features,$id)
    {
        //
//        dd($id,$Features);
        $features= Features::with('translate')->find($id);
        return view('admin.features.edit')->with('features', $features);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Features $features,$id)
    {
        //
//        dd($request->all());
        Features::updateFeatures($request,$id);
        return redirect('/my_admin/features/')->with('flash_message_success','Հրապարակումը հաջողությամբ խմբագրված է ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function destroy(Features $Features,$id)
    {
        Features::deleteItemRow($id);
        return response()->json(['status'=>'success'],200);
    }
}
