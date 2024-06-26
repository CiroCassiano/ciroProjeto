<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class XmlController extends Controller
{
    //peguar todos os dados e gerar o XML
    public function gerarXML(){
        
        $dados = Carro::all();
        // Buscar Registros no Banco de Dados
        print_r($dados);

        return response()->view('data-xml', ['registros' => $dados])->header('Content-Type', 'application/xml');

    }
}
