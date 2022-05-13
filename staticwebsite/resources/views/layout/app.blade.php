<html>
  <head>
    <title>@yield('title')</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
      </style>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
  </head>
  <body>
    
    @include('layout.menu')
    
    @yield('content')
    
    @include('layout.footer')
    
   <script src="{{asset('js/jquery-3.4.1.slim.min.js')}}"></script> 
   <script src="{{asset('js/popper.js')}}"></script> 
   <script src="{{asset('js/bootstrap.min.js')}}"></script> 
  </body>
</html>