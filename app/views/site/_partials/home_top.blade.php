<div class="home-top-land">
  <div class="h-top-phone">(+373) 69 311 477</div>
  <div class="fb-like" data-href="https://www.facebook.com/creativeyoungers" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>

  <div id="home-top-language-bar">{{ LaravelLocalization::getLanguageBar() }}</div>

  <div class="brclear"></div>
  <div class="h-top-slogan-wrapp">
    <div class="h-top-slogan">      
      {{ trans('base_site.home_slogan'); }}
    </div>
  </div>
  <div class="h-top-sub-slogan">
    <div class="xouter">
      <div class="xinner">
        <p>{{ trans('base_site.home_sub_slogan'); }}</p>

        <p class="slogan-signature">{{
          HTML::Image('assets/img/base/salvador_dali.png', 'Salvador Dali',
          array('width'=>'')) }}</p>
      </div>
    </div>
  </div>

  <div class="h-top-social">
    <ul>
      <li rel="linked-in"><a href="http://www.linkedin.com/profile/view?id=310750036&trk=nav_responsive_tab_profile_pic"></a></li>
      <li rel="fb"><a href="https://www.facebook.com/creativeyoungers?ref=tn_tnmn"></a></li>
      <li rel="vimeo"><a href="https://vimeo.com/creativeyoungers"></a></li>
      <li rel="twitter"><a href="https://twitter.com/youngers17"></a></li>
      <li rel="yt"><a href="https://www.youtube.com/channel/UC5iAGV040xESZ3P0IJkXy5A"></a></li>
      <li rel="g-plus"><a href="https://plus.google.com/u/1/104642160510359786395/posts"></a></li>
    </ul>
  </div>
  <div class="push-40"></div>

</div>