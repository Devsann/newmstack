<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>@yield('title')</title>
    
    @include('admin.layouts.header')
  </head>
  <body>

      @include('admin.layouts.navbar')
      @include('admin.layouts.sidebar')
      <div id="free">
      <br><br>
    </div>
      @yield('content')
      
      @include('admin.layouts.footer')
  </body>
</html>
