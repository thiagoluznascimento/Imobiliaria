<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CidadeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */ // Determina se o usuario é autorizado a fazer essa solicitação.
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     *
     */ //É onde coloco minhas regras de validações.
    public function rules()
    {
        return [
            'nome' => ['bail','required','min:3','max:100','unique:cidades'],
        ];
    }
}
