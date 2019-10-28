<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FieldRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            
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
            'descri.required'  => 'La Descripción no puede estar en Blanco',
            'codcli.required'  => 'Debe seleccionar un Cliente',
            'idtipcont.required'  => 'Debe seleccionar un Tipo de Contrato',
        ];
    }
}
