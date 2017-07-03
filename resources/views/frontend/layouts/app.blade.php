<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Klog</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicons/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicons/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/favicons/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/favicons/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicons/apple-touch-icon-60x60-precomposed.png') }}">
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color-defaults.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swatch-beige-black.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swatch-black-beige.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swatch-black-white.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swatch-black-yellow.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swatch-blue-white.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swatch-green-white.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swatch-red-white.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swatch-white-black.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swatch-white-blue.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swatch-white-green.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swatch-white-red.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swatch-yellow-black.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.min.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/css/demo.min.css') }}">
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
            <a href="{{route('index')}}" class="navbar-brand">
                <img src="{{ asset('assets/images/logo.png') }}">Klog
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
                    @yield('content')
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
<script src="{{ asset('assets/js/packages.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.min.js') }}"></script>
<script src="{{ asset('assets/js/switcher.min.js') }}"></script>
</body>

</html>