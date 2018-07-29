<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoresRequest extends FormRequest
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
            'category_id' => 'required',
            'store_name_th' => 'required|string|max:255',
            'store_name_en' => 'required|string|max:255',
            'address' => 'required',
            'tel' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'category_id.required' => 'โปรดเลือกหมวดหมู่ร้านค้า',
            'store_name_th.required' => 'โปรดระบุชื่อร้านค้าภาษาไทย',
            'store_name_en.required' => 'โปรดระบุชื่อร้านค้าภาษาอังกฤษ',
            'address.required' => 'โปรดระบุที่อยู่สำหรับติดต่อร้านค้า',
            'tel.required' => 'โปรดระบุเบอร์โทรศัพท์ร้านค้า'
        ];
    }
}
