@extends('layout.app', ["current" => "departments"])
@section('body')
    
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Departamentos</h5>
            @if(count($department) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($department as $dept)
                        <tr>
                            <td>{{ $dept->id }}</td>
                            <td>{{ $dept->name }}</td>
                            <td>
                                <a href="/departments/edit/{{$dept->id}}" class="btn btn-sm btn-primary">
                                    <img src="{{ asset('icons/pencil.svg')}}" width="20em" height="20em">
                                </a>
                                <a href="/departments/delete/{{$dept->id}}" class="btn btn-sm btn-danger">
                                    <img src="{{ asset('icons/trash-fill.svg')}}" width="18em" height="18em">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="/departments/new" class="btn btn-sm btn-primary" role="button">
                <img src="{{ asset('icons/plus.svg')}}" width="20em" height="20em"> Novo Departamento</a>
        </div>
    </div>

@endsection