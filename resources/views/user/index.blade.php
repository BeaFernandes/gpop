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
                        <th class="align-middle" scope="col">Permissão de escrita</th>
                        <th class="align-middle" scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                            <th class="align-middle" scope="row">{{$user->name}}</th>
                            <td class="align-middle">{{ $user->admin ? 'Sim' : 'Não'}}</td>
                            <td class="align-middle">{{ $user->active ? 'Sim' : 'Não' }}</td>
                            <td class="align-middle">{{ $user->writePermission ? 'Sim' : 'Não' }}</td>
                            <td class="align-middle">
                                <form action='{{ url("/user/$user->id/edit") }}' method="get">
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