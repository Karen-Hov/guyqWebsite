<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partners;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partners::with(['translate'=>function ($q) {
            $q->where('code','hy')->where('type',config('type.partners'));
        } ])->first();
//dd($partners);
        return view('admin.partners.index')->with('partners',$partners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partners.create');

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
        Partners::storePartners($request);
        return redirect('my_admin/partners/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function show(Partners $partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function edit(Partners $partners,$id)
    {
        //
//        dd($id,$partners);
        $partners= Partners::with(['translate'=>function ($q) {
            $q->where('type',config('type.partners'));
        } ])->find($id);
        return view('admin.partners.edit')->with('partners', $partners);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partners $partners,$id)
    {
        //
//        dd($request->all());
        Partners::updatePartners($request,$id);
        return redirect('/my_admin/partners/')->with('flash_message_success','Հրապարակումը հաջողությամբ խմբագրված է ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partners $partners,$id)
    {
        Partners::deleteItemRow($id);
        return response()->json(['status'=>'success'],200);
    }
}
