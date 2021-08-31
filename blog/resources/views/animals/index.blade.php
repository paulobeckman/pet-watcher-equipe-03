@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<div>
    <script>
        $(document).ready(function() {
            // show the alert
            setTimeout(function() {
                $(".alert").alert('close');
            }, 3000);
        });
        $(function() {
            $('.toggle-class').change(function() {
                var active = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');
                console.log(active);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/active',
                    data: {
                        'active': active,
                        'id': id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script>

    @if ( session( 'success_message' ) )
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong> {{ session( 'success_message' ) }}</strong>
        @endif
    </div>
    <div class="col-md-4">
        <form action="{{ route('search') }}" method="get" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="_method" placeholder="Search Title"> 
                <span class=" input-group-btn">
                <button type="submit" class="btn btn-primary">Search</button></span>
            </div>
        </form>
    </div>
    <a class="btn btn-primary mt-3" href="{{ route('novo_animal') }}">Novo Animal</a>
    <table class="table border mt-2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Tipo de Aquisição</th>
                <th>Microchip</th>
                <th>Fase / Porte</th>
                <th>Sexo</th>
                <th>Ações</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animals as $animal)
            <tr>
                <td>{{ $animal->id }}</td>
                <td>{{ $animal->name }}</td>
                <td>{{ $animal->type_acquisition }}</td>
                <td>{{ $animal->code_microchip }}</td>
                <td>{{ $animal->size }}</td>
                <td>{{ $animal->sex }}</td>
                <td>
                    <form action="{{ action('AnimalsController@destroy', $animal->id) }}" method="post">
                        <a class="btn btn-success btn-sm" href="/animal/{{ $animal->id }}">Ver</a>

                        <a class="btn btn-primary btn-sm" href="/animal/edit/{{ $animal->id }}">Editar</a>

                        @csrf
                        {{ method_field('delete') }}

                        <a class="btn btn-danger btn-sm" href="#" onclick="if (confirm('Apaga &quot;{{ $animal->name }}&quot;?')) this.parentNode.submit();">Apagar</a>
                    </form>
                </td>
                <td>
                    <input data-id="{{$animal->id}}" class="toggle-class" data-size="sm" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Ativo" data-off="Desativo" {{ $animal->active ? 'checked' : '' }}>
                </td>
                @endforeach
        </tbody>
    </table>
</div>
@stop