<!doctype html>

<html lang="en">
  
  <head>

    @include('layouts._head')
    
  </head>

  <body>
    
    @include('layouts._nav')
    
    <div class="container">

       @yield('content')

    </div>

    @include('layouts._footer')

    @include('layouts._javascript')

    @yield('scripts')

  </body>

</html>