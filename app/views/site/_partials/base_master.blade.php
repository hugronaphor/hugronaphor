<!DOCTYPE html>
  <head>
    <title>Contact|Youngers</title>
    <meta name="viewport" content="width=device-width">
    {{ HTML::style('assets/css/style.css'); }}
  </head>
  <body>
    <div class="page">
      @yield('content')
    </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  {{ HTML::script('assets/js/contact.js'); }}

  </body>
</html>