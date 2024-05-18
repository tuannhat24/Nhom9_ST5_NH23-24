<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryAddRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique',
            'parent_id' => 'nullable',
            'description' => 'nullable|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ];

        
    }
    public function messages()
    {
        return [
            'name.unique' => 'Tên sản phẩm đã tồn tại',
            'image.image' => 'Tệp tải lên phải là một tệp hình ảnh',
            'image.mimes' => 'Chỉ chấp nhận tệp hình ảnh định dạng JPEG, PNG hoặc GIF',
            'image.max' => 'Kích thước tệp quá lớn. Vui lòng chọn một tệp nhỏ hơn 5MB',
        ];
    }
}
