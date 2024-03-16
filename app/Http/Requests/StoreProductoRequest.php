<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'codigo' => 'required|unique:productos,codigo|max:50',
            'nombre' => 'required|unique:productos,nombre|max:80',
            'descripcion' => 'nullable|max:255',
            'fecha_vencimiento' => 'nullable|date',
            'img_path' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'marcar_id' => 'required|integer|exists:marcas,id',
            'presentacione_id' => 'required|integer|exists:presentaciones,id',
            'categorias' => 'required'
        ];
    }

    /*TODO: sustituye los nombres de los atributos de marcar_id y presentacione_id por los nombres marca y presentación */
    public function attributes(){
        return [
            'marca_id' => 'marca',
            'presentacione_id' => 'presentación'
        ];
    }

    /*TODO:  pone una descripción nueva como mensaje de error*/
    public function messages(){
        return [
            'codigo.required' => 'Se necesita un campo código',
            'nombre.required' => 'Se necesita un campo nombre',
        ];
    }
}
