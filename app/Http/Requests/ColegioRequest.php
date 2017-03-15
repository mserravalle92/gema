<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColegioRequest extends FormRequest
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
            'descripcion' =>'required',
            'text' => 'required',
            'direccion' => 'required'
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
            'descripcion.required' => 'La descripción es requerida',
            'direccion.required'  => 'La dirección es requerida',
            'text.required'  => 'El teléfono es requerido',

        ];
    }
}
