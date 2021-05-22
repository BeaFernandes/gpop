@include('util/head')

<body>
    @include('util/navbar')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-sm-12 col-lg-8">
                <form action='{{ url("/category/$category->id") }}' method="post">
                    <input type="hidden" name="_method" value="patch">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome*</label>
                        <input type="text" class="form-control text-text-bg-3" id="name" name="name" value="{{ $category->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea class="form-control text-text-bg-3" id="description" name="description" rows="3">{{ $category->description }}</textarea>
                    </div>
                    <div class="mb-3 text-end">
                        <spam class="text-text-bg-3 fs-6">Campos com * são obrigatórios</spam>
                    </div>
                    <div>
                        <div class="text-end"><button type="button" class="btn btn-highlight-4 text-text-bg-2 fw-bold" value="Lorem">Excluir</button>
                            <button type="submit" class="btn btn-highlight-2 text-text-bg-2 fw-bold" value="Lorem">Salvar</button>
                        </div>
                    </div>
                </form>
                </div>
        </div>
    </div>
    

    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>

</html>