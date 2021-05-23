<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'firstname' => 'required|string|max:255',
            'lastname' => 'nullable|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'avatar' => 'image|mimes:jpg,jpeg,png'
        ];
    }
}
