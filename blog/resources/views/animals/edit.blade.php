@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            Editar Animais
        </div>
        <div class="card-body">
            <form action="{{ action('AnimalsController@update', $animals->id) }}" method="post">
                @csrf
                <!-- {{ method_field('put') }} -->

                <input class="btn btn-primary mt-2" type="submit" value="Enviar">
            </form>  
        </div>
        
        <div class="card-footer">
            <a class="btn btn-primary mt-2" href="{{ action('AnimalsController@index') }}">Voltar</a>
        </div>
    </div>
@stop