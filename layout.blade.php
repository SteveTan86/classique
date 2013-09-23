<!DOCTYPE html>
<!--============================================================
 *    ____                  __                     __          __
 *   / __ \_   _____  _____/ /___  __________     / /   ____ _/ /_  _____
 *  / / / / | / / _ \/ ___/ __/ / / / ___/ _ \   / /   / __ `/ __ \/ ___/
 * / /_/ /| |/ /  __/ /  / /_/ /_/ / /  /  __/  / /___/ /_/ / /_/ (__  )
 * \____/ |___/\___/_/   \__/\__,_/_/   \___/  /_____/\__,_/_.___/____/
 *
 *    _____ __                    ______
 *   / ___// /____ _   _____     /_  __/___ _____
 *   \__ \/ __/ _ \ | / / _ \     / / / __ `/ __ \
 *  ___/ / /_/  __/ |/ /  __/    / / / /_/ / / / /
 * /____/\__/\___/|___/\___/    /_/  \__,_/_/ /_/
 *
 * http://overturelabs.com
 * contactus@overturelabs.com
 ============================================================-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en" ><!--<![endif]-->
  <head>
    <!--============================================================
     *  Meta data goodness!
     ============================================================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
    {{-- @todo Figure out a way to get post object to pass us a SEO description --}}
    <!-- <meta name="description" content=""> -->

    <!--============================================================
     *  Facebook
     ============================================================-->
    <meta property="fb:app_id" content="425937027510514" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="@yield('url')" />
    <meta property="og:image" content="{{ asset(theme_path('img/profile.png')) }}" />
    <meta property="og:title" content="@yield('title')" />
    {{-- @todo Figure out a way to get post object to pass us a SEO description --}}
    <!-- <meta property="og:description" content=""/> -->

    <!--============================================================
     *  Google+
     ============================================================-->
    <link rel="author" href="https://plus.google.com/112925121377826190761"/>

    <!--============================================================
     *  Favicon Madness!
     ============================================================-->
    <!-- For iPad with high-resolution Retina display running iOS ≥ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset(theme_path('img/favicons/apple-touch-icon-152x152-precomposed.png')) }}">
    <!-- For iPad with high-resolution Retina display running iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset(theme_path('img/favicons/apple-touch-icon-144x144-precomposed.png')) }}">
    <!-- For iPhone with high-resolution Retina display running iOS ≥ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset(theme_path('img/favicons/apple-touch-icon-120x120-precomposed.png')) }}">
    <!-- For iPhone with high-resolution Retina display running iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset(theme_path('img/favicons/apple-touch-icon-114x114-precomposed.png')) }}">
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset(theme_path('img/favicons/apple-touch-icon-72x72-precomposed.png')) }}">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset(theme_path('img/favicons/apple-touch-icon-57x57-precomposed.png')) }}">
    <!--[if IE]><link rel="shortcut icon" href="{{ asset(theme_path('img/favicons/favicon.ico')) }}"><![endif]-->
    <!-- or, set /favicon.ico for IE10 win -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset(theme_path('img/favicons/apple-touch-icon-144x144-precomposed.png')) }}">

    <!--============================================================
     *  A dash of style!
     ============================================================-->
    <link href="{{ asset(theme_path('css/style.css')) }}" rel="stylesheet">
    <script src="{{ asset(theme_path('js/vendor/custom.modernizr.js')) }}"></script>

    <!--============================================================
     *  Google Analytics
     ============================================================-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-44222156-2', 'stevetan.me');
      ga('send', 'pageview');
    </script>

  </head>
  <body>

    {{-- Header --}}
    <header class="row">
      <div class="profile" style="background-image: url({{ asset(theme_path('img/profile.png')) }})">
      </div>
      <h1 class="site-title"><a href="{{ Wardrobe::route('/') }}">{{ site_title() }}</a></h1>
      <nav class="nav-bar small-12 small-offset-0 large-8 large-offset-2 column">
        <ul class="row">
          <li class="small-4 large-4 columns"><a href="{{ Wardrobe::route('posts.archive') }}">Posts</a></li>
          <li class="small-4 large-4 columns"><a href="{{ Wardrobe::route('about') }}">About</a></li>
          <li class="small-4 large-4 columns"><a href="{{ Wardrobe::route('posts.rss') }}">RSS</a></li>
        </ul>
      </nav>
      <!-- End of top bar -->
    </header>

    {{-- Content --}}
    <div class="row">
      <div class="content small-12 small-offset-0 large-8 large-offset-2 column">
        @yield('content')
      </div>
    </div>

    {{-- Footer --}}
    <footer class="row">
      <p class="small-12 small-offset-0 large-8 large-offset-2 column">Powered by <a href="http://wardrobecms.com">Wardrobe</a>&nbsp;,&nbsp;&copy; 2013 Steve Tan. All Rights Reserved.</p>
    </footer>

    @section('js')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ asset(theme_path('js/foundation/foundation.min.js')) }}"></script>
    <script src="{{ asset(theme_path('js/foundation/foundation.topbar.min.js')) }}"></script>
    <script>
      $(document).foundation();
    </script>
    @show
  </body>
</html>
