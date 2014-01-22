@extends('site._partials.base_master')

@section('content')

<div class="contact-slogan">WE LOVE WHAT WE DO AND WE DO WHAT WE LOVE</div>



<article class="page-block" id="art-about">
  <header>
    <h1>About</h1>
  </header>
  <p>The first clearly recorded instance of a balloon carrying passengers used hot air to generate buoyancy and was built by the brothers Joseph-Michel and Jacques-Etienne Montgolfier in Annonay, France. After experimenting with unmanned balloons and flights with animals, the first tethered balloon flight with humans on board took place on October 15, 1783.</p>
</article>

<article class="page-block" id="art-works">
  <header>
    <h1>Art Works</h1>
  </header>
  <p>André-Jacques Garnerin carried out the first jump with a silk parachute on October 22, 1797 at Parc Monceau, Paris. Garnerin's first parachute resembled a closed umbrella before he ascended; at a height of approximately 3,000 feet he severed the rope that connected his parachute to the balloon, and the basket fell to earth. Garnerin emerged uninjured.</p>
</article>

<article class="page-block" id="art-how-we-work">
  <header>
    <h1>How we work</h1>
  </header>
  <p>Scroll To draw.</p>
  <div class='art-animation'></div>
</article>




{{ HTML::script('assets/js/vendor/modernizr.custom.37797.js'); }}
{{ HTML::script('assets/js/art.js'); }}




@stop