<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function Produto(ProdutoRequest $request){

        $user = Produto::create([
          
                'marca' => $request->marca,
                'qtd' => $request->qtd,
                'valor' => $request->valor,
                'Produtos' => $request->Produtos
                
        ]);
        return response()->json([
            "success" => true,
            "message" => "Produto Cadastrado com sucesso",
            "data" => $user
            
        ], 200);
    }
}
