<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$type)
    {
        dd($type);
        $messages = Message::where('type' ,config('type.messages.contact'))->paginate(15);
//        dd($messages);
        return view('admin.messages.index')->with('messages',$messages);

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
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message,$id)
    {

        Message::find($id)->delete();
        return response()->json(['status'=>'success'],200);
    }


    public function contact()
    {
        $messages = Message::where('type' ,config('type.messages.contact'))->paginate(15);
        return view('admin.messages.index')->with('messages',$messages);
    }
    public function partners()
    {
        $messages = Message::where('type' ,config('type.messages.partners'))->paginate(15);
//        dd(config('type.messages.partners'),$messages);
        return view('admin.messages.index')->with('messages',$messages);
    }
    public function request()
    {
        $messages = Message::where('type' ,config('type.messages.request'))->paginate(15);
        return view('admin.messages.index')->with('messages',$messages);
    }


}
