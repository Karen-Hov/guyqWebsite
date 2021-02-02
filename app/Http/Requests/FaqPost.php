<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title_hy" =>'required|min:3|max:500',
            "title_ru" =>'required|min:3|max:500',
            "title_en" =>'required|min:3|max:500',
            "content_hy" =>'required|min:20|max:50000',
            "content_ru" =>'required|min:20|max:50000',
            "content_en" =>'required|min:20|max:50000',
        ];
    }
}
