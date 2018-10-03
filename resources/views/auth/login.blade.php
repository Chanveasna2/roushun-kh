@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<!-- Bootstrap core CSS-->--}}
    {{--<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>--}}
    {{--<link href="/css/login.css" rel="stylesheet"/>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">--}}
            {{--<div class="card card-signin my-5">--}}
                {{--<div class="card-body">--}}
                    {{--<h5 class="card-title text-center">Sign In</h5>--}}
                    {{--<form  method="POST" action="{{ route('login') }}">--}}
                        {{--@csrf--}}
                        {{--<div class="form-label-group">--}}
                            {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}
                            {{--<label for="email">Email address</label>--}}
                            {{--@if ($errors->has('email'))--}}
                                {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}

                        {{--<div class="form-label-group">--}}
                            {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}
                            {{--<label for="password">Password</label>--}}
                            {{--@if ($errors->has('password'))--}}
                                {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}

                        {{--<div class="custom-control custom-checkbox mb-3">--}}
                            {{--<input type="checkbox" class="custom-control-input" id="customCheck1">--}}
                            {{--<label class="custom-control-label" for="customCheck1">Remember password</label>--}}
                        {{--</div>--}}
                        {{--<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Login') }}</button>--}}
                        {{--<hr class="my-4">--}}
                        {{--<button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>--}}
                        {{--<button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- Bootstrap core JavaScript-->--}}
{{--<script src="/vendor/jquery/jquery.min.js"></script>--}}
{{--<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
