<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'quantity' => 'required',
            'description' => 'required'
        ];
    }

    /**
     * @return string[]
     */
    public function attributes()
    {
        return [
            'name' => 'Name',
            'price' => 'Price',
            'image' => 'Image',
            'category_id' => 'Category_kid',
            'brand_id' => 'Brand_id',
            'quantity' => 'Product_quantity',
            'description' => 'Description'
        ];
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return  [
            'required' => ':attribute is required.',
        ];
    }
}
