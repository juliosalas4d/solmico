@include('voyager-frontend::partials.meta-app')
@include('voyager-frontend::partials.header-app')

  <div class="container">

 
        <!-- Aquí incluiremos el contenido de nuestra aplicación -->
        @yield('content')
 

  </div>

@include('voyager-frontend::partials.footer')
