@extends('dashboard')

@section('content')

<div class="mt-5 d-flex justify-content-center">
    <div class="card col-12 col-sm-11 col-md-8 col-lg-6 col-xl-5">
        <div class="card-header">
            Visualizar Proprietário
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    ID
                </div>
                <div class="col-6">
                    {{ $owners->id }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Tipo Pessoa
                </div>
                <div class="col-6">
                    {{ $owners->person_type }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    CPF / CNPJ
                </div>
                <div class="col-6">
                    {{ $owners->cpf_cnpj }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Nome Completo
                </div>
                <div class="col-6">
                    {{ $owners->full_name }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Email
                </div>
                <div class="col-6">
                    {{ $owners->email }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Telefone
                </div>
                <div class="col-6">
                    {{ $owners->phone }}
                </div>
                </div>
            <div class="row">
                <div class="col-6">
                    Endereço
                </div>
                <div class="col-6">
                    {{ $owners->address }}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary mt-2" href="{{ action('OwnersController@index') }}">Voltar</a>
        </div>
    </div>
</div>
@stop
