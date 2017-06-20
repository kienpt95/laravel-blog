@extends('admin.layout.app')

@section('title', 'Dashboard')
@section('nav-bar')
    <ul class="nav">
        <li class="active">
            <a href="{{ route('admin_dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li>
            <a href="{{ route('admin_post') }}">
                <i class="material-icons">forum</i>
                <p>Posts</p>
            </a>
        </li>
        <li>
            <a href="{{ route('admin_post') }}">
                <i class="material-icons">local_offer</i>
                <p>Tags</p>
            </a>
        </li>

        <li>
            <a data-toggle="collapse" href="http://blog.laravel.local/#config">
                <i class="material-icons">settings</i>
                <p>Config
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="config">
                <ul class="nav">
                    <li>
                        <a href="#">Pricing</a>
                    </li>
                    <li>
                        <a href="#">Timeline</a>
                    </li>
                    <li>
                        <a href="#">Login Page</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="orange">
                    <i class="material-icons">forum</i>
                </div>
                <div class="card-content">
                    <p class="category">Posts</p>
                    <h3 class="card-title">184</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="rose">
                    <i class="material-icons">local_offer</i>
                </div>
                <div class="card-content">
                    <p class="category">Tags</p>
                    <h3 class="card-title">4,245</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="green">
                    <i class="material-icons">equalizer</i>
                </div>
                <div class="card-content">
                    <p class="category">Website Visits</p>
                    <h3 class="card-title">75.521</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">local_offer</i> Tracked from Google Analytics
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="blue">
                    <i class="fa fa-twitter"></i>
                </div>
                <div class="card-content">
                    <p class="category">Followers</p>
                    <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">update</i> Just Updated
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection