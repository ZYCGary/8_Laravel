<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,' . Auth::id(),
            'email' => 'required|email',
            'introduction' => 'max:80',
            'avatar' => 'mimes:jpeg,bmp,png,gif|dimensions:min_width=200,min_height=200',
        ];
    }

    public function messages()
    {
        return [
            'avatar.dimensions' => 'Image resolution is too low, wide and high need to be more than 200px.',
            'name.unique' => 'The name has already been taken.',
            'name.regex' => 'The username format is invalid. Only Chinese or English letters, numbers, ‘-’ and ‘_’ are supported.',
            'name.between' => 'The username must be between 3 and 25 characters.',
            'name.required' => 'The username field is required.',
        ];
    }
}