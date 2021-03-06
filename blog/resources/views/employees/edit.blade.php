@extends('dashboard')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Editar Especie
    </div>
    <div class="card-body">
        <form action="{{ action('EmployeeController@update', $employee->id) }}" method="post">
            @csrf

            <label for="name" class="form-label">Nome Completo</label>
            <input class="form-control " type="text" name="full_name" value="{{ $employee->full_name }}">
            <label for="name" class="form-label">CPF</label>
            <input class="form-control " type="text" name="cpf" value="{{ $employee->cpf }}">
            <label for="name" class="form-label">Telefone</label>
            <input class="form-control " type="text" name="phone" value="{{ $employee->phone }}">
            <label for="name" class="form-label">Email</label>
            <input class="form-control " type="text" name="email" value="{{ $employee->email }}">
            <label for="name" class="form-label">Endereço</label>
            <input class="form-control " type="text" name="address" value="{{ $employee->address }}">
            <label for="id_accredited" class="form-label">CNPJ</label>
            <div>
                <select class="custom-select mr-sm-2" name="id_accredited" value="$license->license->cnpj">
                    @foreach ($data as $row)
                    <option value="{{$row->id}}">{{$row->cnpj}}</option>
                    @endforeach
                </select>
            </div>

            <input class="btn btn-primary mt-2" type="submit" value="Enviar">
        </form>
    </div>
    <div class="card-footer">
        <a class="btn btn-primary mt-2" href="{{ action('EmployeeController@index') }}">Voltar</a>
    </div>
</div>
@stop