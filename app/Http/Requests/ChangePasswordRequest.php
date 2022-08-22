<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'password' => 'required|min:8|max:15|regex:/[0-9][a-z][A-Z][@!#$%^&*]/'
        ];
    }

    public function attributes()
    {
        return [
            'password' => 'Password'
        ];
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return  [
            'password.min' => ':attribute length must be at least 8 characters.',
            'password.max' => ':attribute length is no more than 15 characters.'
        ];
    }
}
