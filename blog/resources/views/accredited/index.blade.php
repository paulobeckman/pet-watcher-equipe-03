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
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');
                console.log(status);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/userChangeStatus',
                    data: {
                        'status': status,
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
    @if ( !count( $accrediteds ) )
    <div class="list-subitem text-center">
        <h2 class="mb-3">Nenhum Licença cadastrada.</h2>
        <a class="btn btn-primary mt-3" href="{{ route('nova_credencial') }}">Add</a></br>
        <span>Cadastre o primeiro</span></a>
    </div>
    @else

    <a class="btn btn-primary mt-3" href="{{ route('nova_credencial') }}">Nova Credencial</a>
    <table class="table border mt-2">
        <thead>
            <tr>
                <th>ID</th>
                <th>CNPJ</th>
                <th>Ações</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accrediteds as $accredited)
            <tr>
                <td>{{ $accredited->id }}</td>
                <td>{{ $accredited->cnpj }}</td>
                <td>
                    <form action="{{ action('AccreditedController@destroy', $accredited->id) }}" method="post">
                        <a class="btn btn-success btn-sm" href="/accredited/{{ $accredited->id }}">Ver</a>

                        <a class="btn btn-primary btn-sm" href="/accredited/edit/{{ $accredited->id }}">Editar</a>
                <td>
                    <input data-id="{{$accredited->id}}" class="toggle-class" data-size="sm" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Habilitar" data-off="Desabilitar" {{ $accredited->status ? 'checked' : '' }}>
                </td>

                <!-- @csrf
                        {{ method_field('delete') }}

                        <a class="btn btn-danger btn-sm" href="#" onclick="if (confirm('Apaga &quot;{{ $accredited->cnpj }}&quot;?')) this.parentNode.submit();">Apagar</a> -->

                </form>
                </td>
                @endforeach

        </tbody>
    </table> @endif
</div>

@stop