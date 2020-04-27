@extends('layout.app')

@section('body')
<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de produtos</h5>
                    <p class="card-text">Cadastre todos os seus produtos registrando
                        previamente os departamentos.</p>
                    <a href="/products" class="btn btn-primary">Cadastrar</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Departamentos</h5>
                    <p class="card-text">Cadastre os departamentos dos seus produtos.</p>
                    <a href="/products" class="btn btn-primary">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection