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
        <p>DESIGN IS IMPORTANT</p>

        <p>BECAUSE CHAOS IS SO HARD</p>
    </div>

    <div class="home-art-block-img"></div>

    <div class="home-find-more-about">
        <p>MORE ABOUT</p>
        <ul>
            <li><a href="{{ URL::route('art') }}">illustration</a></li>
            <li><a href="{{ URL::route('art') }}">branding</a></li>
            <li><a href="{{ URL::route('art') }}">print design</a></li>
        </ul>
    </div>

    <div class="home-about-facts">
        <p class="about-facts-title">TREMENDOUS FACTS ABOUT US</p>
        <div class="facts-nr">
            <ul>
                <li class="project-n" data-count="7">
                    <p>0</p>

                    <p>Under Construction <br/> Projects</p>
                </li>
                <li class="coffe-n" data-count="895"><p>0</p>

                    <p>Cups of Coffe</p></li>
                <li class="fb-n" data-count="87687"><p>0</p>

                    <p>Minutes on Facebook</p></li>
                <li class="client-n" data-count="36"><p>0</p>

                    <p>Clients</p></li>
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

        <video id="video_background" autoplay preload muted loop controls>
            <!-- autoplay> -->
            <!--      <source src="movie.ogg" type="video/ogg">-->
            <source src="{{asset('/assets/video/test_4.mp4')}}" type="video/mp4">
Your browser does not support the video tag.
            <!--      <object data="movie.mp4" width="100%" height="240">-->
            <!--        <embed width="320" height="240" src="movie.swf">-->
            <!--      </object>-->
        </video>

        <div class="h-video-on-video">
            <div class="h-video-centered-content valign">
                <p style="text-align: center;font-size:38px;margin-bottom: 10px;">WE MAKE THINGS MOVE</p>

                <p style="text-align: center;font-size:17px;">Design and production of interactive videos and motion graphics,</p>

                <p style="text-align: center;font-size:17px;">tailored to bring your brand messaging to life.</p>

                {{ HTML::link(URL::route('movie'), 'more', array(
          'title' => 'more about Movie',
          'class'=>'go-to-movie',
          'style'=>'',
        )) }}
            </div>

        </div>

    </div>

    <div class="video-our-culture">
        <div class="h-culture-centered relative valign">
            <p>OUR CULTURE</p>
            <p>WRITE THE BOOK THAT YOU WANT TO READ</p>
        </div>
    </div>
    <div class="brclear"></div>

</div>

<div class="home-web-block">
  <!--<p>We are building the WEB</p>-->
    <div class="img-wrapper">{{ HTML::Image('assets/img/base/home_web.jpg', 'WEB', array('class'=>'h-web-image')) }}</div>
    
    <ul>
        <li>{{ HTML::link(URL::route('web'), 'web services', array('title' => 'more about Web services')) }}</li>
    </ul>
    <div class="brclear"></div>
    <div class="push-40"></div>
</div>

{{ HTML::script('assets/js/home.js'); }}

@stop