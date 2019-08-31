<?php

namespace App\Http\Controllers\Cadastro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cliente = Cliente::get();
        return view('cadastro.listagemCliente',['cliente'=>$cliente]);
    }

    public function create()
    {

        return view('cadastro.Cliente');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['id_user_cadastro'] = auth()->user()->id;
        $input['id_ativo'] = 1;
        $input['nm_sondex']=soundex($input["nm_pessoa"]);
    	$input['nm_metaphone'] = metaphone($input["nm_pessoa"]);
        
        $insert = Cliente::create($input);
        
        return view('cadastro.listagemCliente')->with('message', 'Product created successfully!');
    }
}
