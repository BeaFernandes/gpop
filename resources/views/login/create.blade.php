@include('util.head')

<body>
    @include('util.navbar')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-sm-12 col-lg-8">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text visually-hidden">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" aria-describedby="passwordHelp">
                        <div id="passwordHelp" class="form-text visually-hidden">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </div>
                    </div>
                    <div class="mb-3 text-end">
                        <a href="#" class="link-highlight-4 fs-6">Esqueci minha senha</a>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-highlight-2 text-text-bg-2 fw-bold">Submit</button>
                    </div>    
                </form>
            </div>
        </div>
    </div>
    

    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>

</html>