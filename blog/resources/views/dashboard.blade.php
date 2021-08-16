@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Pet Watcher</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">
        <a class="navbar-brand" href="">Pet Watcher</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if(auth()->check())
                <li class="nav-item">
                    <a class="nav-link" href="{{url('species')}}">Especies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('accredited')}}">Credencial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('license')}}">Licenças</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('employee')}}">Funcionarios</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('change_password')}}">Configurações</a>
                </li>
                @endif
            </ul>
            <ul class="navbar-nav">
                @if(auth()->check())
                <li class="nav-item">
                    <a class="nav-link" href="{{url('logout')}}">Logout</a>
                </li>
                @endif

                @if(auth()->guest())
                <li class="nav-item">
                    <a class="nav-link" href="">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registre-se</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

</body>
<div>
   
   
<div class="container">
    @yield('content')
   
</div>

</html>
@endsection