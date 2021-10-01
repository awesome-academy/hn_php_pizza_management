<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceOrderRequest extends FormRequest
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
            'billing_address_1' => 'required',
            'payment_method' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'billing_address_1.required' => __('validation.required'),
            'payment_method.required' => __('validation.required'),
        ];
    }

    public function attributes()
    {
        return [
            'billing_address_1' => __('client.cart.billing_address_1'),
            'payment_method' => __('client.cart.payment_method'),
        ];
    }
}
