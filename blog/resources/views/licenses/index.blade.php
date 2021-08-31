@extends('layouts.app')

@section('content')

<div>
    <script>
        $(document).ready(function() {
            // show the alert
            setTimeout(function() {
                $(".alert").alert('close');
            }, 3000);
        });
    </script>

    @if ( session( 'success_message' ) )
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong> {{ session( 'success_message' ) }}</strong>
        @endif
    </div>


    <a class="btn btn-primary mt-3" href="{{ route('nova_licenca') }}">Nova Licença</a>
    <table class="table border mt-2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data de Licenciamento</th>
                <th>Data de Vencimento</th>
                <th>Data de Revogação</th>
                <th>CNPJ</th>
                <th>Ações</th>
                <th>Revogação</th>

            </tr>
        </thead>
        <tbody>
            @foreach($licenses as $license)
            <tr>
                <td>{{ $license->id }}</td>
                <td>{{ $license->date_license }}</td>
                <td>{{ $license->date_due }}</td>
                <td>{{ $license->date_revocation }}</td>
                <td>{{ $license->license->cnpj }}</td>

                <td>
                    <form action="{{ action('LicenseController@destroy', $license->id) }}" method="post">
                        <a class="btn btn-success btn-sm" href="/license/{{ $license->id }}">Ver</a>

                        <a class="btn btn-primary btn-sm" href="/license/edit/{{ $license->id }}">Editar</a>


                        @csrf
                        {{ method_field('delete') }}

                        <a class="btn btn-danger btn-sm" href="#" onclick="if (confirm('Apaga &quot;{{ $license->name }}&quot;?')) this.parentNode.submit();">Apagar</a>

                    </form>
                </td>
                <td>
                    <button class="btn btn-warning btn-sm" href="{{ route('licenca.revogar', $license->id) }}">Revogar</button>
                </td>
                @endforeach
        </tbody>
    </table>
</div>
@stop