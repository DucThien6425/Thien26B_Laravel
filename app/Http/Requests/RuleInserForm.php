<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleInserForm extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user' => 'required|string|max:255',
            'phone' => 'numeric',
            'email' => 'required|email',
            'address' => 'required|string|max:255'
        ];
    }
    public function messages()
    {
        return [
            'user.required' => 'Vui lòng nhập tên không bao gồm số!',
            'user.string' => 'Vui lòng nhập tên!',
            'phone.numeric' => 'Vui lòng nhập số điện thoại hợp lệ!',
            'email.required' => 'Vui lòng nhập email!',
            'email.email' => 'Vui lòng nhập địa chỉ email hợp lệ!',
            'address.string' => 'Địa chỉ phải là một chuỗi ký tự hợp lệ!',  
        ];
    }
}
