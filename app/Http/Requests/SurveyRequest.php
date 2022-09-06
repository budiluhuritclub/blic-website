<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SurveyRequest extends FormRequest
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
            'learning_type' => 'required|min:5',
            'knowledge' => 'required|integer|min:1|max:100',
            'most_interest_field' => 'required|min:5',
            'hope' => 'required|min:5'
        ];
    }
}