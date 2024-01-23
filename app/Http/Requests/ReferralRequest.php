<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReferralRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'given_name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/[0-9]{4}-[0-9]{3}-[0-9]{3}/',
            'home' => 'required',
            'street' => 'required',
            'suburb' => 'required',
            'state' => 'required',
            'postcode' => 'required',
            'country' => 'required',
        ];
    }
}
