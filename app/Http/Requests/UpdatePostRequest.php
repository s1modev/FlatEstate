<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'slug' => ['required', 'max:300', 'unique:posts,slug,'.$this->route('post')->id],
            'deal' => 'required|max:50',
            'description' => 'required|max:4000',
            'country' => 'required|max:50',
            'city' => 'required|max:255',
            'address' => 'max:255',
            'lat' => 'nullable|numeric|max:varchar(255)',
            'lng' => 'nullable|numeric|max:varchar(255)',
            'bedrooms_number' => 'required|numeric|max:varchar(255)',
            'bathrooms_number' => 'required|numeric|max:varchar(255)',
            'surface' => 'required|numeric|max:varchar(255)',
            'price' => 'required|numeric|max:varchar(255)',
            'garage' => 'boolean',
            'security' => 'boolean',
            'parking' => 'boolean',
            'balcony' => 'boolean',
            'swimming_pool' => 'boolean',
            'garden' => 'boolean',
            'terrace' => 'boolean',
            'category' => 'required|max:255',
            'condition' => 'required|max:255',
        ];
    }
}
