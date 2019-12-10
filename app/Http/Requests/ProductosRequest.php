<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosRequest extends FormRequest
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
            'referencia' => 'required|unique:productos',
            'nombre' => 'required',
            'observaciones' => 'required',
            'precio' => 'required',
            'inpuesto' => 'required',
            'cantidad' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'referencia.required' => 'La referencia es obligatoria',
            'referencia.unique' => 'La referencia ya esta registrada, pruebe otra',

            'nombre.required' => 'El nombre es Obligatorio',

            'observaciones.required' => 'El campo Observaciones es Obligatorio',

            'precio.required' => 'El campo precio es obligatorio',

            'inpuesto.required' => 'El campo inpuesto es obligatorio',

            'cantidad.required' => 'El campo cantidad es obligatorio',

            'imagen.required' => 'La imagen es obligatoria',
            'imagen.mimes' => 'El formato de la imagen no es valido',
        ];
    }
}
