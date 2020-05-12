@extends('layout.app', ["current" => "products"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/products" method="POST">
                @csrf
                <div class="form-group">
                <label for="nameProduct">Novo Produto</label>
                    <select class="form-control form-control-sm" name="department" id="department">
                    <option selected>Defina o departamento</option>
                        @foreach ($department as $dept)
                            <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                        @endforeach    
                    </select>
                    <input type="text" class="form-control" name="nameProduct" id="nameProduct"
                    placeholder="Produto">
                    <input type="text" class="form-control" name="stockProduct" id="stockProduct"
                    placeholder="Quantidade em estoque">
                    <input type="text" class="form-control" name="priceProduct" id="priceProduct"
                    placeholder="Preço">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>



@endsection