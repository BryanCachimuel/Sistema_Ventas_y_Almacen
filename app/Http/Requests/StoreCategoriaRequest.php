<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaRequest extends FormRequest
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
     * 
     * TODO: para que los mensajes de las validaciones se vean en español lo que se hace es dirigirse al directorio
     * lang y agregar el directorio es con los archivos auth,pagination,passwords y validation con extensión .php
     * el contenido de cada archivo se va a encontrar en el siguiente link: 
     * https://github.com/Laraveles/spanish/tree/master/resources/lang/es
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:60|unique:caracteristicas,nombre',
            'descripcion' => 'nullable|max:255'
        ];
    }
}
