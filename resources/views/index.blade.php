@extends('layout.app', ["current" => "index"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <h1 class="cover-heading">Olá, seja bem-vindo.</h1>
        <p class="lead">Este é o <b class="font-italic">Stock Manager</b>. Escolha abaixo qual
            setor deseja <b class="font-weight-bold">cadastrar</b>:</p>
        <p class="lead">
          <a href="/products/new" class="btn btn-lg btn-primary">Produtos</a>
          <a href="/departments/new" class="btn btn-lg btn-primary">Departamentos</a>
        </p>
</div>       

@endsection