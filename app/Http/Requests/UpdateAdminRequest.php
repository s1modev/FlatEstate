<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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
            
            'name'=> 'required|max:255',
            'username'=> ['required', 'max:255', 'unique:admins,username,'.$this->route('admin')->id],
            'email' => ['required', 'max:255', 'unique:admins,email,'.$this->route('admin')->id],
        ];
    }
}
