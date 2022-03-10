<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\validation\Validator;
// use Illuminate\Support\Facades\Validator;

class VideoRequest extends FormRequest
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
        $rules = [
            'title' =>'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif | max:1000',
            // 'video' => 'sometimes|required',
            // 'url' => 'sometimes|required',
            'type' => 'required',
            'description' =>'required',
            'content_type' =>'required',
            'cat_id' =>'required',
            'lang_id' =>'required',
        ];
        return $rules;   
    }
    public function withValidator(Validator $validator){
        $validator->sometimes('video', 'required', function ($input) {
    return 'videoUpload' ===$input->get('type');
        });
    }
}
