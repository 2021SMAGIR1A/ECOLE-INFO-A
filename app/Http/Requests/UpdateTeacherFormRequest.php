<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherFormRequest extends FormRequest
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
            'nom' => 'required',
            'prenoms' => 'required',
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
            'nom.required' => 'nom est un champs obligatoire',
            'prenoms.required' => 'prenoms est un champs obligatoire',
            'users_id.required' => 'users_id est un champs obligatoire',
        ];
    }
}
