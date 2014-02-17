<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{ isset($vars['title']) ? $vars['title'] . " | " : ""}} Youngers</title>

    <link rel="icon" type="image/gif" href="/assets/img/base/favicon.png">
    <link rel="image_src" href="/assets/img/base/logo.jpg"/>
    <meta name="description" content="Digital agency">
    <meta name="keywords" content="Design, Web design, Web Development, Video, Art">
    <meta property="og:site_name" content="Youngers"/>
    <meta property="og:type" content="article" />
    <meta property="og:image" content="/assets/img/base/logo.jpg"/>
    <meta property="og:description" content="Youngers is an advertising agency. Our aim is to develop a proper business relationships." />
    
    <meta name="viewport" content="width=device-width">
    {{ HTML::style('assets/css/normalize.css'); }}
    {{ HTML::style('assets/css/style.css'); }}
    <script
    src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.js"></script>
<!--    <script
    src="http://youngers/assets/js/vendor/carouFredSel-6.2.1/jquery-1.8.2.min.js"></script>-->
    
  </head>
  <body>

    <div class="page {{$vars['currentRoute']}}">      
      @if ($vars['currentRoute'] === 'home')
      @include('site._partials.home_top')
      @endif
      <div class="header">
        <div class="base-header">
          @include('site._partials.header')
        </div>

        <div class="brclear"></div>
      </div>

      <div class="content">
        @yield('content')
      </div>
      <div class="push"></div>


      <div class="footer">
        <div class="footer-content">
          @if ($vars['currentRoute'] === 'contact')
          @include('site._partials.footer_contact')
          @else
          @include('site._partials.footer_base')
          @endif
        </div>
        <div class="clearfix"></div>
      </div>
  </body>
</html>