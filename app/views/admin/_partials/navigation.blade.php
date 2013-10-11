@if (Sentry::check())
<nav class="clearfix">
  <ul class="clearfix">
    
    <li><a href="{{ URL::route('admin.pages.index') }}"><i></i>Home</a></li>
    <li><a href="{{ URL::route('admin.pages.index') }}"><i></i>Pages</a></li>
    <li><a href="{{ URL::route('admin.articles.index') }}"><i></i>Articles</a></li>
    <li><a href="{{ URL::route('admin.profiles.index') }}"><i></i>Profiles</a></li>
    <li><a href="{{ URL::route('admin.logout') }}"><i></i> Logout</a></li>
  </ul>
  <a href="#" id="pull">Menu</a>
</nav>
@endif