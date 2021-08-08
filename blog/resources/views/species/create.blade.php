<!DOCTYPE HTML>
@extends('dashboard')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Nova Especie
    </div>
    <div class="card-body">
        <form action="{{ route('nova_especie') }}" method="post">
            @csrf
            <label for="name" class="form-label">Nome da especie</label>
            <input class="form-control " type="text" name="name" id="name">

            <input class="btn btn-primary mt-2" type="submit" value="Enviar">
        </form>
    </div>
    <div class="card-footer">
            <a class="btn btn-primary mt-2" href="{{ action('SpeciesController@index') }}">Voltar</a>
    </div>
</div>
@stop