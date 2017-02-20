<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CreateLibraryRequest extends FormRequest
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
        'LibraryName' => 'required',
        'Address' => 'required' , 
        'Ward' => 'required',
        'Location' =>'required',
        'ContactName'  =>'required',
        'ContactNumber'   =>'required',
        'Email'   =>'required',
        'Facebook' =>'required',
        'StartDate' =>'required',
        'Description' =>'required',
        'Township' =>'required',
        'Services' =>'required',
        'ImageName' => 'required',
        'image' => 'required|mimes:jpeg,jpg,bmp,png|max:1000',
        ];
    }
}
