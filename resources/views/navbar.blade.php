<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <ul class="navbar-nav mr-auto">
    <li @if($current=="index") class="nav-item active" @else class="nav-item" @endif>
      <a class="nav-link" href="/index">
        <img src="{{ asset('icons/house-fill.svg')}}" width="24em" height="24em">
      </a>
    </li>
    <li @if($current=="clients") class="nav-item active" @else class="nav-item" @endif>
      <a class="nav-link" href="/clients">Clientes</a>
    </li>
    <li @if($current=="products") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/products">Produtos</a>
      </li>
    <li @if($current=="departments") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/departments">Departamentos</a>
    </li>
  </ul>


  <!-- Right Side Of Navbar -->
  <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
        @guest
          <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
        @endguest
  </ul>
</nav>