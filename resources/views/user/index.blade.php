@include('util/head')

<body>
    @include('util/navbar')
    <div class="container">
        <div class="row text-end mb-3">
            <form action="" class="col col-sm-6 col-lg-4">
                <input type="search" class="form-control text-text-bg-3" name="search" id="search" aria-label="Search" placeholder="Pesquisar...">
            </form>
            <form action="{{ url('/user/create') }}" method="get" class="col">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-highlight-1 text-text-bg-2 fw-bold">Novo</button>
            </form>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th class="align-middle" scope="col">Nome</th>
                        <th class="align-middle" scope="col">Admin</th>
                        <th class="align-middle" scope="col">Ativo</th>
                        <th class="align-middle" scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th class="align-middle" scope="row">Fulano</th>
                        <td class="align-middle">Sim</td>
                        <td class="align-middle">Sim</td>
                        <td class="align-middle">
                            <form action="{{ url('/user/1/edit') }}" method="get">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="dropdown-item"><i class="fa fa-eye text-highlight-1 fs-4 align-middle" aria-hidden="true"></i></button>
                            </form>
                        </td> 
                        </tr>
                        <tr>
                        <th class="align-middle" scope="row">Sicrano</th>
                        <td class="align-middle">Não</td>
                        <td class="align-middle">Sim</td>
                        <td class="align-middle">
                            <form action="{{ url('/user/1/edit') }}" method="get">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="dropdown-item"><i class="fa fa-eye text-highlight-1 fs-4 align-middle" aria-hidden="true"></i></button>
                            </form>
                        </td> 
                        </tr>
                        <tr>
                        <th class="align-middle" scope="row">Beltrano</th>
                        <td class="align-middle">Não</td>
                        <td class="align-middle">Não</td>
                        <td class="align-middle">
                            <form action="{{ url('/user/1/edit') }}" method="get">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="dropdown-item"><i class="fa fa-eye text-highlight-1 fs-4 align-middle" aria-hidden="true"></i></button>
                            </form>
                        </td> 
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>

</html>