<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteFormRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    public function cliente(ClienteFormRequest $request){

        $user = Cliente::create([
          
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

    public function pesquisarPorId($id){
         return Cliente::find($id);
    }
}
