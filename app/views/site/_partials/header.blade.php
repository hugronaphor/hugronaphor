<div class="logo-header">
  <div class="logo-img-wrapper"><a href="/">{{ HTML::Image('assets/img/base/logo.png', 'YOUNGERS') }}</a>
  </div>
</div>
<div class="nav-wrapper">

  <div class="nav-level-1 base-navigation">
    <ul>
      {{-- dd($vars["menu"]) --}}
      @foreach ($vars["menu"] as $route => $item)      
        @if ($item['parent'] == '0')
          @if ($vars['baseParent'] == $route)
            <li><a class="active" rel="{{$route}}" href="{{ URL::route($route) }}">{{$item['name']}}</a></li>
          @else
            <li><a rel="{{$route}}" href="{{ URL::route($route) }}">{{$item['name']}}</a></li>
          @endif
        @endif  
      @endforeach
    </ul>      
    {{ LaravelLocalization::getLanguageBar() }}
  </div>

</div>

