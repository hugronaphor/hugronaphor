<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Apreciate</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="normalize.css">

    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

    <!--Scripts-->
    <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    {{ HTML::script('site/assets/js/menu.js'); }}
    {{ HTML::script('site/assets/js/main.js'); }}

    <!--Styles-->
    {{ HTML::style('site/assets/css/menu.css'); }}
    {{ HTML::style('site/assets/css/main.css'); }}

  </head>
  <body>
    <div id="layout">
      <header>
        @include('site::_partials.navigation')
        <h1><a href="{{ URL::route('home') }}">Appreciate ME</a></h1>


      </header>

      <hr>