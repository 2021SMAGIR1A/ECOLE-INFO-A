<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class CreateTestFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'coef' => 'required',
            'courses_id' => 'required',
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
            'title.required' => 'title est un champs obligatoire',
            'coef.required' => 'coef est un champs obligatoire',
            'courses_id.required' => 'courses_id est un champs obligatoire',
            'classes_id.required' => 'classes_id est un champs obligatoire',
        ];
    }
}
