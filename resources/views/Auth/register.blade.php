<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Registration Page </title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">

</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Sadbhavna</b> School</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new Parents</p>
                <form action="/save" method="get">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    {{-- @csrf --}}
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" placeholder="Full name" value="{{old('name')}}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">@error('name')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">@error('email')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">@error('password')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="password" class="form-control" name="confirm_password"
                                placeholder="Retype password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">@error('confirm_password')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>


                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success btn-block">Register</button>
                    </div>

                </form>
                <div class="social-auth-links text-center">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook <b>*</b>
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+ <b>*</b>
                    </a>
                </div>
                <a href="/login" class="text-center">I already have a membership</a>
            </div>

        </div>
    </div>


    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>