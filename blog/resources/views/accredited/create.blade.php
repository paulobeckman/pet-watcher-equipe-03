<!DOCTYPE HTML>
@extends('dashboard')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Nova Credencial
    </div>
    <div class="card-body">
        <form action="{{ route('nova_credencial') }}" method="post">
            @csrf
            <label for="cnpj" class="form-label">CNPJ</label>
            <input class="form-control " type="text" name="cnpj" id="cnpj">
            <label for="state_registration" class="form-label">Inscrição Estadual</label>
            <input class="form-control " type="text" name="state_registration" id="state_registration"> 
            <label for="corporate_reason" class="form-label">Razão Social</label>
            <input class="form-control " type="text" name="corporate_reason" id="corporate_reason"> 
            <label for="phone" class="form-label">Telefone</label>
            <input class="form-control " type="text" name="phone" id="phone"> 
            <label for="email" class="form-label">email</label>
            <input class="form-control " type="text" name="email" id="email"> 
            <label for="address" class="form-label">endereço</label>
            <input class="form-control " type="text" name="address" id="address">

            <input class="btn btn-primary mt-2" type="submit" value="Enviar">
        </form>
    </div>
    <div class="card-footer">
        <a class="btn btn-primary mt-2" href="{{ action('AccreditedController@index') }}">Voltar</a>
    </div>
</div>
@stop