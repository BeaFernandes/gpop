<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-hover" border="1">
        <thead>
            <tr>
            <th class="align-middle" scope="col">ID</th>
            <th class="align-middle" scope="col">Título</th>
            <th class="align-middle" scope="col">Categoria</th>
            <th class="align-middle" scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        
            @foreach($pops as $pop)
                <tr>
                <th class="align-middle" scope="row" >POP{{$pop->id}}</th>
                <td class="align-middle">{{ $pop->title }}</td>
                <td class="align-middle">{{ $pop->getCategory()}}</td>
                <td class="align-middle">
                    <form action='{{ url("/pop/$pop->id/edit") }}' method="get">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="fa fa-eye text-highlight-1 fs-4 align-middle" aria-hidden="true"></i></button>
                    </form>
                </td>    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>