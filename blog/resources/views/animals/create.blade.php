@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Novo Animal
    </div>
    <div class="card-body">
        <form action="{{ route('novo_animal') }}" method="post">
            @csrf
            <label for="name" class="form-label">Nome do animal</label>
            <input class="form-control " type="text" name="name" id="name">
            <label for="type_acquisition" class="form-label">Tipo de aquisição</label>
            <input class="form-control " type="text" name="type_acquisition" id="type_acquisition">
            <label for="code_microchip" class="form-label">Número do microchip</label>
            <input class="form-control " type="text" name="code_microchip" id="code_microchip">
            <label for="size" class="form-label">Tamanho</label>
            <input class="form-control " type="text" name="size" id="size">
            <label for="sex" class="form-label">Sexo</label>
            <input class="form-control " type="text" name="sex" id="sex">

            <label for="date_birth" class="form-label">Data de Anivesario</label>
            <input class="form-control " type="date" name="date_birth" id="date_birth">

            <label for="data_registration" class="form-label">Data de Registro</label>
            <input class="form-control " type="date" name="data_registration" id="data_registration">
            <label for="active" class="form-label">Cadastro Ativo</label>
            <select  class="custom-select" name="active" id="active">
                <option value="0">Desativado</option>
                <option value="1" selected="selected">Ativo</option>
            </select>
            <label for="reason_inactivation" class="form-label">Motivo</label>
            <input class="form-control " type="text" name="reason_inactivation" id="reason_inactivation">

            <label for="reason_inactivation" class="form-label">Proprietário</label>
            <select class="custom-select mr-sm-2" name="id_owner" id="$owner->owner->id">
                @foreach ($dataO as $row)
                <option value="{{$row->id}}">{{$row->full_name}}</option>
                @endforeach
            </select>
            <label for="reason_inactivation" class="form-label">Especie</label>
            <select class="custom-select mr-sm-2" name="id_specie" id="$specie->specie->id">
                @foreach ($dataSpecies as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
            </select>
            <label for="reason_inactivation" class="form-label">Credencial</label>
            <select class="custom-select mr-sm-2" name="id_accredited_responsible" id="$ reponsible-> reponsible->cnpj">
                @foreach ($data as $row)
                <option value="{{$row->id}}">{{$row->cnpj}}</option>
                @endforeach
            </select>

            <input class="btn btn-primary mt-2" type="submit" value="Enviar">
        </form>
    </div>
    <div class="card-footer">
        <a class="btn btn-primary mt-2" href="{{ action('AnimalsController@index') }}">Voltar</a>
    </div>
</div>
@stop