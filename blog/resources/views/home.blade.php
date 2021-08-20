@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @can('user')
                    You are logged in!
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @elsecan('admin')
                    <div class="btn-group">
                        <a href="{{url('species')}}" class="btn btn-primary active" aria-current="page">Especies</a>
                        <a href="#" class="btn btn-primary">Link</a>
                        <a href="#" class="btn btn-primary">Link</a>
                    </div>
                    @endcan

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
