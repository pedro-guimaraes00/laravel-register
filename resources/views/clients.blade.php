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
                            <th>Ação</th>
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
                                <a href="/clients/edit/{{$cli->id}}" class="btn btn-sm btn-primary">
                                    <img src="{{ asset('icons/pencil.svg')}}" width="20em" height="20em">
                                </a>
                                <a href="/clients/delete/{{$cli->id}}" class="btn btn-sm btn-danger">
                                    <img src="{{ asset('icons/trash-fill.svg')}}" width="18em" height="18em">
                                </a>
                            </td>
                        </tr>
                    @endforeach    
                    </tbody>
                </table>
        </div>
        <div class="card-footer">
            <a href="/clients/new" class="btn btn-sm btn-primary" role="button">
                <img src="{{ asset('icons/plus.svg')}}" width="20em" height="20em"> Novo Cliente</a>
        </div>    
    </div>

@endsection