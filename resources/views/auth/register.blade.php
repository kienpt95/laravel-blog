@extends('auth.layout.app')
@section('title', 'Register')
@section('page', 'register-page')
@section('ul-nav')
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="{{ route('index') }}">
                <i class="material-icons">dashboard</i> Dashboard
            </a>
        </li>
        <li class="active">
            <a href="{{ route('register') }}">
                <i class="material-icons">person_add</i> Register
            </a>
        </li>
        <li class="">
            <a href="{{ route('login') }}">
                <i class="material-icons">fingerprint</i> Login
            </a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="card card-signup">
                    <h2 class="card-title text-center">Register</h2>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="card-content">
                                <div class="info info-horizontal">
                                    <div class="icon icon-rose">
                                        <i class="material-icons">timeline</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Marketing</h4>
                                        <p class="description">
                                            We've created the marketing campaign of the website. It was a very interesting collaboration.
                                        </p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <i class="material-icons">code</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Fully Coded in HTML5</h4>
                                        <p class="description">
                                            We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                                        </p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-info">
                                        <i class="material-icons">group</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Built Audience</h4>
                                        <p class="description">
                                            There is also a Fully Customizable CMS Admin Dashboard for this product.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <form class="form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="card-content">
                                    <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">face</i>
                                                </span>
                                        <input type="text" class="form-control" placeholder="First Name..." name="name" value="{{ old('name') }}" required autofocus>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>
                                        <input type="text" class="form-control" placeholder="Email..." name="email" value="{{ old('email') }}" required>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                    <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                        <input type="password" id="password" placeholder="Password..." class="form-control" name="password" required/>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                        <input type="password" placeholder="Confirm Password..." class="form-control" name="password_confirmation" id="password_confirmation" required equalTo="#password"/>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes" checked> I agree to the
                                            <a href="#">terms and conditions</a>.
                                        </label>
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn btn-primary btn-round">
                                        Get Started
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
