<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtname' => 'required|min: 5|max: 25',
            'txtnote' => 'max: 255',
            'txtphone' => 'required|min: 10|max: 11',
            'txtaddress' => 'required|max: 100'
        ];
    }

    public function message() {
        return [
            'txtname.required' => 'Tên người nhận không được đẻ trống!',
            'txtname.min' => 'Tên phải 5 chữ cái trở lên',
            'txtname.max' => 'Tên tối đa 25 chữ cái',
            'txtnote' => 'Ghi chú không được quá 255 kí tự',
            'txtphone.required' => 'Số điện thoại không được để trống!',
            'txtphone.min' => 'Số điện thoại ít nhât 10 chữ số',
            'txtphone.max' => 'Số điện thoại nhiều nhất 11 chữ số',
            'txtaddress.required' => 'Vui lòng nhập địa chỉ!',
            'txtaddress.min' => 'Địa chỉ tối đa 100 kí tự'
        ];
    }
}
