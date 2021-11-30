<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'card_holder'=>'required|max:255',
            'billing_country'=>'required|max:255',
            'billing_city'=>'required|max:255',
            'billing_address'=>'required|max:255',
        ];
    }
}
