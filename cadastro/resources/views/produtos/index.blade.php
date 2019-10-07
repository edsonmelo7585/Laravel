@extends('layouts.app', ["current_page" => "produtos"])
@section('body')
<div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
        <h4 class="my-0 font-weight-normal">produtos</h4>
        </div>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Estoque</th>                
                <th>Ações</th>
            </tr>
        <tbody>            
            @foreach ($produtos as $produto)
            <tr>
                <td>{{$produto->id}}</td>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->estoque}}</td>
                <td>                    
                    <form action="{{route('produtos.destroy', $produto->id)}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                        @csrf
                        @method('DELETE')                                                
                        <a href="{{route('produtos.edit', $produto->id)}}" class="btn btn-sm btn-primary" role="button">Editar</a>
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
                <a href="{{route('produtos.create')}}" class="btn btn-sm btn-primary" role="button">Novo produto</a>
            </div>
        </div>
    </div>
</div>
@endsection