@include('util/head')

<body>
    @include('util/navbar')
    <div class="container">
        <div class="row text-end mb-3">
            <form action="" class="col col-sm-6 col-lg-4">
                <input type="search" class="form-control text-text-bg-3" name="search" id="search" aria-label="Search" placeholder="Pesquisar...">
            </form>
            <form action="{{ url('/category/create') }}" method="get" class="col">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-highlight-1 text-text-bg-2 fw-bold">Nova</button>
            </form>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th class="align-middle" scope="col">Nome</th>
                        <th class="align-middle" scope="col">Descrição</th>
                        <th class="align-middle" scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th class="align-middle" scope="row">Impressora</th>
                        <td class="align-middle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, quis magni. Omnis nobis eligendi voluptatibus aliquam, asperiores doloribus repellat exercitationem mollitia quia, impedit laboriosam ratione, a ullam quo voluptate dolore?</td>
                        <td class="align-middle">
                            <form action="{{ url('/category/1/edit') }}" method="get">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="dropdown-item"><i class="fa fa-eye text-highlight-1 fs-4 align-middle" aria-hidden="true"></i></button>
                            </form>
                        </td> 
                        </tr>
                        <tr>
                        <th class="align-middle" scope="row">Internet</th>
                        <td class="align-middle"></td>
                        <td class="align-middle">
                            <form action="{{ url('/category/1/edit') }}" method="get">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="dropdown-item"><i class="fa fa-eye text-highlight-1 fs-4 align-middle" aria-hidden="true"></i></button>
                            </form>
                        </td> 
                        </tr>
                        <tr>
                        <th class="align-middle" scope="row">Acesso remoto</th>
                        <td class="align-middle"></td>
                        <td class="align-middle">
                            <form action="{{ url('/category/1/edit') }}" method="get">
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