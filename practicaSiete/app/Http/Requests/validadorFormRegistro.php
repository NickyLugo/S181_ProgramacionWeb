<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormRegistro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    /* Cambiamos a true */
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            //Escribimos las reglas de validación en el return
            'txtIsbm' => 'required|numeric|min:13',
            'txtTitulo' => 'required',
            'txtAutor' => 'required',
            'txtPaginas' => 'required|numeric',
            'txtEditorial' => 'required',
            'txtEmail' => 'required|email:rfc,dns',
            //
        ];
    }
}

