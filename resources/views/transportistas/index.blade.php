@extends('app')
@section('content')

@if (Auth::guest()) 
    <p>Debe Iniciar Sesión para poder utilizar la aplicación</p>
@else
    @if($transportistas->count()) 
        @if(Session::has('notice'))
            <div class="alert alert-success">
                <p> <strong> {{ Session::get('notice') }} </strong> </p>
            </div>
        @endif
          <div class="pull-right">
            <div class="btn-group" role="group" aria-label="Nuevo registro">
              <a href="{{ route('transportistas.create') }}" class="btn btn-primary btn-sm" title="Nuevo registro">Nuevo Registro</a>
            </div>
          </div>

        <!-- Paginación -->
        <nav aria-label="Paginación" align="center">
            {{ $transportistas->links() }}
        </nav>          
        
        <div class='table-responsive-sm'>
            <h2 class="text-primary">Listado de Transportistas</h2>
            <table class="table table-hover" id="tabla">
                <caption align="top" caption-side="top"></caption>
              <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Razón Social</th>
                    <th class="text-center">Nº RACDA</th>
                    <th class="text-center" colspan=3>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($transportistas as $transportistas)
                    <tr>
                        <td class="text-center"><a href="{{ route('transportistas.show', $transportistas->idtransp) }}">{{ $transportistas->idtransp }}</a></td>
                        <td class="text-center">{{ $transportistas->transportista }}</td>
                        <td class="text-center">{{ $transportistas->racda }}</td>
                        <td align="center" width="20px">
                            <a href="{{ route('transportistas.show', $transportistas->idtransp) }}" class="btn btn-info btn-sm" title="Ver: {{ $transportistas->transportista }}" type="button">Ver</a>                      
                        </td>
                        <td align="center" width="20px">
                            <a href="{{ route('transportistas.edit', $transportistas->idtransp) }}" class="btn btn-success btn-sm" title="Editar: {{ $transportistas->transportista }}" type="button">Editar</a>
                        </td>
                        <td align="center" width="20px">
                            <form action="{{action('TransportistasController@destroy', $transportistas->idtransp)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit" title="Eliminar: {{ $transportistas->transportista }}" onclick="return confirm('¿Seguro de querer eliminar este registro: {{ $transportistas->transportista }}?')">Eliminar</button>
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
