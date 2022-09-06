<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nim' => 'required|digits:10',
            'name' => 'required|min:5',
            'email' => 'unique:users,email',
            'no_telp' => 'numeric|min_digits:11',
            'fakultas' => 'min 5',
            'level' => 'required|min:5',
            'type' => 'required|min:5',
            'program_studi' => 'min:5',
        ];
    }
}