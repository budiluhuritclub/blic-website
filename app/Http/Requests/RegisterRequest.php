<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|min:5',
            'email' => 'required|unique:registration_members,email',
            'nim' => 'required|unique:registration_members,nim',
            'phone_number' => 'required|min_digits:11|numeric',
            'faculty' => 'required|min:5',
            'major' => 'required|min:5',
            'interest' => 'required|min:5',
            'field_interest' => 'required|min:5',
            'reason' => 'required|min:10'
        ];
    }
}