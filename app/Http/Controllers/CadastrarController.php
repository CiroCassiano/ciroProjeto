<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CadastrarController extends Controller
{
    // Regra de negocio: validar e persistir dados.
    public function salvar(request $request  ){
        $request->validate([
            "IdCarro" => "required|mmin:3|max:30",
            "Marca" => "required|mmin:3|max:50",
            "Modelo" => "required|mmin:3|max:50",
            "Ano" => "required|date"
        ],
        [
            "IdCarro.required" => "O campo obrigatório",
            "Nome.max" => "O IdCarro deve ter no máximo 30 caracteres",
            "Marca.required" => "A Marca é obrigatório",
            "Modelo.required" => "O Modelo é obrigatório",
            "Ano.required" => "O campo Ano deve ser uma Data",
          
        ]
        );

        $carro = new Carro();
        $carro->fill($request->all());
        $carro->save();

        //ad 

        return view ('cadastro salvo');

    }
}
