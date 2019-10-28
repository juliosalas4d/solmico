<!DOCTYPE html>
<html>
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ config('app.name', 'Laravel') }}</title>
 
  <!-- Custom CSS -->
  @section('styles_laravel')
 
  <!-- Bootstrap Core CSS -->
  <!--
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/bootstrap.css">
-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link media="all" type="text/css" rel="stylesheet" href="/assets/css/app.css">

  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  @show
 
  @yield('mis_estilos')
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}">{{ config('app.name', 'Laravel') }}</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">

          <!-- Menú de Administración de Contratos -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrador de Contratos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Obras</a></li>
              <li><a href="#">Clientes</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Mediciones</a></li>
              <li><a href="#">Valuaciones</a></li>
            </ul>
          </li>

          <!-- Menú de Ambiente -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ambiente<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('autoriza.index') }}">Autorizados</a></li>
              <li><a href="#">Generadores</a></li>
              <li><a href="#">Receptores</a></li>
              <li><a href="{{ route('transportistas.index') }}">Transportistas</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Manifiestos</a></li>
            </ul>
          </li>

          <li><a class="disabled" href="#">Empresas</a></li>
          <li><a class="disabled" href="#">Clientes</a></li>
          <li><a href="#">Países</a></li>
          <li><a class="active" href="{{url('/monedas')}}">Monedas</a></li>
          <li><a href="#">Idiomas</a></li>
          <li><a href="#">Formas de pago</a></li>
          <li><a href="#">Ayuda</a></li>
        </ul>
        <form class="navbar-form navbar-right">
          <input type="text" class="form-control" placeholder="Buscar...">
        </form>
      </div>
    </div>
  </nav>

  <!-- <div class="container-fluid"> -->
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
 
        <!-- Aquí incluiremos el contenido de nuestra aplicación -->
        @yield('content')
 
      </div>
    </div>
  </div>

  <!--
  <script src="/assets/js/jquery-3.4.1.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  

  <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>
-->


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
