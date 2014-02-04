@extends('site._partials.base_master')

@section('content')

<div class="movie-page-wrapper">

  <div class="movie-current-wrapper">
    <iframe src="//player.vimeo.com/video/{{$vars['current_movie']['vimeo_id']}}?title=0&amp;byline=0&amp;portrait=0" width="{{$vars['current_movie']['width']}}" height="{{$vars['current_movie']['height']}}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>

  <div class="movie-thumbs-wrapper">
    @foreach ($vars["movies"] as $key => $item)
    <a class="video-thumb-box" rel="{{$item['title']}}" href="{{-- URL::route('movie', $item['id']) --}} {{ $item['node_path'] }}">

      <img src="{{$item['thumbnail']}}"/>

      <div class="thumb-overlay">
        <div class="title">{{$item['title']}}</div>
        {{ HTML::Image('assets/img/base/movie_play.png', '',
      array('class'=>'thumb-play-btn')) }}
        <div class="credentials">
          <p class="author">{{$item['author']}}</p>
          <p class="year">{{$item['year']}}</p>
        </div>
      </div>

      @if ($vars['current_movie']['id'] == $item['id'])
      <div class="current-thumb-overlay"><p class="">NOW PLAYING</p></div>
      @endif

    </a>

    @endforeach


    <div class="brclear"></div>

    {{ $vars['original_movies']->links(); }}
  </div>
</div>


{{ HTML::script('assets/js/vendor/jquery.fitvids.js'); }}
{{ HTML::script('assets/js/movie.js'); }}
@stop
