@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Editar Credencial
    </div>
    <div class="card-body">
        <form action="{{ action('AccreditedController@update', $accredited->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field( isset( $data ) ? 'PUT' : 'POST' ) }}

            <label for="cnpj" class="form-label">CNPJ</label>
            <input class="form-control " type="text" name="cnpj" id="cnpj" value="{{ $accredited->cnpj }}">
            <label for="state_registration" class="form-label">Inscrição Estadual</label>
            <input class="form-control " type="text" name="state_registration" id="state_registration" value="{{ $accredited->state_registration }}">
            <label for="corporate_reason" class="form-label">Razão Social</label>
            <input class="form-control " type="text" name="corporate_reason" id="corporate_reason" value="{{ $accredited->corporate_reason }}">
            <label for="phone" class="form-label">Telefone</label>
            <input class="form-control " type="text" name="phone" id="phone" value="{{ $accredited->phone }}">
            <label for="email" class="form-label">email</label>
            <input class="form-control " type="text" name="email" id="email" value="{{ $accredited->email }}">
            <label for="address" class="form-label">endereço</label>
            <input class="form-control " type="text" name="address" id="address" value="{{ $accredited->address }}">
            <div class="form-group select-box">
                <select id="status" name="status" class="form-control form-control-lg" required>
                    <option value="" disabled></option>
                    <option value="1" {{ isset( $data ) && $data->status == 1 ? ' selected' : '' }}>Ativo</option>
                    <option value="0" {{ isset( $data ) && $data->status == 0? ' selected' : '' }}>Inativo</option>
                </select>
                <label for="target" class="label">Status:</label>
            </div>


            <input class="btn btn-primary mt-2" type="submit" value="Enviar">
        </form>
    </div>
    <div class="card-footer">
        <a class="btn btn-primary mt-2" href="{{ action('AccreditedController@index') }}">Voltar</a>
    </div>
</div>
@stop
