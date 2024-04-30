<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'unique:products',
            'category' => 'required',
            'description' => 'required',
            'price' => 'numeric',
            'price_sale' => 'numeric',
        ];
    }

    public function messages()
{
    return [
        'name.unique' => 'Tên sản phẩm đã tồn tại',
        'category.required' => 'Vui lòng chọn danh mục',
        'description.required' => 'Vui lòng nhập mô tả',
        'price.numeric' => 'Nhập không chính xác. Vui lòng nhập số',
        'price_sale.numeric' => 'Nhập không chính xác. Vui lòng nhập số',
    ];
}
}
