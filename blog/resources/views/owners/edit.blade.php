@extends('dashboard')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Editar Licença
    </div>
    <div class="card-body">
        <form action="{{ action('OwnersController@update', $owners->id) }}" method="post">
            @csrf
            <label for="person_type" class="form-label">Tipo Pessoa</label>
            <input class="form-control " type="string" name="person_type" id="person_type" value="{{ $owners->person_type }}">
            <label for="cpf_cnpj" class="form-label">CPF / CNPJ</label>
            <input class="form-control " type="string" name="cpf_cnpj" id="cpf_cnpj" value="{{ $owners->cpf_cnpj }}">
            <label for="full_name" class="form-label">Nome Completo</label>
            <input class="form-control " type="string" name="full_name" id="full_name" value="{{ $owners->full_name }}">
            <label for="phone" class="form-label">Telefone</label>
            <input class="form-control " type="string" name="phone" id="phone" value="{{ $owners->phone }}">
            <label for="email" class="form-label">Email</label>
            <input class="form-control " type="string" name="email" id="email" value="{{ $owners->email }}">
            <label for="address" class="form-label">Endereço</label>
            <input class="form-control " type="string" name="address" id="address" value="{{ $owners->address }}">


            <input class="btn btn-primary mt-2" type="submit" value="Enviar">
        </form>
    </div>
    <div class="card-footer">
        <a class="btn btn-primary mt-2" href="{{ action('OwnersController@index') }}">Voltar</a>
    </div>
</div>
@stop
