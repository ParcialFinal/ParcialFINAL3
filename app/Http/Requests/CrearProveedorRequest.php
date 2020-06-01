<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearProveedorRequest extends FormRequest
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
            'nombre' => 'required|min:10|max:255|regex:/^[\pL\s\-]+$/u',
            'direccion' => 'required|min:6|max:50',
            'contacto' => 'required|min:3|max:50|email:rfc|unique:App\Proveedor,contacto',
            'telefono' => 'required|min:5|numeric|int',
            'pagina_web' => 'required|min:3|max:50|url',
        ];
    }
}