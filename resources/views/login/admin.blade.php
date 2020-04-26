<!DOCTYPE html>
<html>
<head>
	<title>Administrator Login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css')}}">
</head>
<body>
	<div class="container">
        <div class="login-panel">
            <div class="login-logo-side">
                <img src="{{ asset('images/eclogo.png') }}" alt="">
            </div>
            <h5 class="login-header">Administrator Login</h5>

            <div class="login-form">
                {{ Form::open(['route' => 'admin.login', 'method' => 'post']) }}
                    {{ csrf_field() }}
                    <div class="form-group">
                         <label for="">Employee Number:</label>
                         <input type="text" class="login-input" name="uname" autocomplete="false">
                    </div>

                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" class="login-input" name="pword">
                    </div>

                    <div class="form-group">
                        <a href="/login/adminforgot" class="login-input" style="color: blue; margin-left: 60px; text-decoration: underline;">Forgot Password?</a>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="" class="btn btn-primary login-button" value="Login">
                    </div>
                {{ Form::close()}}
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('/js/sweetalert.min.js') }}"></script>
    @include('sweet::alert')

    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}">
    </script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}">
    </script>
</body>
</html>