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
                @csrf
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
                    
                        @foreach($pops as $pop)
                            <tr>
                            <th class="align-middle" scope="row">POP{{$pop->id}}</th>
                            <td class="align-middle">{{ $pop->title }}</td>
                            <td class="align-middle">{{ $pop->getCategory()}}</td>
                            <td class="align-middle">
                                <form action='{{ url("/pop/$pop->id/edit") }}' method="get">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="fa fa-eye text-highlight-1 fs-4 align-middle" aria-hidden="true"></i></button>
                                </form>
                            </td>    
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>

</html>