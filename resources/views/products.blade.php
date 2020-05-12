@extends('layout.app', ["current" => "products"])
@section('body')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>
        @if(count($product) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Departamento</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $prod)
                    <tr>
                        <td>{{ $prod->id }}</td>
                        <td>{{ $prod->name }}</td>
                        <td>{{ $prod->stock}}</td>
                        <td>{{ $prod->price}}</td>
                        <td>{{ $prod->department_id}}</td>
                        <td>
                            <a href="/products/edit/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/products/delete/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    <div class="card-footer">
        <a href="/products/new" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
    </div>
</div>

@endsection