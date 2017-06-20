@extends('auth.layout.app')
@section('title', 'Login')
@section('page', 'login-page')
@section('ul-nav')
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="{{ route('index') }}">
                <i class="material-icons">dashboard</i> Dashboard
            </a>
        </li>
        <li class="">
            <a href="{{ route('register') }}">
                <i class="material-icons">person_add</i> Register
            </a>
        </li>
        <li class="active">
            <a href="{{ route('login') }}">
                <i class="material-icons">fingerprint</i> Login
            </a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="card card-login card-hidden">
                            <div class="card-header text-center" data-background-color="rose">
                                <h4 class="card-title">Login</h4>
                            </div>
                            <div class="card-content">
                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email address</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Password</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
