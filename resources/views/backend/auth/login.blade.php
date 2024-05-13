<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoeShineStore | Login </title>
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/customize.css')}}" rel="stylesheet">
</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to ShoeShine</h2>
                <img src="{{ asset('images/shoelog.jpg') }}"
                    class="animated-image" alt="">
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form method="POST" class="m-t" role="form" action="{{ route('auth.login') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" name='email' class="form-control" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="error-message">*{{ $errors->first('email') }}</span>
                            @endif

                        </div>
                        <div class="form-group">
                            <input type="password" name='password' class="form-control" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="error-message">*{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
                    </form>

                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-9">
                Product of DavidPhan
            </div>
            <div class="col-md-3 text-right">
                <small>2024</small>
            </div>
        </div>
    </div>

</body>

</html>
