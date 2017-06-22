@extends('admin.layout.app')

@section('title', 'Post Manager')
@section('nav-bar')
    <ul class="nav">
        <li>
            <a href="{{ route('admin_dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="active">
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
    <div class="col-md-3 col-md-offset-11">
        <a href="{{ route('admin_post_create') }}" class="btn btn-primary btn-round btn-fab btn-fab-mini">
            <i class="material-icons">add</i>
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">forum</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Posts data</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th class="text-right">Created at</th>
                                <th class="text-right">Updated at</th>
                                <th class="text-right">Publish</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if( isset($posts))
                                @foreach($posts as $post)
                                    <tr id="tr_{{$post->id}}">
                                        <td class="text-center">{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->content}}</td>
                                        <td class="text-right">{{$post->created_at}}</td>
                                        <td class="text-right">{{$post->updated_at}}</td>
                                        <td class="td-actions text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" @if($post->is_public) checked @endif onchange="app.publicPost({{$post->id}})">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple" onclick="app.removePost({{$post->id}})">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection