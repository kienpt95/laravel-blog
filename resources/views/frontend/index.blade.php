@extends('frontend.layouts.app')
@section('title', 'Latest news')
@section('content')
    @foreach($posts as $post)
        <? /** @var App\Post $post */?>
        <article class="post post-showinfo">
        <div class="post-media overlay">
            <a class="feature-image magnific hover-animate" href="assets/images/design/vector/img-7-1200x600.png" title="Thats a nice image">
                <img alt="some image" src="assets/images/design/vector/img-7-1200x600.png">
                <i class="fa fa-search-plus"></i>
            </a>
        </div>
        <div class="post-head small-screen-center">
            <h2 class="post-title"><a href="{{ route('post_view', $post->slug) }}">{{ $post->title }}</a></h2>
            <small class="post-author"><a href="blog.html">John Langan,</a></small>
            <small class="post-date"><a href="post.html">30 April 2014</a></small>
            <div class="post-icon flat-shadow flat-hex">
                <div class="hex hex-big"><i class="fa fa-camera"></i>
                </div>
            </div>
        </div>
        <div class="post-body">
            <p>{{ $post->getExcerpt(40) }}</p>
            <a class="more-link" href="post.html">read more</a>
        </div>
        <div class="bordered post-extras text-center">
            <div class="text-center">
                                    <span class="post-category">
                      <a href="post.html">
                          <i class="fa fa-folder-open"></i>
                          News
                      </a>
                  </span>
                <span class="post-tags">
                      <i class="fa fa-tags"></i>
                      <a href="post.html">Design,</a>
                      <a href="post.html">Flat,</a>
                      <a href="post.html">Dynamics</a>
                  </span>
                <span class="post-link">
                      <a href="post.html">
                          <i class="fa fa-comments"></i>
                          2 comments
                      </a>
                  </span>
            </div>
        </div>
    </article>
    @endforeach
    <div class="text-center post-showinfo">
        <ul class="post-navigation pagination">
            <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a>
            </li>
            <li class="active"><span href="#">1</span>
            </li>
            <li><a href="#">2</a>
            </li>
            <li><a href="#">3</a>
            </li>
            <li><a class="btn btn-primary" href="#"><i class="fa fa-angle-right"></i></a>
            </li>
        </ul>
    </div>
@endsection