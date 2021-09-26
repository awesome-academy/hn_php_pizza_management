<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'description' => 'required',
            'price' => 'required|regex:/^[1-9][0-9]+/',
            'price_sale' => 'regex:/^[0-9]+/',
            'quantity' => 'required|regex:/^[1-9][0-9]+/',
            'thumbnail' => 'mimes:jpg,jpeg,png',
            'gallery[]' => 'mimes:jpg,jpeg,png',
            'category_id' => 'exists:categories,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('validation.required'),
            'description.required' => __('validation.required'),
            'price.required' => __('validation.required'),
            'price.regex' => __('validation.regex'),
            'price_sale.regex' => __('validation.regex'),
            'quantity.required' => __('validation.required'),
            'quantity.regex' => __('validation.regex'),
            'thumbnail.mimes' => __('validation.mimes', ['values' => 'jpg,jpeg,png']),
            'gallery[].mimes' => __('validation.mimes', ['values' => 'jpg,jpeg,png']),
            'category_id' => __('validation.exists'),
        ];
    }

    public function attributes()
    {
        return [
            'name' => __('admin.column.product.name'),
            'description' => __('admin.column.product.description'),
            'price' => __('admin.column.product.price'),
            'price_sale' => __('admin.column.product.price_sale'),
            'quantity' => __('admin.column.product.quantity'),
            'gallery' => __('admin.column.product.gallery'),
            'thumbnail' => __('admin.column.product.thumbnail'),
            'category_id' => __('admin.column.product.category_id'),
        ];
    }
}
