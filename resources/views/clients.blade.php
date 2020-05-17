@extends('layout.app', ['current' => 'clients'])

@section('body')

    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Clientes</h5>
                <table class="table table-ordered table-hover" id="tableClients">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Endereço</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($clients as $cli)
                        <tr>
                            <td>{{$cli->id}}</td>
                            <td>{{$cli->name}}</td>
                            <td>{{$cli->age}}</td>
                            <td>{{$cli->adress}}</td>
                            <td>{{$cli->email}}</td>
                            <td>
                                <a href="/clients/edit/{{$cli->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/clients/delete/{{$cli->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach    
                    </tbody>
                </table>
        </div>
        <div class="card-footer">
            <a href="/clients/new" class="btn btn-sm btn-primary" role="button">Novo Cliente</a>
        </div>    
    </div>

@endsection