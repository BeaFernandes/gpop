<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - GPOP</title>

    <link rel="stylesheet" href="{{ asset('site/style.css')}}">
</head>

<body>
    @include('navbar')

    <h1 class="text-text-bg-3">Testando bootstrap</h1>
    <button class="btn btn-lg btn-highlight-1 text-text-bg-4 fw-bold">Bootstrap ok!</button>

    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>

</html>