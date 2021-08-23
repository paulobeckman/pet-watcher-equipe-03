@extends('layouts.app')

@section('content')

    <div class="mt-5 d-flex justify-content-center">
        <div class="card col-12 col-sm-11 col-md-8 col-lg-6 col-xl-5">
            <div class="card-header">
                Visualizar Animais
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <!--ID-->
                    </div>
                    <div class="col-6">
                        <!---->
                    </div>
                </div>
            </div>
            
            <div class="card-footer">
                <a class="btn btn-primary mt-2" href="{{ action('AnimalsController@index') }}">Voltar</a>
            </div>
        </div>
    </div>

@stop