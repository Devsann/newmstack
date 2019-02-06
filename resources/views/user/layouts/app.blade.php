<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    @include('user.layouts.header')
  </head>
  <body>
      @include('user.layouts.navbar')

      @yield('content')

 
    @include('user.layouts.footer')
  </body>
</html>
