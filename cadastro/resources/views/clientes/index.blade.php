@extends('layouts.app', ["current_page" => "categorias"])
@section('body')
<div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
        <h4 class="my-0 font-weight-normal">Clientes</h4>
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
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nome}}</td>
                <td>                    
                    {{-- <a href="{{route('clientes.edit', $cliente->id)}}" class="btn btn-sm btn-primary" role="button">Editar</a>
                    <a href="javascript:func()" class="btn btn-sm btn-danger" role="button" onclick="confirmacao('{{$cliente->id}}')">Apagar</a> --}}
                    <form action="{{route('clientes.destroy', $cliente->id)}}" method="POST" onsubmit="confirm('Tem certeza que deseja excluir?')">
                        @csrf
                        @method('DELETE')                                                
                        <a href="{{route('clientes.edit', $cliente->id)}}" class="btn btn-sm btn-primary" role="button">Editar</a>
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
                <a href="{{route('clientes.create')}}" class="btn btn-sm btn-primary" role="button">Novo cliente</a>
            </div>
        </div>
    </div>
</div>
@endsection