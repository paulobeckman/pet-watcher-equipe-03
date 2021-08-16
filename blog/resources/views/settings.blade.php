@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reset Password</div>
                <div class="card-body">
                    <div class="panel-body">
                        @if (count($errors) > 0)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-ban"></i> Error!</h4>
                                    @foreach($errors->all() as $error)
                                    {{ $error }} <br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                        <form action="{{route('update_password')}}" method="POST" id="change_password_form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Senha atual</label>
                                <input type="password" name="current_password" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Nova Senha</label>
                                <input type="password" name="new_password" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Confirme Senha</label>
                                <input type="password" name="confirm_password" class="form-control" />
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Salva</button>
                            </div>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection