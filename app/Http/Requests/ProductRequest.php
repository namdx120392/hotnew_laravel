<?php

namespace AdsNews\Http\Requests;

use AdsNews\Http\Requests\Request;

class ProductRequest extends Request
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
            'title'  => 'required|string|min:3|max:255',
            'content'  => 'required|string|min:30'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập tiêu đề sản phẩm',
            'title.string' => 'Tiêu đề sản phẩm phải là một chuỗi',
            'title.min' => 'Tiêu đề sản phẩm quá ngắn (từ 3 đến 255 ký tự)',
            'title.max' => 'Tiêu đề sản phẩm quá dài (từ 3 đến 255 ký tự)',
            'content.required'  => 'Nội dung sản phẩm không được rỗng.',
            'content.min'  => 'Nội dung sản phẩm quá ngắn (Lớn hơn 3 ký tự)',
            'content.string' => 'Nội dung sản phẩm phải là một chuỗi'
        ];
    }
}
