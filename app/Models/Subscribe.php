<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

    protected $table = 'subscribe';

    public  static function saveSubscribeMail($subscribe)
    {
        $new_mail = new Subscribe;
        $new_mail->subscribe = $subscribe;
        $new_mail->save();
        return true;
    }

    public static function deleteItemRow($id)
    {
        SubscribeMail::where('id',$id)->delete();
        return true;

    }

}
