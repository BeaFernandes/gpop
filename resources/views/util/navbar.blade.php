<nav class="navbar navbar-light bg-text-bg-4 mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('img/logo.png') }}" alt="Logo GPOP" width="40">
    </a>
    <nav class="nav">
      <a class="nav-link text-active" aria-current="page" href="{{ url('/') }}">POP's</a>
      <a class="nav-link text-link" href="{{ url('/pop.create') }}">Criar POP</a>
    </nav>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle text-text-bg-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-user text-text-bg-3 fs-4" aria-hidden="true"></i>
      </button>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</nav>
