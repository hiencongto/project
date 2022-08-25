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
            'phone'=> 'required|regex:/(0)[0-9]/|min:10|max:12',
            'email' => 'required|email',
            'address' => 'required',
            'password' => 'required|min:8|max:15|regex:/[0-9][a-z][A-Z][@!#$%^&*]/'

        ];
    }

    /**
     * @return string[]
     */
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

    /**
     * @return string[]
     */
    public function messages()
    {
        return  [
            'phone.min' => ':attribute format is invalid.',
            'phone.max' => ':attribute format is invalid.',
            'required' => ':attribute is required.',
            'email' => ':attribute format is invalid.',
            'password.min' => ':attribute length must be at least 8 characters.'
        ];
    }
}
