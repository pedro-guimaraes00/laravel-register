@extends('layout.app', ["current" => "departments"])

@section('body')

    <div class="card border">
        <div class="card-body">
        <form action="/departments/{{$department->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nameDepartment">Editar Departamento</label>
                    <input type="text" class="form-control" name="nameDepartment" id="nameDepartment"
                placeholder="Departamento" value="{{$department->name}}">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>



@endsection