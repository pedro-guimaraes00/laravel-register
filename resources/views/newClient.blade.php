@extends('layout.app', ['current' => 'clients'])

@section('body')

    <div class="row">
        <div class="container">
            <div class="card-border">
                <div class="card-body">
                    <form action="/clients" method="POST">
                        <div class="form-group">
                            <label for="name">Nome do cliente</label>
                            <input type="text" id="name" class="form-control" name="nameClient" placeholder="Nome completo">
                        </div>
                        <div class="form-group">
                            <label for="name">Idade</label>
                            <input type="text" id="age" class="form-control" name="ageClient" placeholder="Idade">
                        </div>
                        <div class="form-group">
                            <label for="name">Endereço</label>
                            <input type="text" id="adress" class="form-control" name="adressClient" placeholder="Bairro e rua">
                        </div>
                        <div class="form-group">
                            <label for="name">E-mail</label>
                            <input type="text" id="email" class="form-control" name="emailClient" placeholder="E-mail atualizado">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection