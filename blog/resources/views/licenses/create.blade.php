<!DOCTYPE HTML>
@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Nova Licença
    </div>
    <div class="card-body">
        <form action="{{ route('nova_licenca') }}" method="post">
            @csrf
            <label for="date_license" class="form-label">Data de Licenciamento</label>
            <input class="form-control " type="date" name="date_license" id="date_license">
            <label for="date_due" class="form-label">Data de Vencimento</label>
            <input class="form-control " type="date" name="date_due" id="date_due">
            <label for="date_revocation" class="form-label">Data de Revogação</label>
            <input class="form-control " type="date" name="date_revocation" id="date_revocation">
            <label  for="id_accredited" class="form-label">CNPJ</label>
            <div>
            <select class="custom-select mr-sm-2" name="id_accredited" id="$license->license->cnpj">
                @foreach ($data as $row)
                <option value="{{$row->id}}">{{$row->cnpj}}</option>
                @endforeach
            </select>
            </div>
            
            <div class="d-flex justify-content-center">
                <input class="btn btn-primary mt-2" type="submit" value="Enviar">
            </div>

        </form>
    </div>
    <div class="card-footer">
        <a class="btn btn-primary mt-2" href="{{ action('LicenseController@index') }}">Voltar</a>
    </div>
</div>
@stop