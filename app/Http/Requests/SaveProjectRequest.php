<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('create-projects');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // Obtiene el proyecto que se esta editando
        return [
            'title' => 'required',
            'url' => [
                'required',
                Rule::unique('projects')->ignore($this->route('project')) // Ignora el proyecto que se esta editando
            ],
            'category_id' => ['required', 'exists:categories, id'], // Existe en la tabla categories
            'image' => [
                $this->route('project') ? 'nullable' : 'required'], //jpeg, png, bpm, gif, svg, webp
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => __('Necesito un titulo'),
            'url.required' => __('Necesito una url'),
            'description.required' => __('Necesito una descripcion')
        ];
    }

}
