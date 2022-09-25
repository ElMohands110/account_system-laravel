<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Accounts System To Manage Accounts">
    <meta name="author" content="STM">
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}">
    <title>STM Accounts | Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/overlay-scroll/OverlayScrollbars.min.css') }}">
    <style>
        .login-box {
            padding: 40px 40px 40px 40px;
        }
    </style>
</head>
<body class="login-container">
<div class="container">
    <form action="{{ route('login') }}" method="POST">
        <div class="login-box">
            <div class="login-form">
                <a href="#" class="login-logo text-light">
                    <h3>STM Accounts</h3>
                </a>

                @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('error') }}
                    </div>
                @endif

                <div class="login-welcome">Please login to your account.</div>
                @csrf
                <div class="login-form-block">
                    <label class="login-form-label">Username</label>
                    <input type="text" name="username" class="login-form-control" value="{{ old('username') }}">
                </div>
                <div class="login-form-block">
                    <label class="login-form-label">Password</label>
                    <input type="password" name="password" class="login-form-control">
                </div>
                <div class="form-group text-start custom-mt-form-group">
                    <button class="btn btn-info mr-2" id="submit" type="submit">Login</button>
                </div>
{{--                <div class="login-form-footer">--}}
{{--                    <div class="additional-link">--}}
{{--                        Don't have an account?--}}
{{--                        <a href="signup.html" class="btn">Signup</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </form>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
