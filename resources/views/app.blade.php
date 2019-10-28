@include('voyager-frontend::partials.meta-app')
@include('voyager-frontend::partials.header-app')

  <div class="container">
	<div class="row">
      <div class="col-md-15 col-md-offset-1">

        <!-- Aquí incluiremos el contenido de nuestra aplicación -->
        @yield('content')
        
       </div>
    </div>
  </div>

@include('voyager-frontend::partials.footer-app')
