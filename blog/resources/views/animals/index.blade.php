@extends('layouts.app')

@section('content')
    <div>
        <a class="btn btn-primary mt-3" href="{{ route('novo_animal') }}">Novo Animal</a>
        <table class="table border mt-2">
            <thead>
                <tr>
                    <th>Tipo de Aquisição</th>
                    <th>Microchip</th>
                    <th>Pedigree</th>
                    <th>Fase / Porte</th>
                </tr>
            </thead>
            <tbody>
            @foreach($animals as $animal)
                <tr>
                    <td>{{ $animal->id }}</td>
                    <td>{{ $animal->name }}</td>
                    <td>
                        <form action="{{ action('SpeciesController@destroy', $animal->id) }}" method="post">
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
