<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'matricule' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'classes_id' => 'required',
            'users_id' => 'required',
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
            'matricule.required' => 'matricule est un champs obligatoire',
            'firstname.required' => 'firstname est un champs obligatoire',
            'lastname.required' => 'lastname est un champs obligatoire',
            'email.required' => 'email est un champs obligatoire',
            'classes_id.required' => 'classes_id est un champs obligatoire',
            'users_id.required' => 'users_id est un champs obligatoire',
        ];
    }
}
