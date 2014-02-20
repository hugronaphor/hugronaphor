@extends('site._partials.base_master')

@section('content')

<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
      return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=267508126605808";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<div class="home-art-block">

  <div class="home-first-text-piece">
    {{ trans('base_site.home_first_text_piece') }}
  </div>

  <div class="home-art-block-img">
    {{ trans('base_site.home_art_text_1') }}
  </div>

  <div class="home-find-more-about">
    <p>{{ trans('base_site.home_art_text_2') }}</p>
    <ul>
      <li><a href="{{ URL::route('art') }}">{{ trans('base_site.home_art_text_3') }}</a></li>
      <li><a href="{{ URL::route('art') }}">{{ trans('base_site.home_art_text_4') }}</a></li>
      <li><a href="{{ URL::route('art') }}">{{ trans('base_site.home_art_text_5') }}</a></li>
    </ul>
  </div>

  <div class="home-about-facts">
    <p class="about-facts-title">{{ trans('base_site.home_movie_1') }}</p>
    <div class="facts-nr">
      <ul>
        <li class="project-n" data-count="7">
          <p>0</p>

          <p>{{ trans('base_site.home_movie_2') }}</p>
        </li>
        <li class="coffe-n" data-count="895"><p>0</p>

          <p>{{ trans('base_site.home_movie_3') }}</p></li>
        <li class="fb-n" data-count="6578"><p>0</p>

          <p>{{ trans('base_site.home_movie_4') }}</p></li>

        <li class="client-n" data-count="12"><p>0</p>

          <p>{{ trans('base_site.home_movie_5') }}</p></li>
      </ul>
    </div>
    <div class="brclear"></div>
  </div>
</div>
<!--<div class="push-for-menu"></div>-->
<div class="home-video-block">


  <!--    <img src="http://lorempixel.com/600/200/"/>-->

  <!--    <video src="/assets/video/test_2.mp4" width="600" height="400" scale="aspect" controller="false">vkmf</video>-->

  <div class="h-video-wrapp">

    <!--      poster="/assets/img/base/logo.png"-->

    <video id="video_background" autoplay preload muted loop>
      <!-- autoplay> -->
      <source src="{{asset('/assets/video/move_things.mp4')}}" type="video/mp4">
      <source src="{{asset('/assets/video/move_things.ogg')}}" type="video/ogg">
      Your browser does not support the video tag.
      <!--      <object data="movie.mp4" width="100%" height="240">-->
      <!--        <embed width="320" height="240" src="movie.swf">-->
      <!--      </object>-->
    </video>

    <div class="h-video-on-video">
      <div class="h-video-centered-content valign">
        <p class="hvvt1" style="text-align: center;font-size:38px;margin-bottom: 10px;">{{ trans('base_site.home_movie_6') }}</p>

        <p class="hvvt2" style="text-align: center;font-size:17px;">{{ trans('base_site.home_movie_7') }}</p>

        <p class="hvvt3" style="text-align: center;font-size:17px;">{{ trans('base_site.home_movie_8') }}</p>

        {{ HTML::link(URL::route('movie'), trans('base_site.home_movie_11'), array(
          'title' => 'more about Movie',
          'class'=>'go-to-movie',
          'style'=>'',
        )) }}
      </div>

    </div>

  </div>

  <div class="video-our-culture">
    <div class="h-culture-centered relative valign">
      <p>{{ trans('base_site.home_movie_9') }}</p>
      <p>{{ trans('base_site.home_movie_10') }}</p>
    </div>
  </div>
  <div class="brclear"></div>

</div>

<div class="home-web-block">
  <p class="h-w-first-piece">{{ trans('base_site.home_web_1') }}</p>

  <div class="home-web-block-middle">
    <div class="h-w-b-m-first"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p></div>
    <div class="h-w-b-m-middle">{{ HTML::Image('assets/img/base/phone.jpg', 'WEB', array('class'=>'h-web-image')) }}</div>
    <div class="h-w-b-m-last"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
    <div class="clearfix"></div>

  </div>

  <div class="clearfix"></div>

  <ul>
    <li>{{ HTML::link(URL::route('web'), trans('base_site.home_web_2'), array('title' => 'more about Web services')) }}</li>
  </ul>
  <div class="brclear"></div>
  <div class="push-50"></div>
</div>

{{ HTML::script('assets/js/home.js'); }}

@stop