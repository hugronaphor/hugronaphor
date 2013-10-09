<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>

    @include('admin._partials.assets')
  </head>
  <body>
    <div class="admin main-wrapper">
      @include('admin._partials.header')

      <div class="content">
        @yield('main')
      </div>
    </div>
  </body>
</html>