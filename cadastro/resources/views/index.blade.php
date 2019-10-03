@extends('layouts.app', ["current_page" => "Inicio"])
@section('body')
<div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
    <div class="card-header">
        <h4 class="my-0 font-weight-normal">Cadastro de produtos</h4>
    </div>
    <div class="card-body">
        {{-- <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mês</small></h1> --}}
        <ul class="list-unstyled mt-3 mb-4">
        <li>Aqui você cadastra seus produtos.</li>
        <li>Só não se esqueça de cadastrar</li>
        <li>previamente as categorias.</li>        
        </ul>
        {{-- <button type="button" class="btn btn-lg btn-block btn-outline-primary">Cadastre-se de graça</button> --}}
        {{-- <button type="button" class="btn btn-lg btn-block btn-primary">produtos</button> --}}
        <a href="{{route('produtos.create')}}" class="btn btn-lg btn-block btn-primary" role="button">produtos</a>
    </div>
    </div>
    <div class="card mb-4 shadow-sm">
    <div class="card-header">
        <h4 class="my-0 font-weight-normal">Cadastro de categorias</h4>
    </div>
    <div class="card-body">
        {{-- <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mês</small></h1> --}}
        <ul class="list-unstyled mt-3 mb-4">
        <li><br></li>
        <li>Cadastre as categorias dos seus produtos</li>
        <li><br></li>
        </ul>
        {{-- <button type="button" class="btn btn-lg btn-block btn-primary">categorias</button> --}}
        <a href="{{route('categorias.create')}}" class="btn btn-lg btn-block btn-primary" role="button">categorias</a>
    </div>
    </div>
</div>
@endsection