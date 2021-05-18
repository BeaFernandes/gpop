@include('util/head')

<body>
    @include('util/navbar')
    <div class="container">
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
                        <td class="align-middle"><a href="{{ url('/pop/1/edit') }}"><i class="fa fa-eye text-highlight-1 fs-4 align-middle" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                        <th class="align-middle" scope="row">POP002</th>
                        <td class="align-middle">Lorem Ipsum</td>
                        <td class="align-middle">Lorem Ipsum</td>
                        <td class="align-middle"><a href="{{ url('/pop/2/edit') }}"><i class="fa fa-eye text-highlight-1 fs-4 align-middle" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                        <th class="align-middle" scope="row">POP003</th>
                        <td class="align-middle">Lorem Ipsum</td>
                        <td class="align-middle">Lorem Ipsum</td>
                        <td class="align-middle"><a href="{{ url('/pop/3/edit') }}"><i class="fa fa-eye text-highlight-1 fs-4 align-middle" aria-hidden="true"></i></a></td>
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