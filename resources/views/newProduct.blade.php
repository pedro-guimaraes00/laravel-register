@extends('layout.app', ["current" => "products"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form class="needs-validation" action="/products" method="POST" novalidate>
                @csrf
                    <div class="form-group">
                    <label for="nameProduct">Novo Produto</label>
                        <select class="custom-select custom-select-sm" name="department" id="department" required>
                            <option selected>Defina o departamento</option>
                                @foreach ($department as $dept)
                                    <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                @endforeach    
                        </select>
                        <div class="invalid-feedback">O campo é obrigatório.</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nameProduct" id="nameProduct"
                        placeholder="Produto" required>
                            <div class="invalid-feedback">
                                O campo é obrigatório.
                            </div>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="stockProduct" id="stockProduct"
                        placeholder="Quantidade em estoque" required>
                            <div class="invalid-feedback">
                                O campo é obrigatório.
                            </div>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="priceProduct" id="priceProduct"
                        placeholder="Preço" required>
                            <div class="invalid-feedback">
                                O campo é obrigatório.
                            </div>
                    </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>


@endsection