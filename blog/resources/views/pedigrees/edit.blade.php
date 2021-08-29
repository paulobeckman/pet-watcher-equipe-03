@extends('dashboard')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Editar Pedigree
    </div>
    <div class="card-body">
        <form action="{{ action('PedigreeController@update', $pedigree->id) }}" method="post">
            @csrf
            <label for="code" class="form-label">Codigo</label>
            <input class="form-control " type="string" name="code" id="code" value="{{ $pedigree->code }}">
            <label for="origin" class="form-label">Origem</label>
            <input class="form-control " type="string" name="origin" id="origin" value="{{ $pedigree->origin }}">
            <label for="reason_inactivation" class="form-label">Animal</label>
            <select class="custom-select mr-sm-2" name="id_animal" id="$animal->animal->id" value="{{ $pedigree->id_animal }}>
                @foreach ($animal as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
            </select>
            <input class="btn btn-primary mt-2" type="submit" value="Enviar">
        </form>
    </div>
    <div class="card-footer">
        <a class="btn btn-primary mt-2" href="{{ action('PedigreeController@index') }}">Voltar</a>
    </div>
</div>
@stop
