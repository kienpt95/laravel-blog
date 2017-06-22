@extends('admin.post')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">forum</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Edit post {{$post->title}}</h4>
                    <form class="form-horizontal" method="POST" action="{{route('admin_post_store')}}">
                        {{ csrf_field() }}
                        <input type="hidden" class="form-control" name="id" value="{{$post->id}}">
                        <div class="row">
                            <label class="col-md-1 label-on-left">Id</label>
                            <div class="col-md-11">
                                <div class="form-group togglebutton">
                                    <label>
                                        <input type="text" class="form-control" value="{{$post->id}}" disabled>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 label-on-left">Public</label>
                            <div class="col-md-11">
                                <div class="form-group togglebutton">
                                    <label>
                                        <input type="checkbox" @if($post->is_public) checked @endif name="public">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 label-on-left">Title</label>
                            <div class="col-md-11">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" name="title" value="{{$post->title}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 label-on-left">Slug</label>
                            <div class="col-md-11">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" name="slug" value="{{$post->slug}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 label-on-left">Content</label>
                            <div class="col-md-11">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <textarea class="form-control" name="content">{{$post->content}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 label-on-left">Tags</label>
                            <div class="col-md-11">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <select multiple data-role="tagsinput" name="tags[]" id="tagsinput">
                                        @foreach($tags as $tag)
                                            <option selected="" value="{{$tag->title}}">{{$tag->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-10"></label>
                            <div class="col-md-1">
                                <div class="form-group form-button">
                                    <button type="submit" class="btn btn-fill btn-rose">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
