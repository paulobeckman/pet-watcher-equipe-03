@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            Editar Especie
        </div>
        <div class="card-body">
        <form action="{{ action('SpeciesController@update', $specie->id) }}" method="post">
                @csrf
                <!-- {{ method_field('put') }} -->
                <label for="name" class="form-label">Nome</label>
                <input class="form-control " type="text" name="name" id="name" value="{{ $specie->name }}">

                <input class="btn btn-primary mt-2" type="submit" value="Enviar">
            </form>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary mt-2" href="{{ action('SpeciesController@index') }}">Voltar</a>
        </div>
    </div>
@stop

