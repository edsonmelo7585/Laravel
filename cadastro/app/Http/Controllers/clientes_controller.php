<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\models\Cidades;
use App\models\Estados;
use App\models\estados as AppEstados;
use Illuminate\Http\Request;

class clientes_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = Clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cidades = Cidades::all();        
        $estados = Estados::all();
        return view('clientes.create', compact(['cidades', 'estados']));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // 3))
        /*
        $request->validate([
            'nome' => 'required|min:3|unique:clientes|max:20'
        ]);        
        */

        // 4))
        /*
        $request->validate([
            'nome'  => 'required|min:3|unique:clientes|max:20',
            'idade' => 'required|min:18',
            'email' => 'required|email'
        ]);        
        */

        // 5))
        // $regras = [
        //     'nome'  => 'required|min:3|unique:clientes|max:20',
        //     'idade' => 'required|min:18',
        //     'email' => 'required|email'
        // ];
        // $mensagens = [ 
//            'nome.required' => 'O nome é requerido.',
        //     'nome.min' => 'É necessário no mínimo 3 caracteres no nome.',
        //     'required' => 'O atributo :attribute não pode estar em branco.',  // Generico
        //     'email.required' => 'Digite um endereço de email.',
        //     'email.email' => 'Digite um endereço de email válido'
        // ];
        // $request->validate($regras, $mensagens);        

        $cliente = new Clientes();
        $cliente->nome = $request->nomecliente;
        $cliente->idade = $request->idade;
        $cliente->endereco = $request->endereco;
        $cliente->numero_endereco = $request->numero;
        $cliente->comp_endereco = $request->complemento;
        $cliente->bairro = $request->bairro;
        $cliente->cidade_id = $request->cidade;
        $cliente->estado_id = $request->estado;
        $cliente->email = $request->email;
        $cliente->save();
        return redirect()->route('clientes.index');                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente = Clientes::find($id); 
        $cidades = Cidades::all();        
        $estados = Estados::all();
        return view('clientes.edit', compact(['cliente', 'cidades', 'estados']));                                
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $cliente = Clientes::find($id);
        $cliente->nome = $request->nomecliente;
        $cliente->save();
        return redirect()->route('clientes.index');                
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cliente = Clientes::find($id);
        if(isset($cliente)){
            $cliente->delete();
        }
        return redirect()->route('clientes.index');                        
    }
}
