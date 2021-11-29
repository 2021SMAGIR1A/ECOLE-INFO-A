<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class CreateMarkFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'mark' => 'required',
            'tests_id' => 'required',
            'students_id' => 'required',
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
            'mark.required' => 'mark est un champs obligatoire',
            'tests_id.required' => 'tests_id est un champs obligatoire',
            'students_id.required' => 'students_id est un champs obligatoire',
        ];
    }
}
