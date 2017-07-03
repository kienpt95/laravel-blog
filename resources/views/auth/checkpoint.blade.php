@extends('auth.layout.app')
@section('title', 'Checkpoint')
@section('page', 'login-page')
@section('ul-nav')
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="{{ route('index') }}">
                <i class="material-icons">dashboard</i> Dashboard
            </a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <form method="POST" action="{{ route('checkpoint_submit') }}">
                        {{ csrf_field() }}
                        <div class="card card-login card-hidden">
                            <div class="card-header text-center" data-background-color="rose">
                                <h4 class="card-title">Two Factor Authentication</h4>
                            </div>
                            <div class="card-content">
                                <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Auth Code</label>
                                        <input type="text" minlength="6" maxlength="6" class="form-control" name="auth_code" required>
                                    </div>
                                </div>
                            </div>
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Auth</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
