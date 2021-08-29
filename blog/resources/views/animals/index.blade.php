@extends('layouts.app')

@section('content')

<div>
    <script>
        $(document).ready(function() {
            // show the alert
            setTimeout(function() {
                $(".alert").alert('close');
            }, 3000);
        });
    </script>

    @if ( session( 'success_message' ) )
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong> {{ session( 'success_message' ) }}</strong>
        @endif
    </div>
    <a class="btn btn-primary mt-3" href="{{ route('novo_animal') }}">Novo Animal</a>
    <table class="table border mt-2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Tipo de Aquisição</th>
                <th>Microchip</th>
                <th>Fase / Porte</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animals as $animal)
            <tr>
                <td>{{ $animal->id }}</td>
                <td>{{ $animal->name }}</td>
                <td>{{ $animal->type_acquisition }}</td>
                <td>{{ $animal->code_microchip }}</td>
                <td>{{ $animal->size }}</td>
                <td>{{ $animal->sex }}</td>
                <td>
                    <form action="{{ action('AnimalsController@destroy', $animal->id) }}" method="post">
                        <a class="btn btn-success btn-sm" href="/animal/{{ $animal->id }}">Ver</a>

                        <a class="btn btn-primary btn-sm" href="/animal/edit/{{ $animal->id }}">Editar</a>

                        @csrf
                        {{ method_field('delete') }}

                        <a class="btn btn-danger btn-sm" href="#" onclick="if (confirm('Apaga &quot;{{ $animal->name }}&quot;?')) this.parentNode.submit();">Apagar</a>

                    </form>
                </td>
                @endforeach
        </tbody>
    </table>
</div>
@stop