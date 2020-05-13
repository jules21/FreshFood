<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'name' => 'required',
            'category_id' => 'required',
            // 'measure_id' => 'required',
            'quantity_per_unit' => 'required',
            'details' => 'required',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Product Name',
            'category_id' => 'Product Category',
            'measure_id' => 'Product unit',
            'quantity_per_unit' => 'Product Quantity',
            'details' => 'Product Description',
        ];
    }
}
