@include('util/head')

<body>
    @include('util/navbar')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-sm-12 col-lg-8">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome*</label>
                        <input type="text" class="form-control text-text-bg-3" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail*</label>
                        <input type="text" class="form-control text-text-bg-3" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha*</label>
                        <input type="password" class="form-control text-text-bg-3" id="password" name="password" required>
                    </div>
                    <div class="form-check form-switch">
                        <label class="form-check-label" for="writePermission">Permissão de escrita</label>
                        <input class="form-check-input" type="checkbox" id="writePermission" name="writePermission" checked>
                    </div>
                    <div class="form-check form-switch">
                        <label class="form-check-label" for="active">Usuário ativo</label>
                        <input class="form-check-input" type="checkbox" id="active" name="active">
                    </div>
                    <div class="form-check form-switch">
                        <label class="form-check-label" for="admin">Usuário administrador</label>
                        <input class="form-check-input" type="checkbox" id="admin" name="admin">
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