<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required',
            'brDesc' => 'required',
            'lnDesc' => 'required',
            'image' => 'mimes:jpg, jpeg, png',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'It\'s required to fill out title field! ',
            'brDesc.required' => 'It\'s required to fill out brief_description field! ',
            'lnDesc.required' => 'It\'s required to fill out long_description field! ',
            'image.mimes' => 'Only image is allowed!',
        ];
    }
}
