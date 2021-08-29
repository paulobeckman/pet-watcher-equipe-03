@extends('layouts.app')

@section('content')

    <div>
        <table class="table border mt-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Tipo de aquisição</th>
                    <th>Código do microchip</th>
                    <th>Ativo</th>
                </tr>
            </thead>
            <tbody>
            @foreach($databaseAnimals as $id => $dba)
            <tr>
                <td>{{$dba['id']}}</td>
                <td>{{$databaseAnimals[$id]->name}}</td>
                <td>{{$databaseAnimals[$id]->type_acquisition}}</td>
                <td>{{$databaseAnimals[$id]->code_microchip}}</td>
                <td>{{$databaseAnimals[$id]->active}}</td>
                <td>
                    <a class="btn btn-success btn-sm" href="/consult_information/{{ $db->id }}">Ver</a>
                </td>
                
            @endforeach                    
            </tbody>
        </table>
    </div>
@stop