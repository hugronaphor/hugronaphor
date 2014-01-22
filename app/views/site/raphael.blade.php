@extends('site._partials.base_master')

@section('content')
<div class="how-we-work-page">
  <div class="header">
    <div class="logo-header">
      <div class="logo-img-wrapper">{{ HTML::Image('assets/img/logo.png', 'YOUNGERS') }}
      </div>
    </div>
    <div class="nav-wrapper">

      <div id="base-navigation">
        <ul>
          <li><a rel="art" href="#">ART</a></li>
          <li><a rel="movie" href="#">MOVIE</a></li>
          <li><a rel="web" href="#">WEB</a></li>
          <li><a rel="contact" href="#">CONTACT</a></li>
        </ul>
        <div class="brclear"></div>
      </div>
      <div class="brclear"></div>
    </div>
    <div class="brclear"></div>
  </div>

  <style type="text/css">  
    #kiwi {  
      /*width: 500px;*/  
      border: 1px solid #aaa; 
      min-height: 250px;
      width: 900px;
      margin: 0 auto;
    }  
  </style>  


  <div class="content">
    <div class="contact-slogan">write what you know</div>
    <div id="kiwi"></div>
    <div class="lazy-animation-nav"><ul></ul></div>
  </div>

  <div class="push"></div>

</div>
{{ HTML::script('assets/js/lazy-line-painter/vendor/raphael-min.js'); }}
{{ HTML::script('assets/js/lazy-line-painter/jquery.lazylinepainter-1.4.1.js'); }}
{{ HTML::script('assets/js/raphael.js'); }}

@stop