@extends('layout.app', ["current" => "departments"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form class="needs-validation" action="/departments" method="POST" novalidate>
                @csrf
                <div class="form-group">
                    <label for="nameDepartment">Novo Departamento</label>
                    <input type="text" class="form-control" name="nameDepartment" id="nameDepartment"
                        placeholder="Departamento" required>
                    <div class="invalid-feedback">
                        O campo é obrigatório
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