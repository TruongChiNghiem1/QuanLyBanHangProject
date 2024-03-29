<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class KhachHangRequest extends FormRequest
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
            'TenKhachHang' => 'required',
            'SoDienThoai' => request()->route('id')
                    ? ('required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|'. Rule::unique('_khach_hang')->ignore(request()->route('id'), 'MaKH'))
                    : ('required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|'. Rule::unique('_khach_hang', 'SoDienThoai')->where('LoaiKhachHang', 1)),
            'DiaChi' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'TenKhachHang.required' => 'Vui lòng nhập tên khách hàng',
            'SoDienThoai.required' => 'Vui lòng nhập số điện thoại khách hàng',
            'SoDienThoai.unique' => 'Số điện thoại này đã được sử dụng',
            'SoDienThoai.regex' => 'Vui lòng nhập đúng số điện thoại',
            'SoDienThoai.min' => 'Số điện thoại phải có ít nhất 10 số',
            'DiaChi.required' => 'Vui lòng nhập địa chỉ khách hàng',
        ];
    }
}
