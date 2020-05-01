@extends('layout.app', ["current" => "index"])

@section('body')
<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de produtos</h5>
                    <p class="card-text">Cadastre previamente os departamentos dos produtos.</p>
                    <a href="/products" class="btn btn-primary">Cadastrar</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Departamentos</h5>
                    <p class="card-text">Cadastre os departamentos dos produtos inseridos.</p>
                    <a href="/products" class="btn btn-primary">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection