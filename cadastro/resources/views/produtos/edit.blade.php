@extends('layouts.app', ["current_page" => "editar - produto"])
@section('body')
<div class="col-md-8 order-md-1">
<h4 class="mb-3">Nova produto</h4>
<form class="needs-validation" action="{{route('produtos.update', $produto->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-md-8 mb-3">
            <label for="nomeproduto">Nome</label>
            <input type="text" class="form-control" id="nomeproduto" placeholder="Produto" value="{{$produto->nome}}" name="nomeproduto" required>
            <div class="invalid-feedback">É obrigatório inserir um nome válido.</div>                                        
        </div>                
        <div class="col-md-2 mb-3">
            <label for="estoque">Estoque</label>
            <input type="number" value="{{$produto->estoque}}" min="0" max="99999999" step="1" id="estoque" placeholder="0" name="estoque"/>            
        </div>  
        <div class="col-md-5 mb-3">                        
        <label for="preco">Preço</label>        
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">R$</span>
            </div>
            <input type="number" class="form-control" aria-label="Quantia" value="{{$produto->preco}}" data-decimals="2" min="0" max="99999999" step="0.1" id="preco" placeholder="0" name="preco"/>                        
        </div>
        </div>        
        <div class="col-md-5 mb-3">
            <label for="categoria">Categoria</label>
            <select class="custom-select d-block w-100" id="categoria" name="categoria" required>
                <option value="{{$produto->categoria_id}}">Escolha...</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ ( $categoria->id == $produto->categoria_id) ? 'selected' : '' }}> 
                        {{$categoria->nome}} 
                    </option>
                @endforeach                
            </select>
            <div class="invalid-feedback">
                Por favor, insira um categoria válida.
            </div>
        </div>                               
    </div>
    <hr class="mb-4">        
    <button type="submit" class="btn btn-success btn-lg">Salvar</button>
    <button type="cancel" class="btn btn-danger btn-lg">Cancelar</button>    
</form>
</div>      
@endsection