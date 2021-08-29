@extends('dashboard')

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


    <a class="btn btn-primary mt-3" href="{{ route('novo_funcionario') }}">Novo Funcionario</a>
    <table class="table border mt-2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Endereço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->full_name }}</td>
                <td>{{ $employee->cpf }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->address }}</td>
                <td>
                    <form action="{{ action('EmployeeController@destroy', $employee->id) }}" method="post">
                        <a class="btn btn-success btn-sm" href="/employee/{{ $employee->id }}">Ver</a>

                        <a class="btn btn-primary btn-sm" href="/employee/edit/{{ $employee->id }}">Editar</a>

                        <!-- @csrf
                        {{ method_field('delete') }}
                        <a class="btn btn-danger btn-sm" href="#" onclick="if (confirm('Apaga &quot;{{ $employee->name }}&quot;?')) this.parentNode.submit();">Apagar</a> -->

                    </form>
                </td>
                @endforeach
        </tbody>
    </table>
</div>
@stop