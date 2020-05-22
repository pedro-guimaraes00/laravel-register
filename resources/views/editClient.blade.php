@extends('layout.app', ["current" => "clients"])

@section('body')

    <div class="card border">
        <div class="card-body">
        <form action="/clients/{{$client->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nameClient">Editar Cliente</label>
                    <input type="text" class="form-control" name="nameClient" id="nameClient"
                    placeholder="Nome" value="{{$client->name}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="ageClient" id="ageClient"
                    placeholder="Idade" value="{{$client->age}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="adressClient" id="adressClient"
                    placeholder="Endereço" value="{{$client->adress}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="emailClient" id="emailClient"
                    placeholder="E-mail" value="{{$client->email}}">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>

@endsection