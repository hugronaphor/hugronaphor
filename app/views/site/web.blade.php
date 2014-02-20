@extends('site._partials.base_master')

@section('content')

<div class="web-introduction">{{ trans('base_site.web_top_1') }}</div>
<div class="web-we-do">{{ trans('base_site.general_we_do') }}</div>

<div id="web-tags-container">
  <div class="item" title="{{ trans('base_site.web_1_1_2') }}"><p>{{ trans('base_site.web_1_1_1') }}</p></div>
  <div class="item" title="{{ trans('base_site.web_1_2_2') }}"><p>{{ trans('base_site.web_1_2_1') }}</p></div>
  <div class="item w4" title="{{ trans('base_site.web_1_3_2') }}"><p>{{ trans('base_site.web_1_3_1') }}</p></div>
  <div class="item " title="{{ trans('base_site.web_1_4_2') }}"><p>{{ trans('base_site.web_1_4_1') }}</p></div>
  
  <div class="item" title="{{ trans('base_site.web_1_5_2') }}"><p>{{ trans('base_site.web_1_5_1') }}</div>
  <div class="item w4" title="{{ trans('base_site.web_1_6_2') }}"><p>{{ trans('base_site.web_1_6_1') }}</p></div>
  <div class="item" title="{{ trans('base_site.web_1_7_2') }}"><p>{{ trans('base_site.web_1_7_1') }}</p></div>
  <div class="item w4" title=""><p>{{ trans('base_site.web_1_8_1') }}</p></div>
  
  <div class="item " title="{{ trans('base_site.web_1_9_2') }}"><p>{{ trans('base_site.web_1_9_1') }}</p></div>
  <div class="item" title="{{ trans('base_site.web_1_10_2') }}"><p>{{ trans('base_site.web_1_10_1') }}</p></div>
  <div class="item w4" title="{{ trans('base_site.web_1_11_2') }}content"><p>{{ trans('base_site.web_1_11_1') }}</p></div>
</div>

<div class="push-50"></div>
<!--<div class="push-100"></div>-->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
{{ HTML::script('assets/js/vendor/masonry/masonry.pkgd.min.js'); }}
{{ HTML::script('assets/js/vendor/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1.js'); }}
{{ HTML::script('assets/js/web.js'); }}
@stop