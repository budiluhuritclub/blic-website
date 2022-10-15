<?php

namespace App\Http\Requests\Elearning\Project;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_project_id' => 'required|exists:category_projects,id',
            'name' => 'required|string|max:255|unique:projects,name',
            'description' => 'required|string|max:10000',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:max_width=1048,max_height=700',
            'url_project' => 'required|string|max:255',
            'is_visible' => 'required|boolean',
        ];
    }
}
