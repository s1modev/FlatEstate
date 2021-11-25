<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|max:255',
            'slug' => 'required|max:300|unique:posts',
            'deal' => 'required|max:50',
            'description' => 'required|max:4000',
            'media' => 'required',
            'country' => 'required|max:50',
            'city' => 'required|max:255',
            'address' => 'max:255',
            'lat' => 'nullable|numeric|max:varchar(255)',
            'lng' => 'nullable|numeric|max:varchar(255)',
            'bedrooms_number' => 'required|numeric|max:varchar(255)',
            'bathrooms_number' => 'required|numeric|max:varchar(255)',
            'surface' => 'required|numeric|max:varchar(255)',
            'price' => 'required|numeric|max:varchar(255)',
            'garage' => 'nullable|boolean',
            'security' => 'nullable|boolean',
            'parking' => 'nullable|boolean',
            'balcony' => 'nullable|boolean',
            'swimming_pool' => 'nullable|boolean',
            'garden' => 'nullable|boolean',
            'terrace' => 'nullable|boolean',
            'category' => 'required|max:255',
            'condition' => 'required|max:255',
        ];
    }
}
