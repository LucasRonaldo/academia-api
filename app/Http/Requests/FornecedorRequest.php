<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class FornecedorRequest extends FormRequest
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
            'cnpj' => 'required|max:11|min:11|unique:fornecedors,cnpj',
            'produtos'  => 'required|max:15|min:10'
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
'cnpj.required' => 'cnpj obrigatorio',
'cnpj.max' => 'cnpj deve conter no máximo 11 caracteres',
'cnpj.min' => 'cnpj deve conter no minimo 11 caracteres',
'cnpj.unique' => 'cnpj já cadastrado no cinema',
'produtos.required' => 'produtos obrigatorio',
'produtos.max' => 'produtos deve conter no máximo 15 caracteres',
'produtos.min' => 'produtos deve conter no minimo 10 caracteres',

        ];
    }
}
