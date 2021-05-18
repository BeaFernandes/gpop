@include('util/head')

<body>
    @include('util/navbar')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-sm-12 col-lg-8">
                <form action="{{ url('/category') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome*</label>
                        <input type="text" class="form-control text-text-bg-3" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>
                    <div class="mb-3 text-end">
                        <spam class="text-text-bg-3 fs-6">Campos com * são obrigatórios</spam>
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