<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddReques extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules= [
            'Title'=>'required|max:255',
            'description'=>'required|max:1255'
        ];
        if($this->input('imagePlat')){
            $rules['imagePlat']='required|image|mimes:jpg,png,jpeg,gif,svg|max:2048';
        }   else{
            $rules['imagePlat']='sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048';
        }
        return $rules;
    }
}

