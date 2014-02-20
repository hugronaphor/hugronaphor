@extends('site._partials.base_master')

@section('content')

<div class="art-first-section">
  <div class="art-block-1">{{ trans('base_site.art_block_1') }}</div>
  <div class="brclear"></div>
  <div class="art-block-2"><div>{{ trans('base_site.art_block_2') }}</div>
  </div>
  <div class="brclear"></div>
  <div class="art-block-3">{{ trans('base_site.art_block_3') }}</div>
  <div class="brclear"></div>
  <div class="art-block-4">{{ trans('base_site.art_block_4') }}</div>
  <div class="brclear"></div>

</div>
<div class="art-we-do">{{ trans('base_site.general_we_do') }}</div>
<div class="art-block-5">
  <ul>
    <!--art_block_5_1-->
    <li rel="interface"><div></div><p>{{ trans('base_site.art_block_5_1') }}</p></li>
    <li rel="brand"><div></div><p>{{ trans('base_site.art_block_5_2') }}</p></li>
    <li rel="print"><div></div><p>{{ trans('base_site.art_block_5_3') }}</p></li>
    <li rel="communication"><div></div><p>{{ trans('base_site.art_block_5_4') }}</p></li>
  </ul>
</div>
<div class="art-block-6 list_carousel responsive">  

  <ul id="art-carousel">

    @foreach ($vars["art_items"] as $key => $item)

    @if ($item->li == 'start')
    <li>
      @endif

      <div class="slider-block">
        <img src="{{$item->path}}"/>
        <div class="thumb-overlay">
          <div class="wrapper">
            <div class="inner">              
              <p class="second processed">{{$item->author}}</p>
              <p class="first processed">{{$item->credit}}</p>
            </div>
          </div>
        </div>
      </div>

      @if ($item->li == 'end')
    </li>
    @endif

    @endforeach




    <!--    <li>
          <div class="slider-block">
            <img src="/uploads/art_1.jpg"/>
            <div class="thumb-overlay">
              <div class="wrapper valign">
                <p>CARMEL IUDICA</p>
                <p>logo</p>
              </div>
            </div>
          </div>
          <div class="slider-block">
            <img src="/uploads/art_1.jpg"/>
            <div class="thumb-overlay">
              <div class="wrapper valign">
                <p>Andreev Cornel</p>
                <p>logo</p>
              </div>
            </div>
          </div>
        </li>-->




  </ul>
  <div class="clearfix"></div>
  <!--  <a id="prev2" class="prev" href="#">&lt;</a>-->
  <!--  <a id="next2" class="next" href="#">&gt;</a>-->
  <div id="pager" class="pager"></div>
</div>
<div class="art-block-7" id="art-how-we-work">
  <img class="art-what-you-like" src="/assets/img/base/art_what_you_like.png" />
  <div id="art-animation"></div>

  <div class="art-design-process-wrapp"><img class="art-design-process" src="/assets/img/base/art_design_processs.png" /></div>
  <div class="clearfix"></div>
</div>

{{-- HTML::script('assets/js/vendor/modernizr.custom.37797.js'); --}}
{{ HTML::script('assets/js/vendor/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1.js'); }}
{{ HTML::script('assets/js/vendor/jquery-mousewheel/jquery.mousewheel.js'); }}
{{ HTML::script('assets/js/art.js'); }}


@stop