@extends('app')
@section('content')

@if (Auth::guest()) 
    <p>Debe Iniciar Sesión para poder utilizar la aplicación</p>
@else
    @if($paises->count()) 
        @if(Session::has('notice'))
            <div class="alert alert-success" role="alert">
                <p> <strong> {{ Session::get('notice') }} </strong> </p>
            </div>
        @endif
          <div class="pull-right">
            <div class="btn-group" role="group" aria-label="Nuevo registro">
              <a href="{{ route('paises.create') }}" class="btn btn-primary btn-sm" title="Nuevo registro">Nuevo Registro</a>
            </div>
          </div>

        <!-- Paginación -->
        <nav aria-label="Paginación" align="center">
            {{ $paises->links() }}
        </nav>

        <div class='table-responsive-sm'>
            <h2 class="text-primary">Listado de Paises</h2>
            <table class="table table-hover" id="tabla">
                <caption></caption>
              <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">País</th>
                    <th class="text-center">Idioma</th>
                    <th class="text-center" colspan=3>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($paises as $paises)
                    <tr>
                        <td class="text-center"><a href="{{ route('paises.show', $paises->idpais) }}">{{ $paises->idpais }}</a></td>
                        <td class="text-center">{{ $paises->pais }}</td>
                        <td class="text-center">{{ $paises->idioma }}</td>
                        <td align="center" width="20px">
                            <a href="{{ route('paises.show', $paises->idpais ) }}" class="btn btn-info btn-sm" title="Ver: {{ $paises->pais }}" type="button">Ver</a>                      
                        </td>
                        <td align="center" width="20px">
                            <a href="{{ route('paises.edit', $paises->idpais ) }}" class="btn btn-success btn-sm" title="Editar: {{ $paises->pais }}" type="button">Editar</a>
                        </td>
                        <td align="center" width="20px">
                            <form action="{{action('PaisesController@destroy', $paises->idpais)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit" title="Eliminar: {{ $paises->pais }}" onclick="return confirm('¿Seguro de querer eliminar este registro: {{ $paises->pais }}?')">Eliminar</button>
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
