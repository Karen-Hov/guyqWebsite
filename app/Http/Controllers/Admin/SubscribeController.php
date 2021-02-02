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
    public function add(Request $request){
        $update = new Updating;
        $update->text = $request->text;
        $update->date = $request->date;
        $update->save();
        return redirect('my_admin/subscribe/send/')->with('message',"Թարմացումը տեղի կունենա $request->date");
    }


    public function send(Request $request){
        $mail = Updating::paginate(10);
        return view('admin.subscribe.send')->with('mail',$mail);
    }
    public function delete($id)
    {
        Subscribe::deleteItemRow($id);
        return response()->json(['status'=>'success'],200);
    }
    public function deleteUpdate($id)
    {
        Updating::where('id',$id)->delete();
        return response()->json(['status'=>'success'],200);
    }
}
