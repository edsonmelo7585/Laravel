<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

class ControladorCategoria extends Controller
{
    public function indexView()
    {
        // $cats = Categoria::all();
        // return $cats->toJson();
        return view('categorias');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        // return view('categorias', compact('cats'));
        return $categorias->toJson();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('novacategoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nome = $request->input('nome');
        $categoria->save();
        return json_encode($categoria);
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
        $categoria = Categoria::find($id);
        if (isset($categoria)) {
            return json_encode($categoria);
        }
        return response('categria não encontrada', 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $cat = Categoria::find($id);
        // if(isset($cat)) {
        //     return view('editarcategoria', compact('cat'));
        // }
        // return redirect('/categorias');
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
        $categoria = Categoria::find($id);
        if(isset($categoria)) {
            $categoria->nome = $request->input('nome');
            $categoria->save();
            return json_encode($categoria);
        }
        // return redirect('/categorias');
        return response('Categoria não encontrada', 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        if (isset($categoria)) {
            $categoria->delete();
            return response('OK', 200);
        }
        return response('Categoria não encontrada', 404);
    }
}































