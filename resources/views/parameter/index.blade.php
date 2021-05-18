@include('util/head')

<body>
    @include('util/navbar')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-sm-12 col-lg-8">
                <form action="{{ url('/parameter') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome da empresa</label>
                        <input type="text" class="form-control text-text-bg-3" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="mask" class="form-label">Máscara de código padrão para títulos</label>
                        <input type="text" class="form-control" id="mask" name="mask"></input>
                    </div>
                        <label for="img" class="form-label">Logo da empresa</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="img">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-highlight-2 text-text-bg-2 fw-bold">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>

</html>