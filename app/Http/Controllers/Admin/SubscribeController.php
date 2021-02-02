<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use App\Models\Updating;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function show(){
        $mail = Subscribe::paginate(10);
        return view('admin.subscribe.show')->with('mail',$mail);
    }
    public function add(StoreUpdatingPost $request){
        $update = new Updating;
        $update->text = $request->text;
        $update->date = $request->date;
        $update->save();
        return view('admin.subscribe.send')->with('message',"Թարմացումը տեղի կունենա $request->date");
    }


    public function send(Request $request){
        return view('admin.subscribe.send');
    }
    public function delete($id)
    {
        SubscribeMail::deleteItemRow($id);
        return response()->json(['status'=>'success'],200);
    }
}
