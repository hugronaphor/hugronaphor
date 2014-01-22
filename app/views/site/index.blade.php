@extends('site._partials.base_master')

@section('content')

<div id="fb-root"></div>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=267508126605808";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<div class="home-art-block">


  <div class="home-first-text-piece">
    <p>DESIGN IS IMPORTANT</p>

    <p>BECAUSE CHAOS IS SO HARD</p>
  </div>

  <div class="home-art-block-img"></div>

  <div class="home-find-more-about">
    <p>MORE ABOUT</p>
    <ul>
      <li><a href="">illustration</a></li>
      <li><a href="">branding</a></li>
      <li><a href="">print design</a></li>
    </ul>
  </div>

  <div class="home-about-facts">
    <p class="about-facts-title">TREMENDOUS FACTS ABOUT US</p>
    <ul>
      <li class="project-n" data-count="7">
        <p>0</p>

        <p>Under Construction <br/> Projects</p>
      </li>
      <li class="coffe-n" data-count="895"><p>0</p>

        <p>Cups of Coffe</p></li>
      <li class="fb-n" data-count="87687"><p>0</p>

        <p>Minutes on Facebook</p></li>
      <li class="client-n" data-count="987987"><p>0</p>

        <p>Clients</p></li>
    </ul>
    <div class="brclear"></div>
  </div>
</div>
<!--<div class="push-for-menu"></div>-->
<div class="home-video-block">


  <!--    <img src="http://lorempixel.com/600/200/"/>-->

  <!--    <video src="/assets/video/test_2.mp4" width="600" height="400" scale="aspect" controller="false">vkmf</video>-->

  <div class="h-video-wrapp">

    <!--      poster="/assets/img/base/logo.png"-->

    <video class="" id="video_background" preload muted loop autoplay>
      <!-- autoplay> -->
      <!--      <source src="movie.ogg" type="video/ogg">-->
      <source src="{{asset('/assets/video/test_2.mp4')}}" type="video/mp4">
      <!--      <object data="movie.mp4" width="100%" height="240">-->
      <!--        <embed width="320" height="240" src="movie.swf">-->
      <!--      </object>-->
    </video>

    <div class="h-video-on-video">
      <div class="h-video-centered-content">
        <h3 style="text-align: center;font-size:40px;">WE MAKE THINGS TO MOVE</h3>

        <p style="text-align: center;font-size:16px;">Design and production of interactive videos and motion graphics,</p>

        <p style="text-align: center;font-size:16px;">tailored to bring your brand messaging to life.</p>

        {{ HTML::link(URL::route('movie'), 'more', array(
          'title' => 'more about Movie',
          'class'=>'go-to-movie',
          'style'=>'font-size:35px;',
        )) }}
      </div>

    </div>

  </div>

  <div class="video-our-culture">
    <div class="h-culture-centered relative">
      <p>OUR CULTURE</p>
      <p>WRITE THE BOOK YOU WANT TO READ</p>
    </div>
  </div>
  <div class="brclear"></div>

</div>
<!--<div class="push-for-menu"></div>-->
<div class="home-web-block">
  <p>We are building the WEB</p>

  <ul>
    <li>{{ HTML::link(URL::route('web'), 'web design', array('title' => 'more about Movie')) }}</li>
<!--    <li><a href="/">development</a></li>-->
<!--    <li><a href="/">responsive</a></li>-->
  </ul>
  <div class="brclear"></div>
</div>

{{ HTML::script('assets/js/home.js'); }}

@stop