@include('util/head')

<body>
    @include('util/navbar')
    <div class="container">
        <div class="row text-end mb-3">
            <form action="" class="col">
                <input type="search" class="form-control text-text-bg-3" name="search" id="search" aria-label="Search" placeholder="Pesquisar...">
            </form>
            <form action="" class="col">
                <select id="category" class="form-select text-text-bg-3" name="category" required>
                    <option selected disabled>Categoria</option>
                    <option value="1">exemplo</option>
                    <option value="2">exemplo</option>
                    <option value="3">exemplo</option>
                </select>
            </form>
            <form action="{{ url('/pop/create') }}" method="get" class="col">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-highlight-1 text-text-bg-2 fw-bold">Novo</button>
            </form>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th class="align-middle" scope="col">ID</th>
                        <th class="align-middle" scope="col">Título</th>
                        <th class="align-middle" scope="col">Categoria</th>
                        <th class="align-middle" scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th class="align-middle" scope="row">POP001</th>
                        <td class="align-middle">Lorem Ipsum</td>
                        <td class="align-middle">Lorem Ipsum</td>
                        <td class="align-middle">
                            <form action="{{ url('/pop/1/edit') }}" method="get">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="dropdown-item"><i class="fa fa-eye text-highlight-1 fs-4 align-middle" aria-hidden="true"></i></button>
                            </form>
                        </td>    
                        </tr>
                        <tr>
                        <th class="align-middle" scope="row">POP002</th>
                        <td class="align-middle">Lorem Ipsum</td>
                        <td class="align-middle">Lorem Ipsum</td>
                        <td class="align-middle">
                            <form action="{{ url('/pop/2/edit') }}" method="get">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="dropdown-item"><i class="fa fa-eye text-highlight-1 fs-4 align-middle" aria-hidden="true"></i></button>
                            </form>
                        </td> 
                        </tr>
                        <tr>
                        <th class="align-middle" scope="row">POP003</th>
                        <td class="align-middle">Lorem Ipsum</td>
                        <td class="align-middle">Lorem Ipsum</td>
                        <td class="align-middle">
                            <form action="{{ url('/pop/3/edit') }}" method="get">
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