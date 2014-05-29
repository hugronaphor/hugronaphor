@extends('site._partials.base_master')

@section('content')

<div class="contact-slogan hide">{{ trans('base_site.contact_top_1') }}</div>
<div class="data-store hide">
  <span id="contact_string_1">{{ trans('base_site.contact_string_1') }}</span>
  <span id="contact_string_2">{{ trans('base_site.contact_string_2') }}</span>
  <span id="contact_string_3">{{ trans('base_site.contact_string_3') }}</span>
</div>
<div class="contact-animation"></div>

<div class="push-40"></div>
{{ HTML::script('assets/js/contact.js'); }}

@stop