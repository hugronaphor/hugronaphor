<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{ isset($vars['title']) ? $vars['title'] . " | " : ""}} Youngers</title>

    <meta name="viewport" content="width=device-width">
    {{ HTML::style('assets/css/normalize.css'); }}
    {{ HTML::style('assets/css/style.css'); }}
    <script
    src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.js"></script>
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