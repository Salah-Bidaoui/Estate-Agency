<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePropertyRequest extends FormRequest
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
            'title' => 'required|unique:properties|max:255',
            'description' => 'required',
            'address' => 'required',
            'postale_code' => 'required|min:4',
            'city' => 'required',
            'space' => 'required',
            'price' => 'required',
            'balconies' => 'nullable',
            'bedrooms' => 'nullable',
            'bathrooms' => 'nullable',
            'garages' => 'nullable',
            'parking_spaces' => 'nullable',
            'pets' => 'required',
            'available' => 'nullable',
            'transaction_type' => 'required',
            'type' => 'required',
            'amenities' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|dimensions:min_width=500,min_height=700|max:3000'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'image.dimensions' => 'the image dimensions must be in min_width=600,min_height=800'
        ];
    }
}
