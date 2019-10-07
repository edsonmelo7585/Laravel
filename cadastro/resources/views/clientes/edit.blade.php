@extends('layouts.app', ["current_page" => "editar - cliente"])
@section('body')
<div class="col-md-8 order-md-1">
<h4 class="mb-3">Nova cliente</h4>
<form class="needs-validation" action="{{route('clientes.update', $cliente->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-md-9 mb-3">
            <label for="nomecliente">Nome</label>
            <input type="text" class="form-control" id="nomecliente" placeholder="Departamento" value="{{$cliente->nome}}" name="nomecliente" required>
            <div class="invalid-feedback">É obrigatório inserir um nome válido.</div>                            
        </div> 
        <div class="col-md-1 mb-3">        
            <label for="idade">Idade</label>
            <input type="number" value="0" min="0" max="120" step="1" id="idade" placeholder="0" name="idade"/>            
        </div>
    </div>   
    <div class="row">
        <div class="col-md-5 mb-3">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" placeholder="Endereço" value="{{$cliente->endereco}}" name="endereco">            
        </div>
        <div class="col-md-1 mb-3">
            <label for="numero">Número</label>
            <input type="number" value="0" min="0" max="9999999" step="1" id="numero" placeholder="0" name="numero"/>            
        </div>
        <div class="col-md-3 mb-3">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" placeholder="Complemento" value="{{$cliente->comp_endereco}}" name="complemento">            
        </div>                                                                 
        <div class="col-md-3 mb-3">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" placeholder="Bairro" value="{{$cliente->bairro}}" name="bairro">            
        </div>                                                                             
    </div>             
    <div class="row">
        <div class="col-md-5 mb-3">
            <label for="estado">Estado</label>
            <select class="custom-select d-block w-100" id="estado" name="estado" required>
                <option value="">Escolha...</option>
                @foreach ($estados as $estado)
                    <option value="{{ $estado->id }}" {{ ( $estado->id == $cliente->estado_id) ? 'selected' : '' }}> 
                        {{$estado->nome}} 
                    </option>
                @endforeach                
            </select>
            <div class="invalid-feedback">
                Por favor, insira um estado válida.
            </div>
        </div>            
        <div class="col-md-5 mb-3">
            <label for="cidade">Cidade</label>
            <select class="custom-select d-block w-100" id="cidade" name="cidade" required>
                <option value="">Escolha...</option>
                @foreach ($cidades as $cidade)
                    <option value="{{ $cidade->id }}" {{ ( $cidade->id == $cliente->cidade_id) ? 'selected' : '' }}> 
                        {{$cidade->nome}} 
                    </option>
                @endforeach               
            </select>
            <div class="invalid-feedback">
                Por favor, insira um cidade válida.
            </div>
        </div>                                                          
    </div>                             
    <div class="row">
        <div class="col-md-9 mb-3">
            <label for="email">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" id="email" name="email" value="{{$cliente->email}}" placeholder="examplo@examplo.com">
            <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
            </div>
        </div>
    </div>           
    <hr class="mb-4">                            
    <button type="submit" class="btn btn-success btn-lg">Salvar</button>
    <button type="cancel" class="btn btn-danger btn-lg">Cancelar</button>
</form>
</div>      
@endsection