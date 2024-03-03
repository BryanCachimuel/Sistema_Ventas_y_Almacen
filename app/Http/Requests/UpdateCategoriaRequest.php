<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoriaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /*TODO: para realizar la validación siempre se debe cambiar el return que esta en false a true */
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     * 
     */
    public function rules()
    {   
        $categoria = $this->route('categoria');
        $caracteristicaId = $categoria->caracteristica->id;
        return [
            'nombre' => 'required|max:60|unique:caracteristicas,nombre,'.$caracteristicaId,
            'descripcion' => 'nullable|max:255'
        ];
    }
}
