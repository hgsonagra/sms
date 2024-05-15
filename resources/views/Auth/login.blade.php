<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Log in Page </title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">

</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Log</b> In</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('userlogin') }}  " method="post">

                    @if (Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if (Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf

                    <div class="mb-3">
                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="Email" name="email"
                                value="{{old('email')}}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror</span>
                    </div>
                    <div class="mb-3">
                        <div class="input-group ">
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                value="{{old('passowrd')}}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">
                            @error('password')
                            {{$message}}
                            @enderror</span>
                    </div>


                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success btn-block">Sign In</button>
                    </div>

                </form>
                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook <b>*</b>
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+ <b>*</b>
                    </a>
                </div>

                <p class="mb-1">
                    <a href="#">I forgot my password <b>*</b></a>
                </p>
                <p class="mb-0">
                    <a href="/register" class="text-center">Register a new membership</a>
                </p>
            </div>

        </div>

    </div>


    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>