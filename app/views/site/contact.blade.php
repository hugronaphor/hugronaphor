@extends('site._partials.base_master')

@section('content')
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

<div class="content">
  <!--        <audio id="bump1" src="audio/pan_1.mp3" preload="none"></audio>-->
  <div class="contact-slogan">we are where you need us to be</div>
  <div class="contact-animation"></div>
</div>

<div class="push"></div>
</div>

<div class="footer">
  <div class="footer-content">
    <div class="f-block-1"><p>CONTACT US</p></div>
    <div class="f-block-2 f-icons">
      <ul>
        <li rel="linked-in"><a href="#"></a></li>
        <li rel="fb"><a href="#"></a></li>
        <li rel="vimeo"><a href="#"></a></li>
        <li rel="twitter"><a href="#"></a></li>
        <li rel="yt"><a href="#"></a></li>
        <li rel="g-plus"><a href="#"></a></li>
      </ul>
    </div>
    <div class="f-block-3 contact-magic"><p>Let's make magic together</p></div>
    <div class="f-block-4 contact-contacts">{{ $vars['footer_contact_text'] }}</div>
    <div class="f-block-4 copywrite"><p>Copywrite 2013 youngers. All rights
        reserved</p></div>
  </div>
</div>

@stop