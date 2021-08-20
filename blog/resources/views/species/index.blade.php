@extends('layouts.app')

@section('content')
@can('admin')
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
</div>
@endcan
@stop
