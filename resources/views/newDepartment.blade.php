@extends('layout.app', ["current" => "departments"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/departments" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nameDepartment">Novo Departamento</label>
                    <input type="text" class="form-control" name="nameDepartment" id="nameDepartment"
                        placeholder="Departamento">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
        @if ($errors->any())
            <div class="card-footer">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>    
                @endforeach
            </div>
        @endif
    </div>

@endsection