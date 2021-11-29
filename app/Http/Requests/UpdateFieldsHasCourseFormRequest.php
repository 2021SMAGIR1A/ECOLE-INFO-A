<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateFieldsHasCourseFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fields_id' => 'required',
            'courses_id' => 'required',
        ];
    }
    
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'fields_id.required' => 'fields_id est un champs obligatoire',
            'courses_id.required' => 'courses_id est un champs obligatoire',
        ];
    }
}
