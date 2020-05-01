<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button"
    data-toggle="collapse" data-target="navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mr-auto">
        <li @if($current=="index") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/">Home</a>
        </li>
        <li @if($current=="products") class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/products">Produtos</a>
          </li>
        <li @if($current=="departments") class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/departments">Departamentos</a>
        </li>
    </div>
  </nav>