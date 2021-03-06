@extends('layouts.app')

@section('content')

<div class="mt-5 d-flex justify-content-center">
    <div class="card col-12 col-sm-11 col-md-8 col-lg-6 col-xl-5">
        <div class="card-header">
            Visualizar Licença
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    ID
                </div>
                <div class="col-6">
                    {{ $license->id }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Data de Licenciamento
                </div>
                <div class="col-6">
                    {{ $license->date_license }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Data de Vencimento
                </div>
                <div class="col-6">
                    {{ $license->date_due }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Data de Revogação
                </div>
                <div class="col-6">
                    {{ $license->date_revocation }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    CNPJ
                </div>
                <div class="col-6">
                    {{ $license->id_accredited }}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary mt-2" href="{{ action('LicenseController@index') }}">Voltar</a>
        </div>
    </div>
</div>
@stop
