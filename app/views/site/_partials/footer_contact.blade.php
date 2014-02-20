{{ HTML::style('assets/css/footer_contact.css'); }}

<div class="f-block-1"><p>{{ trans('base_site.footer_1') }}</p></div>
<div class="f-block-2 f-icons h-top-social">
  <ul>
    <li rel="linked-in"><a href="#"></a></li>
    <li rel="fb"><a href="#"></a></li>
    <li rel="vimeo"><a href="#"></a></li>
    <li rel="twitter"><a href="#"></a></li>
    <li rel="yt"><a href="#"></a></li>
    <li rel="g-plus"><a href="#"></a></li>
  </ul>
</div>
<!--<div class="f-block-3 contact-magic"><p>Let's make magic together</p></div>-->
<div class="f-block-4 contact-contacts">{{ $vars['footer_contact_text'] }}</div>
<div class="f-block-4 copywrite"><p>{{ trans('base_site.footer_2') }}</p></div>
<div class="clearfix"></div>