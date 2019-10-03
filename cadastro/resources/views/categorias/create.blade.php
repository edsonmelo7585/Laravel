@extends('layouts.app', ["current_page" => "nova - categoria"])
@section('body')
<div class="col-md-8 order-md-1">
<h4 class="mb-3">Nova categoria</h4>
<form class="needs-validation" action="{{route('categorias.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-8 mb-3">
            <label for="nomeCategoria">Nome</label>
            <input type="text" class="form-control" id="nomeCategoria" placeholder="Departamento" value="" name="nomeCategoria" required>
            <div class="invalid-feedback">É obrigatório inserir um nome válido.</div>                            
        </div>                
    </div>        
    <button type="submit" class="btn btn-success btn-sm">Salvar</button>
    <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
</form>
</div>       

@endsection