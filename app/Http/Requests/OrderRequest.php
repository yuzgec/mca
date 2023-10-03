<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name'                 => 'required|min:3',
            'email'                => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'name.required'            => 'The name field cannot be left blank',
            'name.min'                 => 'The name can be at least 3 characters',
            'email.email'              => 'Enter a valid email',
            'email.required'           => 'Email field cannot be left blank',
        ];
    }
}
