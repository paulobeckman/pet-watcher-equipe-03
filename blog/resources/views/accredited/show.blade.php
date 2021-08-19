@extends('dashboard')

@section('content')

<div class="mt-5 d-flex justify-content-center">
    <div class="card col-12 col-sm-11 col-md-8 col-lg-6 col-xl-5">
        <div class="card-header">
           a
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    ID
                </div>
                <div class="col-6">
                    {{ $accredited->id }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    CNPJ
                </div>
                <div class="col-6">
                    {{ $accredited->cnpj }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                state_registration
                </div>
                <div class="col-6">
                    {{ $accredited->state_registration }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                corporate_reason
                </div>
                <div class="col-6">
                    {{ $accredited->corporate_reason }}
                </div>
            </div><div class="row">
                <div class="col-6">
                phone
                </div>
                <div class="col-6">
                    {{ $accredited->phone }}
                </div>
            </div><div class="row">
                <div class="col-6">
                email
                </div>
                <div class="col-6">
                    {{ $accredited->email }}
                </div>
            </div><div class="row">
                <div class="col-6">
                address
                </div>
                <div class="col-6">
                    {{ $accredited->address }}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary mt-2" href="{{ action('AccreditedController@index') }}">Voltar</a>
        </div>
    </div>
</div>
@stop