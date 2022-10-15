<?php

namespace App\Http\Requests\Admin\DataCenter\CategoryProject;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryProjectRequest extends FormRequest
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
            'name' => [
                'required', 'string', 'max:255', 'unique:category_projects'
            ]
        ];
    }
}
