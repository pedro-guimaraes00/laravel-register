@extends('layout.app', ["current" => "products"])
@section('body')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>
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
                        <td>R$ {{ $prod->price}}</td>
                        <td>{{ $prod->department_id}}</td>
                        <td>
                            <a href="/products/edit/{{$prod->id}}" class="btn btn-sm btn-primary">
                                <img src="{{ asset('icons/pencil.svg')}}" width="20em" height="20em">
                            </a>
                            <a href="/products/delete/{{$prod->id}}" class="btn btn-sm btn-danger">
                                <img src="{{ asset('icons/trash-fill.svg')}}" width="18em" height="18em">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="/products/new" class="btn btn-sm btn-primary" role="button">
            <img src="{{ asset('icons/plus.svg')}}" width="20em" height="20em"> Novo Produto</a>
    </div>
</div>

@endsection