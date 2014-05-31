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
    <link rel="image_src" href="/assets/img/base/youngers-social-image.jpg"/>
    <meta name="description" content="{{ trans('base_site.fb_meta_description') }}">
    <meta name="keywords" content="Design, Web design, Web Development, Video, Art">
    <meta property="og:site_name" content="Youngers"/>
    <meta property="og:type" content="article" />
    <meta property="og:image" content="/assets/img/base/youngers-social-image.jpg"/>
    <meta property="og:description" content="{{ trans('base_site.fb_meta_description') }}" />

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
      <script>
(function(i, s, o, g, r, a, m) {
  i['GoogleAnalyticsObject'] = r;
  i[r] = i[r] || function() {
    (i[r].q = i[r].q || []).push(arguments)
  }, i[r].l = 1 * new Date();
  a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
  a.async = 1;
  a.src = g;
  m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-51522280-1', 'creativeyoungers.com');
ga('send', 'pageview');

      </script>
  </body>
</html>