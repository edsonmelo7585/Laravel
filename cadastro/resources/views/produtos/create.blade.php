@extends('layouts.app', ["current_page" => "nova - categoria"])
@section('body')
<div class="col-md-8 order-md-1">
<h4 class="mb-3">Nova categoria</h4>
<form class="needs-validation" novalidate>
    <div class="row">
    <div class="col-md-6 mb-3">
        <label for="primeiroNome">Nome</label>
        <input type="text" class="form-control" id="primeiroNome" placeholder="" value="" required>
        <div class="invalid-feedback">
        É obrigatório inserir um nome válido.
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" placeholder="" value="" required>
        <div class="invalid-feedback">
        É obrigatório inserir um sobre nome válido.
        </div>
    </div>
    </div>

    <div class="mb-3">
    <label for="nickname">Nickname</label>
    <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text">@</span>
        </div>
        <input type="text" class="form-control" id="nickname" placeholder="Nickname" required>
        <div class="invalid-feedback" style="width: 100%;">
        Seu nickname é obrigatório.
        </div>
    </div>
    </div>

    <div class="mb-3">
    <label for="email">Email <span class="text-muted">(Opcional)</span></label>
    <input type="email" class="form-control" id="email" placeholder="fulano@exemplo.com">
    <div class="invalid-feedback">
        Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
    </div>
    </div>

    <div class="mb-3">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" id="endereco" placeholder="Rua dos bobos, nº 0" required>
    <div class="invalid-feedback">
        Por favor, insira seu endereço de entrega.
    </div>
    </div>

    <div class="mb-3">
    <label for="endereco2">Endereço 2 <span class="text-muted">(Opcional)</span></label>
    <input type="text" class="form-control" id="endereco2" placeholder="Apartamento ou casa">
    </div>

    <div class="row">
    <div class="col-md-5 mb-3">
        <label for="pais">País</label>
        <select class="custom-select d-block w-100" id="pais" required>
        <option value="">Escolha...</option>
        <option>Brasil</option>
        </select>
        <div class="invalid-feedback">
        Por favor, escolha um país válido.
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="estado">Estado</label>
        <select class="custom-select d-block w-100" id="estado" required>
        <option value="">Escolha...</option>
        <option>Acre</option>
        </select>
        <div class="invalid-feedback">
        Por favor, insira um estado válido.
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="cep">CEP</label>
        <input type="text" class="form-control" id="cep" placeholder="" required>
        <div class="invalid-feedback">
        É obrigatório inserir um CEP.
        </div>
    </div>
    </div>
</form>
@endsection