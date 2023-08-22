<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'marca' => 'required|max:80|min:3',
            'qtd' => 'required|max:1000|min:1|',
            'valor' => 'required|max:4|min:1|',
            'Produtos'  => 'required|max:15|min:10'
        ];
        
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }
    public function messages(){
        return[
'name.required' => 'O campo marca é obrigatorio',
'marca.max' => 'o campo marca deve conter no maximo 80 caracteres',
'marca.min' => 'o campo marca deve conter no minimo 5 caracteres',
'valor.required' => 'valor obrigatorio',
'valor.max' => 'valor deve conter no máximo R$2.500',
'valor.min' => 'valor deve conter no minimo R$1,00',
'valor.unique' => 'valor já cadastrado no sistema',
'qtd.required' => 'quantidade obrigatorio',
'qtd.max' => 'valor deve conter no máximo 1000 unidades',
'qtd.min' => 'valor deve conter no minimo 1 unidade',
'qtd.unique' => 'quantidade já cadastrado no sistema',
'Produtos.required' => 'produtos obrigatorio',
'Produtos.max' => 'produtos deve conter no máximo 15 caracteres',
'Produtos.min' => 'produtos deve conter no minimo 10 caracteres',

        ];
    }
}
