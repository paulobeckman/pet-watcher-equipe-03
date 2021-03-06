@extends('layouts.app')

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
                <label for="email" class="form-label">Email</label>
                <input class="form-control " type="text" name="email" id="email">
                <label for="address" class="form-label">Endereço</label>
                <input class="form-control " type="text" name="address" id="address">
                <label class="form-label" for="inputPassword">Senha</label>
                <input class="form-control" id="inputPassword" type="password" name="password"/>
                <label for="status" class="form-label">Status</label>
                <div class="form-group select-box">
                    <select id="status" name="status" class="form-control form-control-lg" required>
                        <option value="" disabled></option>
                        <option value="1"{{ isset( $data ) && $data->status == 1 ? ' selected' : '' }}>Ativo</option>
                        <option value="0"{{ isset( $data ) && $data->status == 0? ' selected' : '' }}>Inativo</option>
                    </select>
                </div>

                <input class="btn btn-primary mt-2" type="submit" value="Enviar">
            </form>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary mt-2" href="{{ action('AccreditedController@index') }}">Voltar</a>
        </div>
    </div>
@stop
