<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class SaveProjectRequest extends FormRequest
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
        // Obtiene el proyecto que se esta editando
        return [
            'title' => 'required',
            'url' => [
                'required',
                Rule::unique('projects')->ignore($this->route('project')) // Ignora el proyecto que se esta editando
            ],
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
