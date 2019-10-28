@extends('app')
@section('content')

@if (Auth::guest()) 
    <p>Debe Iniciar Sesión para poder utilizar la aplicación</p>
@else
    @if($vehiculos->count()) 
        @if(Session::has('notice'))
            <div class="alert alert-success" role="alert">
                <p> <strong> {{ Session::get('notice') }} </strong> </p>
            </div>
        @endif
          <div class="pull-right">
            <div class="btn-group" role="group" aria-label="Nuevo registro">
              <a href="{{ route('vehiculos.create') }}" class="btn btn-primary btn-sm" title="Nuevo registro">Nuevo Registro</a>
            </div>
          </div>

        <!-- Paginación -->
        <nav aria-label="Paginación" align="center">
            {{ $vehiculos->links() }}
        </nav>

        <div class='table-responsive-sm'>
            <h2 class="text-primary">Listado de Vehiculos</h2>
            <table class="table table-hover" id="tabla">
                <caption></caption>
              <thead>
                <tr>
                    <th class="text-center">Placas</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Tipo</th>
                    <th class="text-center">Transportista</th>
                    <th class="text-center" colspan=3>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($vehiculos as $vehiculos)
                    <tr>
                        <td class="text-center"><a href="{{ route('vehiculos.show', $vehiculos->placas) }}">{{ $vehiculos->placas }}</a></td>
                        <td class="text-center">{{ $vehiculos->descri }}</td>
                        <td class="text-center">{{ $vehiculos->tipotra }}</td>
                        <td class="text-center">{{ $vehiculos->transportista }}</td>
                        <td align="center" width="20px">
                            <a href="{{ route('vehiculos.show', $vehiculos->placas ) }}" class="btn btn-info btn-sm" title="Ver: {{ $vehiculos->placas }}" type="button">Ver</a>
                        </td>
                        <td align="center" width="20px">
                            <a href="{{ route('vehiculos.edit', $vehiculos->placas ) }}" class="btn btn-success btn-sm" title="Editar: {{ $vehiculos->placas }}" type="button">Editar</a>
                        </td>
                        <td align="center" width="20px">
                            <form action="{{action('VehiculosController@destroy', $vehiculos->placas)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit" title="Eliminar: {{ $vehiculos->placas }}" onclick="return confirm('¿Seguro de querer eliminar este registro: {{ $vehiculos->placas }}?')">Eliminar</button>
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
