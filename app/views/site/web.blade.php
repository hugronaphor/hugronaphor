@extends('site._partials.base_master')

@section('content')

<div class="web-introduction">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>


<div id="web-tags-container">
  <div class="item" title="At vero eos et accusam et justo duo dolores et ea rebum.. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.">design</div>
  <div class="item w4" title="At vero eos et accusam et justo duo dolores et ea rebum.. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.">development</div>
  <div class="item " title="At vero eos et accusam et justo duo dolores et ea rebum.. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.">responsive</div>
  <div class="item ">QA</div>

  <div class="item w4">responsive</div>
  <div class="item w4">user experience</div>
  <div class="item" title="At vero eos et accusam et justo duo dolores et ea rebum.. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.">data migration</div>
  
  <div class="item w4" title="">user interface design</div>
  <div class="item " title="">performance</div>
  <div class="item w4">content management</div>
</div>

<div class="push-40"></div>

<div class="web-slider list_carousel responsive">
  <ul id="web-carousel">
    <li>
      <div class="slider-block">
        <img src="/uploads/test.jpg"/>                
      </div>            
    </li>
    <li>
      <div class="slider-block">
        <img src="/uploads/test.jpg"/>                
      </div>            
    </li>
    <li>
      <div class="slider-block">
        <img src="/uploads/test.jpg"/>                
      </div>            
    </li>
    <li>
      <div class="slider-block">
        <img src="/uploads/test.jpg"/>                
      </div>            
    </li>
    <li>
      <div class="slider-block">
        <img src="/uploads/test.jpg"/>                
      </div>            
    </li>
    <li>
      <div class="slider-block">
        <img src="/uploads/test.jpg"/>                
      </div>            
    </li>

  </ul>
  <!--<div class="clearfix"></div>-->
  <!--<a id="prev" class="prev" href="#">{{ HTML::Image('assets/img/base/prev_ico.png', 'Previous') }}</a>
      <a id="next" class="next" href="#">{{ HTML::Image('assets/img/base/next_ico.png', 'Next') }}</a>-->
  <div id="pager" class="pager"></div>
  <!--<div class="clearfix"></div>-->
</div>
<div class="push-100"></div>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
{{ HTML::script('assets/js/vendor/masonry/masonry.pkgd.min.js'); }}
{{ HTML::script('assets/js/vendor/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1.js'); }}
{{ HTML::script('assets/js/web.js'); }}
@stop