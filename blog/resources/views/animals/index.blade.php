@extends('layouts.app')

@section('content')
    <div>
        <a class="btn btn-primary mt-3" href="{{ route('novo_animal') }}">Novo Animal</a>
        <table class="table border mt-2">
            <thead>
                <tr>
                    <th>Tipo de Aquisição</th>
                    <th>Microchip</th>
                    <th>Pedigree</th>
                    <th>Fase / Porte</th>
                </tr>                
            </thead>
        </table>
    </div>
@stop