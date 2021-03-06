@extends('app')
@section('content')

@if (Auth::guest()) 
    <p>Debe Iniciar Sesión para poder utilizar la aplicación</p>
@else
    @if($proyectos->count()) 
        @if(Session::has('notice'))
            <div class="alert alert-success" role="alert">
                <p> <strong> {{ Session::get('notice') }} </strong> </p>
            </div>
        @endif
          <div class="pull-right">
            <div class="btn-group" role="group" aria-label="Nuevo registro">
              <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-sm" title="Nuevo registro">Nuevo Registro</a>
            </div>
          </div>

        <!-- Paginación -->
        <nav aria-label="Paginación" align="center">
            {{ $proyectos->links() }}
        </nav>

        <div class='table-responsive-sm'>
            <h2 class="text-primary">Listado de Proyectos</h2>
            <table class="table table-hover" id="tabla">
                <caption></caption>
              <thead>
                <tr>
                    <th class="text-center">Código</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Contrato</th>
                    <th class="text-center">Cliente</th>
                    <th class="text-center" colspan=3>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($proyectos as $proyectos)
                    <tr>
                        <td class="text-center"><a href="{{ route('proyectos.show', $proyectos->idproyecto) }}">{{ $proyectos->idproyecto }}</a></td>
                        <td class="text-center">{{ $proyectos->descri }}</td>
                        <td class="text-center">{{ $proyectos->numcont }}</td>
                        <td class="text-center">{{ $proyectos->nombre }}</td>
                        <td align="center" width="20px">
                            <a href="{{ route('proyectos.show', $proyectos->idproyecto ) }}" class="btn btn-info btn-sm" title="Ver: {{ $proyectos->descri }}" type="button">Ver</a>                      
                        </td>
                        <td align="center" width="20px">
                            <a href="{{ route('proyectos.edit', $proyectos->idproyecto ) }}" class="btn btn-success btn-sm" title="Editar: {{ $proyectos->descri }}" type="button">Editar</a>
                        </td>
                        <td align="center" width="20px">
                            <form action="{{action('ProyectosController@destroy', $proyectos->idproyecto)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit" title="Eliminar: {{ $proyectos->descri }}" onclick="return confirm('¿Seguro de querer eliminar este registro: {{ $proyectos->descri }}?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>        
    @else
        <p> No se han encontrado registros </p>
    @endif
@endif

@endsection
