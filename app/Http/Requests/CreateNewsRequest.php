<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsRequest extends FormRequest
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
        'title' =>'required|unique:news|string|max:50',
        'description' =>'required',
        'event_date' =>'required',
        'event_time' =>'required',
        'location' =>'required',
        'contact' =>'required',
        'img_name' => 'alpha_num|required|unique:news',
        'image' => 'required|mimes:jpeg,jpg,bmp,png|max:10000'          
        ];
    }
}
