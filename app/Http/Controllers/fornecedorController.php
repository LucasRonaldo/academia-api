<?php

namespace App\Http\Controllers;

use App\Http\Requests\FornecedorRequest;
use App\Models\Fornecedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class fornecedorController extends Controller
{
    public function fornecedor(FornecedorRequest $request){

        $user = Fornecedor::create([
          
                'marca' => $request->marca,
                'cnpj' => $request->cnpj,
                'produtos' => $request->produtos
                
        ]);
        return response()->json([
            "success" => true,
            "message" => "Fornecedor Cadastrado com sucesso",
            "data" => $user
            
        ], 200);
    }
}
