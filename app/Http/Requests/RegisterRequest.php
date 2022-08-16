<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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

        return $rules = [
            'name' => 'required',
            'phone'=> 'required|numeric|min:10|max:11|',
            'email' => 'required|email',
            'address' => 'required',
            'password' => 'required'

        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'password' => 'Password'
        ];
    }

    public function messages()
    {
        return  [
            'phone.min' => ':attribute is malformed.',
            'phone.max' => ':attribute is malformed.',
            'numeric' => ':attribute must be numeric',
            'required' => ':attribute is required.',
            'email' => ':attribute is malformed.'
        ];
    }
}
