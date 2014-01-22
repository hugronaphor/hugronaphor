@extends('site._partials.base_master')

@section('content')
<div class="content">
  <!--        <audio id="bump1" src="audio/pan_1.mp3" preload="none"></audio>-->
  <div class="contact-slogan">we are where you need us to be</div>
  <div class="contact-animation"></div>
</div>

{{ HTML::script('assets/js/contact.js'); }}

@stop