<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricings = Pricing::with(['translate'=>function ($q) {
            $q->where('code','hy')->where('type',config('type.pricing'));
        } ])->paginate(10);
        return view('admin.pricing.index')->with('pricing',$pricings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pricing.create');

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
        Pricing::storePricing($request);
        return redirect('my_admin/pricing/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pricing  $pricings
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pricing  $pricings
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricings,$id)
    {
        //
        $pricings= Pricing::with(['translate'=>function ($q) {
            $q->where('type',config('type.pricing'));
        } ])->find($id);
        return view('admin.pricing.edit')->with('pricing', $pricings);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pricing  $pricings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricing $pricings,$id)
    {
//        dd($request->all());
        Pricing::updatePricing($request,$id);
        return redirect('/my_admin/pricing/')->with('flash_message_success','Հրապարակումը հաջողությամբ խմբագրված է ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pricing  $pricings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricing $pricings,$id)
    {
        Pricing::deleteItemRow($id);
        return response()->json(['status'=>'success'],200);
    }
}
