@extends('layouts.app', ["current_page" => "categorias"])
@section('body')
<div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
            <h4 class="my-0 font-weight-normal">categorias</h4>
            </div>
            <table>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            <tbody>            
                @foreach ($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->nome}}</td>
                    <td>                    
                        <form action="{{route('categorias.destroy', $categoria->id)}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                            @csrf
                            @method('DELETE')                                                
                            <a href="{{route('categorias.edit', $categoria->id)}}" class="btn btn-sm btn-primary" role="button">Editar</a>
                            <button type="submit" class="btn btn-sm btn-danger">Apagar</button>
                        </form>                    
                    </td>
                </tr>
                @endforeach
            </tbody>
            </div>
            </table>                    
            <div class="card-footer">
                <hr class="mb-4">            
                <div class=text-left>            
                    <a href="{{route('categorias.create')}}" class="btn btn-sm btn-primary" role="button">Novo categoria</a>
                </div>
            </div>
        </div>
    </div>
@endsection