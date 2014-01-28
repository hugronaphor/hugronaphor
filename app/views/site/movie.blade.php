@extends('site._partials.base_master')

@section('content')

<div class="movie-current-wrapper">
  <iframe src="//player.vimeo.com/video/{{$vars['current_movie']['vimeo_id']}}?title=0&amp;byline=0&amp;portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>

<div class="movie-thumbs-wrapper">
  @foreach ($vars["movies"] as $key => $item)
  <a class="video-thumb-box" rel="{{$item['title']}}" href="{{ URL::route('movie', $key) }}">

      <img src="{{$item['thumbnail']}}"/>

    <div class="thumb-overlay">
      <div class="title">{{$item['title']}}</div>
      {{ HTML::Image('assets/img/icons/play_btn.png', 'YOUNGERS',
      array('class'=>'thumb-play-btn')) }}
      <div class="credentials">
        <p class="author">{{$item['author']}}</p>
        <p class="year">{{$item['year']}}</p>
      </div>
    </div>

    @if ($vars['current_movie']['id'] + 1 == $item['id'])
      <div class="current-thumb-overlay"><p class="">NOW PLAYING</p></div>
    @endif

  </a>

  @endforeach


  <div class="brclear"></div>

  {{ $vars['original_movies']->links(); }}
</div>


{{ HTML::script('assets/js/movie.js'); }}
@stop
