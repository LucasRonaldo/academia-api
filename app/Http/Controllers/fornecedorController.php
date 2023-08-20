<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fornecedorController extends Controller
{
    public function fornecedor(FornecedorRequest $request){

        $user = Fornecedor::create([
          
                'nome' => $request->nome,
                'cpf' => $request->cpf,
                'celular' => $request->celular,
                'email' => $request->email,
                'password'=> Hash::make($request->password)
                
        ]);
        return response()->json([
            "success" => true,
            "message" => "Cliente Cadastrado com sucesso",
            "data" => $user
            
        ], 200);
    }
}
