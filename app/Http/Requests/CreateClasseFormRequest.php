<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class CreateClasseFormRequest extends FormRequest
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
            'fields_id' => 'required',
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
            'fields_id.required' => 'fields_id est un champs obligatoire',
        ];
    }
}
