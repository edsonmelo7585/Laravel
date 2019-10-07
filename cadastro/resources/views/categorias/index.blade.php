@extends('layouts.app', ["current_page" => "categorias"])
@section('body')
<div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
        <h4 class="my-0 font-weight-normal">Categorias</h4>
        </div>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        {{-- <div class="card-body"> --}}
        {{-- <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mês</small></h1> --}}
        <tbody>            
            @foreach ($categorias as $categoria)
            <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nome}}</td>
                <td>                    
                    {{-- <a href="{{route('categorias.edit', $categoria->id)}}" class="btn btn-sm btn-primary" role="button">Editar</a>
                    <a href="javascript:func()" class="btn btn-sm btn-danger" role="button" onclick="confirmacao('{{$categoria->id}}')">Apagar</a> --}}
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
            <a href="{{route('categorias.create')}}" class="btn btn-sm btn-primary" role="button">Nova Categoria</a>
        </div>
    </div>
</div>
@endsection