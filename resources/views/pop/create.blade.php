@include('util.head')

<body>
    @include('util.navbar')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-sm-12 col-lg-8">
                <form>
                    <div class="mb-3">
                        <label for="title" class="form-label">Título*</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <label for="class" class="form-label">Categoria*</label>
                    <select id="class" class="form-select mb-3">
                        <option selected>----</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição*</label>
                        <input type="text" class="form-control" id="description">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">Passo a passo</div>
                            <div class="col text-end" id="plus"><i class="fa fa-plus text-highlight-1 fs-6" aria-hidden="true"></i></div>
                        </div>
                    </div>
                    <div class="mb-3 visually-hidden" id="steps">
                        <label for="step" class="form-label">Passo 1</label>
                        <input type="text" class="form-control" id="step">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    

    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>


    <script>
        $('#plus').click(function () {
            console.log("alos");
            $( "#steps" ).show();
        })
    </script>
</body>

</html>