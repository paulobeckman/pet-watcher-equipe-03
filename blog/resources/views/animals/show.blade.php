@extends('layouts.app')

@section('content')

<div class="mt-5 d-flex justify-content-center">
    <div class="card col-12 col-sm-11 col-md-8 col-lg-6 col-xl-5">
        <div class="card-header">
            Visualizar Animais
        </div>
        <div class="row">
            <div class="col-6">
                ID
            </div>
            <div class="col-6">
                {{ $animal->id }}
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Nome
            </div>
            <div class="col-6">
                {{ $animal->name }}
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Tipo de Aquisição
            </div>
            <div class="col-6">
                {{ $animal->type_acquisition }}
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Microchip
            </div>
            <div class="col-6">
                {{ $animal->code_microchip }}
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Fase / Porte
            </div>
            <div class="col-6">
                {{ $animal->size }}
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Sexo
            </div>
            <div class="col-6">
                {{ $animal->sex }}
            </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary mt-2" href="{{ action('AnimalsController@index') }}">Voltar</a>
        </div>
    </div>
</div>

@stop