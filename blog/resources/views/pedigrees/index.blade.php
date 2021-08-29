@extends('layouts.app')

@section('content')
@can('admin')
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


    <a class="btn btn-primary mt-3" href="{{ route('new_pedigree') }}">Novo Predigree</a>
    <table class="table border mt-2">
        <thead>
            <tr>
                <th>ID</th>
                <th>code</th>
                <th>origin</th>

            </tr>
        </thead>
        <tbody>
            @foreach($pedigrees as $Pedigree)
            <tr>
                <td>{{ $Pedigree->id }}</td>
                <td>{{ $Pedigree->code }}</td>
                <td>{{ $Pedigree->origin }}</td>
                <td>
                    <form action="{{ action('PedigreeController@destroy', $Pedigree->id) }}" method="post">
                        <a class="btn btn-success btn-sm" href="/pedigree/{{ $Pedigree->id }}">Ver</a>
                        <a class="btn btn-primary btn-sm" href="/pedigree/edit/{{ $Pedigree->id }}">Editar</a>
                        @csrf
                        {{ method_field('delete') }}
                        <a class="btn btn-danger btn-sm" href="#" onclick="if (confirm('Apaga &quot;{{ $Pedigree->name }}&quot;?')) this.parentNode.submit();">Apagar</a>
                    </form>
                </td>
                @endforeach
        </tbody>
    </table>
</div>
@endcan
@stop
