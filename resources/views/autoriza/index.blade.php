@extends('app')
@section('content')

@if (Auth::guest()) 
    <p>Debe Iniciar Sesión para poder utilizar la aplicación</p>
@else
    @if($autoriza->count()) 
        @if(Session::has('notice'))
            <div class="alert alert-success">
                <p> <strong> {{ Session::get('notice') }} </strong> </p>
            </div>
        @endif
          <div class="pull-right">
            <div class="btn-group" role="group" aria-label="Nuevo registro">
              <a href="{{ route('autoriza.create') }}" class="btn btn-primary btn-sm" title="Nuevo Autorizado">Nuevo Registro</a>
            </div>          
          </div>

        <!-- Paginación -->
        <nav aria-label="Paginación" align="center">
            {{ $autoriza->links() }}
        </nav>          

        <div class='table-responsive-sm'>
            <h2 class="text-primary">Listado de Autorizados</h2>
            <table class="table table-hover" id="tabla">
                <caption align="top" caption-side="top"></caption>
              <thead>
                <tr>
                    <th class="text-center">Cédula</th>
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Gerencia</th>
                    <th class="text-center" colspan=3>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($autoriza as $autoriza)
                    <tr>
                        <td class="text-center"><a href="{{ route('autoriza.show', $autoriza->cedaut) }}">{{ number_format($autoriza->cedaut, 0, ',', '.') }}</a></td>
                        <td class="text-center">{{ $autoriza->nombre }}</td>
                        <td class="text-center">{{ $autoriza->ger }}</td>
                        <td align="center" width="20px">
                            <a href="{{ route('autoriza.show', $autoriza->cedaut) }}" class="btn btn-info btn-sm" title="Ver: {{ $autoriza->nombre }}" type="button">Ver</a>                      
                        </td>
                        <td align="center" width="20px">
                            <a href="{{ route('autoriza.edit', $autoriza->cedaut) }}" class="btn btn-success btn-sm" title="Editar: {{ $autoriza->nombre }}" type="button">Editar</a>
                        </td>
                        <td align="center" width="20px">
                            <form action="{{action('AutorizaController@destroy', $autoriza->cedaut)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit" title="Eliminar: {{ $autoriza->nombre }}" onclick="return confirm('¿Seguro de querer eliminar este registro: {{ $autoriza->nombre }}?')">Eliminar</button>
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
