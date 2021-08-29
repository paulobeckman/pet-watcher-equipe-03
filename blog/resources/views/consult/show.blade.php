@extends('layouts.app')

@section('content')

<div class="mt-5 d-flex justify-content-center">
    <div class="card col-12 col-sm-11 col-md-8 col-lg-6 col-xl-5">

        <div class="card-header">
            Dados do Animal
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    Nome do animal
                </div>
                <div class="col-6">
                    {{$databaseAnimals->name}}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Tipo de aquisição
                </div>
                <div class="col-6">
                    {{$databaseAnimals->type_acquisition}}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Codigo do microchip
                </div>
                <div class="col-6">
                    {{$databaseAnimals->code_microchip}}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Tamanho
                </div>
                <div class="col-6">
                    {{$databaseAnimals->size}}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Sexo
                </div>
                <div class="col-6">
                    {{$databaseAnimals->sex}}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Situação
                </div>
                <div class="col-6">
                    {{$databaseAnimals->active}}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Razão da Inativação
                </div>
                <div class="col-6">
                    {{$databaseAnimals->reason_inactivation}}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Data de Nascimento
                </div>
                <div class="col-6">
                    {{$databaseAnimals->date_birth}}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Data de Registração
                </div>
                <div class="col-6">
                    {{$databaseAnimals->data_registration}}
                </div>
            </div>
        </div>
        
        <div class="card-header">
            Dados do Proprietário
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    Tipo de pessoa
                </div>
                <div class="col-6">
                    {{$databaseOwners->person_type}}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    CPF/CNPJ
                </div>
                <div class="col-6">
                    {{$databaseOwners->cpf_cnpj}}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Nome
                </div>
                <div class="col-6">
                    {{$databaseOwners->full_name}}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Telefone
                </div>
                <div class="col-6">
                    {{$databaseOwners->phone}}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Email
                </div>
                <div class="col-6">
                    {{$databaseOwners->email}}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Endereço
                </div>
                <div class="col-6">
                    {{$databaseOwners->address}}
                </div>
            </div>
        </div>
      
<div class="card-footer">
            <a class="btn btn-primary mt-2" href="{{ action('ConsultDatabaseController@index') }}">Voltar</a>
        </div>
    </div>
</div>

@stop