<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = ['title','desc'];
    protected $table = 'faq';


    public function translate()
    {
        return $this->hasMany(Translate::class, 'page_id', 'id');
    }


    public static function storeFaq($request)
    {

        $faq = new self();
        return self::saveFaq($request, $faq );
    }

    public static function updateFaq($request,$id)
    {

        $faq = self::find($id);
        return self::saveFaq($request, $faq);
    }

    public static function saveFaq($request, $faq)
    {

        if($request->type) {
            $faq->type = $request->type;
        }

        $faq->save();

        Translate::storeTranslate($request, $faq->id);

    }

    public static function deleteItemRow($id)
    {
        $faq = self::find($id);

        Faq::where('id',$id)->delete();
        Translate::where('page_id',$id)->where('type',config('type.faq'))->delete();

        return true;

    }

}
