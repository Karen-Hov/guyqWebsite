<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{
    use HasFactory;
    protected $fillable = ['title','subtitle','desc'];
    protected $table = 'translate';
    public $timestamps = false;

    public function about_us(){
        return $this->belongsTo('App/AboutUs');
    }
    public function features(){
        return $this->belongsTo('App/Features');
    }
    public function partners(){
        return $this->belongsTo('App/Partners');
    }
    public function pricing(){
        return $this->belongsTo('App/Pricing');
    }
    public static function storeTranslate($request, $page_Id) : bool
    {
//        dd($request->all(),$page_Id,$request->method() );
        foreach (config('lang') as $lang) {
            $tableT = new self();
            if ($request->method() == 'PUT') {
                $tableT
                    = self::where('page_id', $page_Id)
                    ->where('type', $request['translate'])
                    ->where('code', $lang['code'])->first();
//dd($tableT);

            } else {
                $tableT->page_id = $page_Id;
                $tableT->type = $request['translate'];
            }

            $tableT->code = $lang['code'];
            $tableT->title = $request['title_'.$lang['code']];
            $tableT->subtitle = $request['subtitle_'.$lang['code']];
            $tableT->content = $request['content_'.$lang['code']];



            $tableT->save();
        }
        return true;
    }
}

