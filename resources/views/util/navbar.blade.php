<nav class="navbar navbar-light bg-text-bg-4 mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('img/logo.png') }}" alt="Logo GPOP" width="40">
    </a>
    @if($title != 'Login')
      <nav class="nav">
        @if(true) <!-- TODO - verificar se é admin-->
          <a class="nav-link text-link" aria-current="page" href="{{ url('/') }}">POP's</a>
          <a class="nav-link text-link" href="{{ url('/user') }}">Usuários</a>
          <a class="nav-link text-link" href="{{ url('/category') }}">Categorias</a>
          <a class="nav-link text-link" href="{{ url('/parameter') }}">Parâmetros do sistema</a>
        @endif
      </nav>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle text-highlight-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-user text-highlight-2 fs-4" aria-hidden="true"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item disabled" href="#">Fulano</a></li>
          <li><a class="dropdown-item" href="#">Alterar senha</a></li>
          <li>
            <form action="{{ url('/login') }}" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="dropdown-item">Sair</button>
            </form>
          </li>
        </ul>
      </div>
    @endif
  </div>
</nav>
