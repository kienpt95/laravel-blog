<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Klog</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicons/favicon.ico">
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicons/apple-touch-icon-60x60-precomposed.png">
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/theme.min.css">
    <link rel="stylesheet" href="assets/css/color-defaults.min.css">
    <link rel="stylesheet" href="assets/css/swatch-beige-black.min.css">
    <link rel="stylesheet" href="assets/css/swatch-black-beige.min.css">
    <link rel="stylesheet" href="assets/css/swatch-black-white.min.css">
    <link rel="stylesheet" href="assets/css/swatch-black-yellow.min.css">
    <link rel="stylesheet" href="assets/css/swatch-blue-white.min.css">
    <link rel="stylesheet" href="assets/css/swatch-green-white.min.css">
    <link rel="stylesheet" href="assets/css/swatch-red-white.min.css">
    <link rel="stylesheet" href="assets/css/swatch-white-black.min.css">
    <link rel="stylesheet" href="assets/css/swatch-white-blue.min.css">
    <link rel="stylesheet" href="assets/css/swatch-white-green.min.css">
    <link rel="stylesheet" href="assets/css/swatch-white-red.min.css">
    <link rel="stylesheet" href="assets/css/swatch-yellow-black.min.css">
    <link rel="stylesheet" href="assets/css/fonts.min.css" media="screen">
    <link rel="stylesheet" href="assets/css/demo.min.css">
</head>

<body>
<header id="masthead" class="navbar navbar-sticky swatch-red-white" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index-2.html" class="navbar-brand">
                <img src="assets/images/logo.png">Klog
            </a>
        </div>
        <nav class="collapse navbar-collapse main-navbar" role="navigation">
            <div class="sidebar-widget widget_search pull-right">
                <form>
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search here...."><span class="input-group-btn"><button class="btn" type="submit"><i
                                        class="fa fa-search"></i></button></span>
                    </div>
                </form>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                @if (Auth::guest())
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Hi, {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @if(Auth::user()->is_admin)
                        <li>
                            <a href="{{route('admin_dashboard')}}">Admin Dashboard</a>
                        </li>
                    @endif
                @endif
            </ul>
        </nav>
    </div>
</header>
<div id="content" role="main">
    <section class="section swatch-red-white">
        <div class="container">
            <header class="section-header no-underline">
                <h1 class="headline hyper hairline">@yield('title')</h1>
            </header>
        </div>
    </section>
    <section class="section swatch-white-red has-top">
        <div class="decor-top">
            <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0 L50 100 L100 0 L100 100 L0 100" stroke-width="0"></path>
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <article class="post post-showinfo">
                        <div class="post-media overlay">
                            <a class="feature-image magnific hover-animate" href="assets/images/design/vector/img-7-1200x600.png" title="Thats a nice image">
                                <img alt="some image" src="assets/images/design/vector/img-7-1200x600.png">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="post-head small-screen-center">
                            <h2 class="post-title"><a href="post.html">This theme is so nice!</a></h2>
                            <small class="post-author"><a href="blog.html">John Langan,</a></small>
                            <small class="post-date"><a href="post.html">30 April 2014</a></small>
                            <div class="post-icon flat-shadow flat-hex">
                                <div class="hex hex-big"><i class="fa fa-camera"></i>
                                </div>
                            </div>
                        </div>
                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, quo, veniam culpa maiores iure distinctio atque similique veritatis rem et adipisci eveniet aspernatur aut sapiente amet doloremque eos quasi numquam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, quo, veniam culpa maiores iure distinctio atque similique veritatis rem et adipisci eveniet aspernatur aut sapiente amet doloremque eos quasi numquam.
                            </p><a class="more-link" href="post.html">read more</a>
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
                    <article class="post post-showinfo">
                        <div class="post-head small-screen-center no-title">
                            <div class="post-icon flat-shadow flat-hex">
                                <div class="hex hex-big"><i class="fa fa-quote-left"></i>
                                </div>
                            </div>
                        </div>
                        <div class="post-body">
                            <blockquote>
                                <p>Donec accumsan commodo vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sit amet dolor ac sapien elementum dignissim sed at purus. Phasellus imperdiet non arcu in pulvinar. Aliquam sit amet justo vel purus eleifend consequat vitae nec felis. Vestibulum pretium, est ut mattis aliquam, lorem nisi semper augue, in malesuada est velit eu mauris.</p>
                                <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                            </blockquote>
                        </div>
                        <div class="post-extras bordered padded-huge text-center"></div>
                    </article>
                    <article class="post post-showinfo">
                        <div class="post-media overlay">
                            <div id="slider-flex7" class="flexslider text-left" data-flex-speed="7000" data-flex-animation="slide" data-flex-controls="hide" data-flex-directions="show" data-flex-controlsalign="center" data-flex-captionhorizontal="alternate" data-flex-captionvertical="bottom" data-flex-controlsposition="" data-flex-directions-type="">
                                <ul class="slides">
                                    <li><img src="assets/images/design/vector/img-3-1200x600.png" alt="some image">
                                    </li>
                                    <li><img src="assets/images/design/vector/img-4-1200x600.png" alt="some image">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-head small-screen-center">
                            <h2 class="post-title"><a href="post.html">It is cool &amp; responsive</a></h2>
                            <small class="post-author"><a href="blog.html">Dimitrios Pantazis,</a></small>
                            <small class="post-date"><a href="post.html">15 May 2014</a></small>
                            <div class="post-icon flat-shadow flat-hex">
                                <div class="hex hex-big"><i class="fa fa-picture-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, quo, veniam culpa maiores iure distinctio atque similique veritatis rem et adipisci eveniet aspernatur aut sapiente amet doloremque eos quasi numquam.Donec accumsan commodo vehicula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sit amet dolor ac sapien elementum dignissim sed at purus. Phasellus imperdiet non arcu in pulvinar. Aliquam sit amet justo vel purus eleifend consequat vitae nec felis. Vestibulum pretium, est ut mattis aliquam, lorem nisi semper augue, in malesuada est velit eu mauris.</p><a class="more-link" href="post.html">read more</a>
                        </div>
                        <div class="bordered post-extras text-center">
                            <div class="text-center"><span class="post-category"><a href="post.html"><i
                                                class="fa fa-folder-open"></i> Updates</a></span> <span class="post-tags"><i class="fa fa-tags"></i> <a href="post.html">Design</a> <a
                                            href="post.html">Flat</a> <a href="post.html">Minimal</a> <a
                                            href="post.html">Dynamics</a></span> <span class="post-link"><a
                                            href="post.html"><i class="fa fa-comments"></i> 1 comments</a></span>
                            </div>
                        </div>
                    </article>
                    <article class="post post-showinfo">
                        <div class="post-media swatch-white-red">
                            <audio controls="" preload="auto" style="width:100%">
                                <source src="http://theme-background-videos.s3.amazonaws.com/audio/audio.wav"></source>
                                <source src="http://theme-background-videos.s3.amazonaws.com/audio/audio.mp3"></source>
                                <source src="http://theme-background-videos.s3.amazonaws.com/audio/audio.ogg"></source>
                            </audio>
                        </div>
                        <div class="post-head text-center">
                            <h2 class="post-title"><a href="post.html">Sounds even better!</a></h2>
                            <small class="post-author"><a href="blog.html">Harry Doe,</a></small>
                            <small class="post-date"><a href="post.html">5 August 2014</a></small>
                            <div class="post-icon flat-shadow flat-hex">
                                <div class="hex hex-big"><i class="fa fa-volume-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="post-body">
                            <p>Cras aliquet felis in magna accumsan, sit amet mattis arcu auctor. Nunc sollicitudin auctor adipiscing. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam lacus ante, egestas id pellentesque vel, tempus at justo. Donec luctus, dolor ut scelerisque luctus, erat elit consectetur arcu, eu pellentesque felis nulla sed massa. Nunc enim sem, ullamcorper ac tincidunt eget, euismod nec leo. Nunc imperdiet fringilla erat, sit amet iaculis ipsum congue et. Vestibulum sapien metus.
                            </p>
                        </div>
                        <div class="bordered post-extras text-center">
                            <div class="text-center"><span class="post-category"><a href="post.html"><i
                                                class="fa fa-folder-open"></i> News</a></span> <span class="post-tags"><i class="fa fa-tags"></i> <a href="post.html">Design,</a> <a
                                            href="post.html">Flat</a></span> <span class="post-link"><a
                                            href="post.html"><i class="fa fa-comments"></i> 4 comments</a></span>
                            </div>
                        </div>
                    </article>
                    <article class="post post-showinfo">
                        <div class="post-media overlay">
                            <a class="feature-image magnific-youtube hover-animate" href="http://www.youtube.com/watch?v=cfOa1a8hYP8" title=""><img alt="" src="assets/images/design/vector/img-2-1200x600.png">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <div class="post-head small-screen-center">
                            <h2 class="post-title"><a href="post.html">Everybody loves it</a></h2>
                            <small class="post-author"><a href="blog.html">Chris Pantazis,</a></small>
                            <small class="post-date"><a href="post.html">17 January 2014</a></small>
                            <div class="post-icon flat-shadow flat-hex">
                                <div class="hex hex-big"><i class="fa fa-film"></i>
                                </div>
                            </div>
                        </div>
                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, quo, veniam culpa maiores iure distinctio atque similique veritatis rem et adipisci eveniet aspernatur aut sapiente amet doloremque eos quasi numquam.In lobortis eget ipsum vestibulum tristique. Donec luctus, dolor ut scelerisque luctus, erat elit consectetur arcu, eu pellentesque felis nulla sed massa. Nunc enim sem, ullamcorper ac tincidunt eget, euismod nec leo. Nunc imperdiet fringilla erat, sit amet iaculis ipsum congue et. Vestibulum sapien metus, fermentum et accumsan nec, imperdiet sed ligula. Praesent semper vitae nisi quis egestas.
                            </p><a class="more-link" href="post.html">read more</a>
                        </div>
                        <div class="bordered post-extras text-center">
                            <div class="text-center"><span class="post-category"><a href="post.html"><i
                                                class="fa fa-folder-open"></i> Flat world</a></span> <span class="post-tags"><i class="fa fa-tags"></i> <a href="post.html">Design,</a> <a
                                            href="post.html">Dynamics</a></span> <span class="post-link"><a
                                            href="post.html"><i class="fa fa-comments"></i> 2 comments</a></span>
                            </div>
                        </div>
                    </article>
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
                </div>
                <aside class="col-md-3 sidebar">
                    <div class="sidebar-widget widget_search">
                        <form>
                            <div class="input-group">
                                <input class="form-control" placeholder="search" type="text"><span class="input-group-btn"><button class="btn" type="submit"><i
                                                class="fa fa-search"></i></button></span>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-widget widget_categories">
                        <h3 class="sidebar-header">Categories</h3>
                        <ul>
                            <li><a href="#">Company</a>
                            </li>
                            <li><a href="#">News</a>
                            </li>
                            <li><a href="#">Services</a>
                            </li>
                            <li><a href="#">Web Design</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget widget_tag_cloud">
                        <h3 class="sidebar-header">Popular Tags</h3>
                        <ul>
                            <li><a href="post.html"><span>Mountains</span></a>
                            </li>
                            <li><a href="post.html"><span>Winter</span></a>
                            </li>
                            <li><a href="post.html"><span>Sports</span></a>
                            </li>
                            <li><a href="post.html"><span>Boating</span></a>
                            </li>
                            <li><a href="post.html"><span>Recreation</span></a>
                            </li>
                            <li><a href="post.html"><span>Tourism</span></a>
                            </li>
                            <li><a href="post.html"><span>Nature</span></a>
                            </li>
                            <li><a href="post.html"><span>Alps</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget widget_recent_entries">
                        <h3 class="sidebar-header">Recent posts</h3>
                        <ul>
                            <li>
                                <div class="post-icon"><i class="fa fa-file-text"></i>
                                </div>
                                <a href="post.html">Nunc vehicula dapibus</a>
                                <small>12 Feb 2013</small>
                            </li>
                            <li>
                                <div class="post-icon"><i class="fa fa-camera"></i>
                                </div>
                                <a href="post.html">Fusce a metus eu diam</a>
                                <small>21 Jan 2013</small>
                            </li>
                            <li>
                                <div class="post-icon"><i class="fa fa-file-text"></i>
                                </div>
                                <a href="post.html">Quisque lacus augue</a>
                                <small>13 dec 2012</small>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget widget_archive">
                        <h3 class="sidebar-header">Archive</h3>
                        <ul>
                            <li><a href="#">January</a> (12)</li>
                            <li><a href="#">December</a> (7)</li>
                            <li><a href="#">October</a> (4)</li>
                            <li><a href="#">September</a> (9)</li>
                            <li><a href="#">August</a> (13)</li>
                        </ul>
                    </div>
                    <div class="sidebar-widget widget_oxy_twitter">
                        <h3 class="sidebar-header">Twitter feed</h3>
                        <ul>
                            <li>RT @<a href="http://twitter.com/maguay">maguay</a>: Making a new @ <a href="http://twitter.com/TryGhost">TryGhost</a> theme? @ <a href="http://twitter.com/Envato">Envato</a> and @ <a href="http://twitter.com/ThemeForest">ThemeForest</a> have doubled their bounty for great new themes: <a href="http://t.co/MqpDozDevG" rel="nofollow">http://t.co/MqpDozDevG</a>
                                <small class="block text-italic">1&nbsp;day&nbsp;ago</small>
                            </li>
                            <li>RT @<a href="http://twitter.com/maguay">maguay</a>: Making a new @ <a href="http://twitter.com/TryGhost">TryGhost</a> theme? @ <a href="http://twitter.com/Envato">Envato</a> and @ <a href="http://twitter.com/ThemeForest">ThemeForest</a> have doubled their bounty for great new themes: <a href="http://t.co/MqpDozDevG" rel="nofollow">http://t.co/MqpDozDevG</a>
                                <small class="block text-italic">1&nbsp;day&nbsp;ago</small>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget widget_text">
                        <h3 class="sidebar-header">About us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, voluptatem, delectus, dolor cupiditate consequatur hic at sapiente minima alias consectetur maxime repudiandae recusandae ratione enim nesciunt! Nemo, quisquam veniam perspiciatis.</p>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <footer id="footer" role="contentinfo">
        <section class="section swatch-red-white has-top">
            <div class="decor-top">
                <svg class="decor" height="100%" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0 L50 100 L100 0 L100 100 L0 100" stroke-width="0"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div id="swatch_social-2" class="sidebar-widget widget_swatch_social">
                            <ul class="unstyled inline small-screen-center social-icons social-background social-big">
                                <li><a target="_blank" href="http://www.oxygenna.com/"><i
                                                class="fa fa-facebook"></i></a>
                                </li>
                                <li><a target="_blank" href="http://www.oxygenna.com/"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a target="_blank" href="http://www.oxygenna.com/"><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div id="text-4" class="sidebar-widget widget_text">
                            <div class="textwidget">ANGLE 2014 ALL RIGHTS RESERVED</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</div>
<a class="go-top hex-alt" href="javascript:void(0)"><i class="fa fa-angle-up"></i></a>
<div id="style-switcher">
    <svg class="switcher-svg top" height="20px" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0 L100 100 L0 100" stroke-width="0"></path>
    </svg>
    <div class="switcher-inner text-center">
        <button class="btn btn-switcher" role="menu"><i class="fa fa-cog"></i>
        </button>
        <h4><span>Sample Colors</span></h4>
        <ul class="theme-colors">
            <li><a class="colour-switch swatch-green-white" data-swatch="swatch-green-white" data-swatch-inverse="swatch-white-green">Green</a>
            </li>
            <li><a class="colour-switch swatch-blue-white" data-swatch="swatch-blue-white" data-swatch-inverse="swatch-white-blue">Blue</a>
            </li>
            <li><a class="colour-switch swatch-black-beige" data-swatch="swatch-black-beige" data-swatch-inverse="swatch-beige-black">Black</a>
            </li>
            <li><a class="colour-switch swatch-black-yellow" data-swatch="swatch-black-yellow" data-swatch-inverse="swatch-yellow-black">Yellow</a>
            </li>
            <li><a class="colour-switch swatch-red-white" data-swatch="swatch-red-white" data-swatch-inverse="swatch-white-red">Red</a>
            </li>
            <li><a class="colour-switch swatch-black-white" data-swatch="swatch-black-white" data-swatch-inverse="swatch-white-black">White</a>
            </li>
        </ul>
        <p>you can create unlimited colour variations using the <strong>Swatch color editor</strong>
        </p>
        <h4 class="margin-top"><span>Layout</span></h4>
        <ul class="theme-layout">
            <li><a class="layout-switch normal-layout" data-layout="layout-normal">Normal</a>
            </li>
            <li><a class="layout-switch boxed-layout" data-layout="layout-boxed">Boxed</a>
            </li>
            <li></li>
        </ul>
    </div>
    <svg class="switcher-svg bottom" height="20px" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 100 L100 0 L0 0" stroke-width="0"></path>
    </svg>
</div>
<script src="assets/js/packages.min.js"></script>
<script src="assets/js/theme.min.js"></script>
<script src="assets/js/switcher.min.js"></script>
</body>

</html>