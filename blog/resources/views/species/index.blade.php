@extends('dashboard')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/3bb9d178b9.js" crossorigin="anonymous"></script>
<style type="text/css">
    h1 {
        color: green;
    }

    .xyz {
        background-size: auto;
        text-align: center;
        padding-top: 100px;
    }

    .btn-circle.btn-sm {
        width: 30px;
        height: 30px;
        padding: 6px 0px;
        border-radius: 15px;
        font-size: 8px;
        text-align: center;
    }

    .btn-circle.btn-md {
        width: 50px;
        height: 50px;
        padding: 7px 10px;
        border-radius: 25px;
        font-size: 10px;
        text-align: center;
    }

    .btn-circle.btn-xl {
        width: 70px;
        height: 70px;
        padding: 10px 16px;
        border-radius: 35px;
        font-size: 12px;
        text-align: center;
    }
</style>
</head>


<a class="btn btn-primary mt-3" href="{{ route('nova_especie') }}">Nova Especie</a>
<table class="table border mt-2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>

        </tr>
    </thead>
    <tbody>
        @foreach($species as $specie)
        <tr>
            <td>{{ $specie->id }}</td>
            <td>{{ $specie->name }}</td>
            <td>
                <form action="{{ action('SpeciesController@destroy', $specie->id) }}" method="post">
                    <a class="btn btn-success btn-sm" href="/species/{{ $specie->id }}">Ver</a>
                    <!-- <a class="btn btn-success btn-circle btn-sm" href="/species/{{ $specie->id }}">
                        <i class="fas fa-info-circle" ></i>
                    </a> -->
                    <a class="btn btn-primary btn-sm" href="/species/edit/{{ $specie->id }}">Editar</a>
                    <!-- <a type="button" class="btn btn-danger btn-circle btn-sm" href="/species/edit/{{ $specie->id }}">
                        <i class="fas fa-edit"></i>
                    </a> -->

                    @csrf
                    {{ method_field('delete') }}
                    <!-- <button type="button" class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash-alt" btn-sm" href="#" onclick="if (confirm('Apaga &quot;{{ $specie->name }}&quot;?')) this.parentNode.submit();"></i>
                    </button> -->
                    <a class="btn btn-danger btn-sm" href="#" onclick="if (confirm('Apaga &quot;{{ $specie->name }}&quot;?')) this.parentNode.submit();">Apagar</a>

                </form>
            </td>
            @endforeach
    </tbody>
</table>
@stop