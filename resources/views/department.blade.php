@extends('layout.app', ["current" => "departments"])
@section('body')
    
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Departamentos</h5>
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
                                <a href="/department/edit/{{$dept->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/department/delete/{{$dept->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection