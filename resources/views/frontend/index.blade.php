@extends('frontend.layouts.app')
@section('title', 'Latest news')
@section('content')
    @foreach($posts as $post)
        <? /** @var App\Post $post */?>
        <article class="post post-showinfo">
        <div class="post-media overlay">
            <a class="feature-image" href="{{ route('post_view', $post->slug) }}" title="{{$post->title}}">
                <img alt="{{$post->title}}" src="{{ $post->getThumbImage() }}">
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
            <a class="more-link" href="{{ route('post_view', $post->slug) }}">read more</a>
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
                    @foreach($post->tags as $tag)
                        <i class="fa fa-tags"></i>
                        <a href="{{ route('tag_link',$tag->slug) }}">{{$tag->title}},</a>
                    @endforeach
                  </span>
                <span class="post-link">
                      <a href="{{ route('post_view', $post->slug) }}">
                          <i class="fa fa-comments"></i>
                          2 comments
                      </a>
                  </span>
            </div>
        </div>
    </article>
    @endforeach
    <div class="text-center post-showinfo">
        {{ $posts->links() }}
    </div>
@endsection