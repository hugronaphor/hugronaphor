@extends('site._partials.base_master')

@section('content')

<div class="web-introduction">
  <p>Creating a successful website starts with having an effective process.</p>
  <p>We build websites from scratch, exhaustively planning every aspect of the project.</p>
  <p>Our methodology focuses on organization, planning, execution and delivery.</p>
</div>

<div class="web-we-do">{{ trans('base_site.general_we_do') }}</div>


<div id="web-tags-container">
  <div class="item" title="We investigate your goal and deliver the best solution"><p>research</p></div>
  <div class="item" title="We create practice design based on your branding requirements"><p>design</p></div>
  <div class="item w4" title="We seriously hung the choice of development environment based on application requirements"><p>development</p></div>
  <div class="item " title="We create responsive websites to deliver a consistent customer experience across desktop, mobile and tablet devices"><p>responsive</p></div>
  <div class="item" title="We have holistic approach to Quality Assurance"><p>QA</div>

  
  <div class="item w4" title="Meet the exact needs of the customer, without fuss or bother"><p>user experience</p></div>
  <div class="item" title="We can migrate data from different platforms and preserve all URLs"><p>data migration</p></div>

  <div class="item w4" title=""><p>user interface design</p></div>
  <div class="item " title="We optimize any piece of application in order to achieve better performance"><p>performance</p></div>
  <div class="item" title="We are always ready to make website updates and improvements"><p>maintenance</p></div>
  <div class="item w4" title="We give you ability to manage your own content"><p>content management</p></div>
</div>

<div class="push-50"></div>
<!--<div class="push-100"></div>-->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
{{ HTML::script('assets/js/vendor/masonry/masonry.pkgd.min.js'); }}
{{ HTML::script('assets/js/vendor/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1.js'); }}
{{ HTML::script('assets/js/web.js'); }}
@stop