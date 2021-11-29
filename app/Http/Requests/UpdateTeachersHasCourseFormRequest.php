<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTeachersHasCourseFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'teachers_id' => 'required',
            'courses_id' => 'required',
            'rooms_id' => 'required',
            'classes_id' => 'required',
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
            'teachers_id.required' => 'teachers_id est un champs obligatoire',
            'courses_id.required' => 'courses_id est un champs obligatoire',
            'rooms_id.required' => 'rooms_id est un champs obligatoire',
            'classes_id.required' => 'classes_id est un champs obligatoire',
        ];
    }
}
