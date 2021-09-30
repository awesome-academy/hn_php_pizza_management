<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'fullname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => __('validation.required'),
            'email.required' => __('validation.required'),
            'email.email' => __('validation.email'),
            'email.unique' => __('validation.unique'),
            'password.required' => __('validation.required'),
            'password_confirm.required' => __('validation.required'),
            'password_confirm.same' => __('validation.same', ['other' => __('client.register.label.password')]),
        ];
    }

    public function attributes()
    {
        return [
            'fullname' => __('client.register.label.fullname'),
            'emai' => __('client.register.label.email'),
            'password' => __('client.register.label.password'),
            'password_confirmation' => __('client.register.label.password_confirm'),
        ];
    }
}
