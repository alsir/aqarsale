<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
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
            'squaresmeters' => 'required|numeric',
            'bedrooms_number' => 'required|numeric',
            'bathrooms_number' => 'required|numeric',
            'halls_number' => 'required|numeric',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'level' => 'required|numeric',
            'address' => 'required|max:255|string',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'area_id' => 'required|numeric',
            'customer_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'main_photo' => 'required|mimes:jpg,bmp,png',
        ];
    }
}
