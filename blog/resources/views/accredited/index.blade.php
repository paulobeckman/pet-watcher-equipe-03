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
        let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            let switchery = new Switchery(html, {
                size: 'small'
            });
        });
        $(document).ready(function() {
            $('.js-switch').change(function() {
                let status = $(this).prop('checked') === true ? 1 : 0;
                let userId = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "{{ route('users.update.status') }}",
                    data: {
                        'status': status,
                        'user_id': userId
                    },
                    success: function(data) {
                        console.log(data.message);
                    }
                });
            });
        });
    </script>
    </body>

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
                    <label class="form-check-label" for="status">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" title="status" id="status" value="{{ $accredited->id }}" {{ $accredited->status ? ' checked' : '' }} />
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                        </div>
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
