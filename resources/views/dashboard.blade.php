@include('util.head')

<body>
    @include('util.navbar')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">POP001</th>
                        <td>Lorem Ipsum</td>
                        <td>Lorem Ipsum</td>
                        </tr>
                        <tr>
                        <th scope="row">POP002</th>
                        <td>Lorem Ipsum</td>
                        <td>Lorem Ipsum</td>
                        </tr>
                        <tr>
                        <th scope="row">POP003</th>
                        <td>Lorem Ipsum</td>
                        <td>Lorem Ipsum</td>
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