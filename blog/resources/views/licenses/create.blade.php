<!DOCTYPE HTML>
@extends('dashboard')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Nova Licença
    </div>
    <div class="card-body">
        <form action="{{ route('nova_licenca') }}" method="post">
            @csrf
            <label for="date_license" class="form-label">date_license</label>
            <input class="form-control " type="date" name="date_license" id="date_license">
            <label for="date_due" class="form-label">date_due</label>
            <input class="form-control " type="date" name="date_due" id="date_due">
            <label for="date_revocation" class="form-label">date_revocation</label>
            <input class="form-control " type="date" name="date_revocation" id="date_revocation">
            <label for="id_accredited" class="form-label">id_accredited</label>
            <input class="form-control " type="text" name="id_accredited" id="$license->license->cnpj">
               

            <input class="btn btn-primary mt-2" type="submit" value="Enviar">
        </form>
    </div>
    <div class="card-footer">
        <a class="btn btn-primary mt-2" href="{{ action('LicenseController@index') }}">Voltar</a>
    </div>
</div>
@stop

