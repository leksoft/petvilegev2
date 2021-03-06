<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function messages(){
        return [
            'firstname.required' => 'โปรดระบุชื่อ',
            'lastname.required' => 'โปรดระบุนามสกุล',
            'email.required' => 'โปรดระบุอีเมล',
            'password.required' => 'โปรดระบุรหัสผ่าน',
        ];
    }
}
