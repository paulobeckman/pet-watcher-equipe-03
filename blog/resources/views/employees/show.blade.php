@extends('dashboard')

@section('content')

<div class="mt-5 d-flex justify-content-center">
    <div class="card col-12 col-sm-11 col-md-8 col-lg-6 col-xl-5">
        <div class="card-header">
            Visualizar Funcionario
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    ID
                </div>
                <div class="col-6">
                    {{ $employee->id }}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Nome
                </div>
                <div class="col-6">
                    {{ $employee->full_name }}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    CPF
                </div>
                <div class="col-6">
                    {{ $employee->cpf }}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Telefone
                </div>
                <div class="col-6">
                    {{ $employee->phone }}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Email
                </div>
                <div class="col-6">
                    {{ $employee->email }}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Endereço
                </div>
                <div class="col-6">
                    {{ $employee->address }}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Credencial
                </div>
                <div class="col-6">
                    {{ $employee->id_accredited }}
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Usuario
                </div>
                <div class="col-6">
                    {{ $employee->id_user }}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary mt-2" href="{{ action('EmployeeController@index') }}">Voltar</a>
        </div>
    </div>
</div>
@stop