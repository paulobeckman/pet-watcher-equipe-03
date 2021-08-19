@extends('dashboard')
@section('content')
    <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Pet Watcher</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Resetar Senha</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('update_password')}}" method="POST" id="change_password_form">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="small mb-1" for="old_password">Antiga Senha</label>
                                        <input class="form-control py-1" id="old_password" type="password"
                                               name="senha_antiga"/>
                                        @if($errors->any('old_password'))
                                            <span class="text-danger">{{$errors->first('old_password')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="password">Nova Senha</label>
                                        <input class="form-control py-1" id="new_password" type="password"
                                               name="new_password"/>
                                        @if($errors->any('new_password'))
                                            <span class="text-danger">{{$errors->first('new_password')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="confirm_password">Confirme a Senha</label>
                                        <input class="form-control py-1" id="confirm_password" type="password"
                                               name="confirm_password"/>
                                        @if($errors->any('confirm_password'))
                                            <span class="text-danger">{{$errors->first('confirm_password')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mt-4 mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">Resetar Senha</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>

</html>

@endsection
