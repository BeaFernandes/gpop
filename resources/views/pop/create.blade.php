@include('util/head')

<body>
    @include('util/navbar')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-sm-12 col-lg-8">
                <form action="{{ url('pop') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Título*</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <label for="category" class="form-label">Categoria*</label>
                    <select id="category" class="form-select mb-3" name="category" required>
                        <option selected>----</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{$category->title}}</option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição*</label>
                        <textarea class="form-control" id="description" rows="3" name="description" required></textarea>
                    </div>
                        <label for="img" class="form-label">Upload de imagens</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="img">
                    </div>
                    <div class="mb-3">
                        <label for="key-word" class="form-label">Palavras chaves</label>
                        <input type="text" class="form-control text-text-bg-3" id="key-word" name="key-word">
                    </div>
                    <div class="mb-3 text-end">
                        <spam class="text-text-bg-3 fs-6">Campos com * são obrigatórios</spam>
                    </div>
                    <div class="text-end">
                        <a href="{{ asset('/') }}" type="button" class="btn btn-highlight-4 text-text-bg-2 fw-bold" value="Lorem">Cancelar</a>
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