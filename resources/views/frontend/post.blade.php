@extends('frontend.layouts.app')
@section('title', $post->title)
@section('content')
    <article class="post post-showinfo">
        <div class="post-head small-screen-center">
            <h2 class="post-title"><a href="{{route('post_view', $post->slug)}}">{{$post->title}}</a></h2>
            <small class="post-author"><a href="blog.html">Manos Proistak,</a></small> <small class="post-date"><a href="post.html">12 August 2014</a></small>
            <div class="post-icon flat-shadow flat-hex">
                <div class="hex hex-big"><i class="fa fa-camera"></i></div>
            </div>
        </div>
        <div class="post-body">
            {!! $post->content !!}
        </div>
        <div class="bordered post-extras text-center">
            <div class="text-center"><span class="post-category"><a href="post.html"><i class="fa fa-folder-open"></i> News</a></span> <span class="post-tags"><i class="fa fa-tags"></i> <a href="post.html">Design,</a> <a href="post.html">Flat,</a> <a href="post.html">Dynamics</a></span> <span class="post-link"><a href="post.html"><i class="fa fa-comments"></i> 2 comments</a></span></div>
        </div>
        <div class="post-share text-center">
            <small>Share this post</small>
            <ul class="social-share">
                <li><a data-original-title="Share on twitter" data-toggle="tooltip" href="post.html"><i class="fa fa-twitter"></i></a></li>
                <li><a data-original-title="Share on google-plus" data-toggle="tooltip" href="post.html"><i class="fa fa-google-plus"></i></a></li>
                <li><a data-original-title="Share on facebook" data-toggle="tooltip" href="post.html"><i class="fa fa-facebook"></i></a></li>
                <li><a data-original-title="Share on pinterest" data-toggle="tooltip" href="post.html"><i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div>
    </article>
    <div class="comments padded post-showinfo" id="comments">
        <div class="comments-head small-screen-center">
            <h3>5 comments</h3>
            <small>Join the convertation</small>
            <div class="post-icon flat-hex flat-shadow">
                <div class="hex hex-big"><i class="fa fa-comments"></i></div>
            </div>
        </div>
        <ul class="comments-list comments-body media-list">
            <li class="media media-comment">
                <div class="box-round box-mini pull-left">
                    <div class="box-dummy"></div>
                    <a class="box-inner" href="#"><img alt="" class="media-objects img-circle" src="{{ asset('assets/images/design/people/man-1-300x300.png') }}"></a>
                </div>
                <div class="media-body">
                    <div class="media-inner">
                        <h5 class="media-heading clearfix">John Doe, 12 Sep 2012. <a class="comment-reply pull-right" href="#">reply</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                </div>
            </li>
            <li class="media media-comment">
                <div class="box-round box-mini pull-left">
                    <div class="box-dummy"></div>
                    <a class="box-inner" href="#"><img alt="" class="media-objects img-circle" src="{{ asset('assets/images/design/people/woman-1-300x300.png')}}"></a>
                </div>
                <div class="media-body">
                    <div class="media-inner">
                        <h5 class="media-heading clearfix">Mary Doe, 12 Sep 2012. <a class="comment-reply pull-right" href="#">reply</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                    <div class="media media-comment">
                        <div class="box-round box-mini pull-left">
                            <div class="box-dummy"></div>
                            <a class="box-inner" href="#"><img alt="" class="media-objects img-circle" src="{{ asset('assets/images/design/people/man-2-300x300.png')}}"></a>
                        </div>
                        <div class="media-body">
                            <div class="media-inner">
                                <h5 class="media-heading clearfix">John Langan, 12 Sep 2012. <a class="comment-reply pull-right" href="#">reply</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                            </div>
                            <div class="media media-comment">
                                <div class="box-round box-mini pull-left">
                                    <div class="box-dummy"></div>
                                    <a class="box-inner" href="#"><img alt="" class="media-objects img-circle" src="{{ asset('assets/images/design/people/man-1-300x300.png')}}"></a>
                                </div>
                                <div class="media-body">
                                    <div class="media-inner">
                                        <h5 class="media-heading clearfix">Kid Doe, 12 Sep 2012. <a class="comment-reply pull-right" href="#">reply</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="media media-comment">
                <div class="box-round box-mini pull-left">
                    <div class="box-dummy"></div>
                    <a class="box-inner" href="#"><img alt="" class="media-objects img-circle" src="{{ asset('assets/images/design/people/man-1-300x300.png')}}"></a>
                </div>
                <div class="media-body">
                    <div class="media-inner">
                        <h5 class="media-heading clearfix">Chris Doe, 12 Sep 2012. <a class="comment-reply pull-right" href="#">reply</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="comments-form post-showinfo">
        <div class="comments-head small-screen-center">
            <h3>Join the convertation</h3>
            <small>We would love to hear from you</small>
            <div class="post-icon flat-hex flat-shadow">
                <div class="hex hex-big"><i class="fa fa-comment"></i></div>
            </div>
        </div>
        <form class="comments-body">
            <fieldset>
                <div class="form-group form-icon-group"><input class="form-control" id="name" placeholder="Your name *" type="text"><i class="fa fa-user"></i></div>
                <div class="form-group form-icon-group"><input class="form-control" id="email" placeholder="Your email *" type="text"><i class="fa fa-envelope"></i></div>
                <div class="form-group form-icon-group"><textarea class="form-control" id="message" placeholder="Your message" rows="5"></textarea><i class="fa fa-pencil"></i></div>
                <div class="form-group small-screen-center">
                    <a class="btn btn-primary btn-icon btn-icon-right" type="submit">
                        Add comment
                        <div class="hex-alt"><i class="fa fa-comment"></i></div>
                    </a>
                </div>
            </fieldset>
        </form>
    </div>
@endsection