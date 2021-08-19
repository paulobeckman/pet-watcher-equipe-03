<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pet Watcher</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Criar uma conta</h3></div>
                                    <div class="card-body">
                                        <form action="{{url('post-register')}}" method="POST" id="regForm">
										{{ csrf_field() }}
                                            <div class="form-group">
												<label class="small mb-1" for="inputFirstName">Nome</label>
												<input class="form-control py-1" id="inputFirstName" type="text" name="name"/>
												 @if ($errors->has('name'))
												  <span class="error">{{ $errors->first('name') }}</span>
												  @endif  
											</div>
                                            <div class="form-group">
												<label class="small mb-1" for="inputEmailAddress">Email</label>
												<input class="form-control py-1" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email"/>
												@if ($errors->has('email'))
												  <span class="error">{{ $errors->first('email') }}</span>
												@endif
											</div>
											<div class="form-group">
												<label class="small mb-1" for="inputPassword">Senha</label>
												<input class="form-control py-1" id="inputPassword" type="password" name="password" />
												@if ($errors->has('password'))
												  <span class="error">{{ $errors->first('password') }}</span>
												@endif
											</div>
                                            <div class="form-group mt-4 mb-0">
								                <button class="btn btn-primary btn-block" type="submit">Criar Conta</button>
											</div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center">
                                        <div class="small"><a href="{{url('login')}}">Have an account? Go to login</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
