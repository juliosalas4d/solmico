@extends('app')
@section('content')

@if (Auth::guest()) 
    <p>Debe Iniciar Sesión para poder utilizar la aplicación</p>
@else
    @if($choferes->count()) 
        @if(Session::has('notice'))
            <div class="alert alert-success">
                <p> <strong> {{ Session::get('notice') }} </strong> </p>
            </div>
        @endif
          <div class="pull-right">
            <div class="btn-group" role="group" aria-label="Nuevo registro">
              <a href="{{ route('choferes.create') }}" class="btn btn-primary btn-sm" title="Nuevo registro">Nuevo Registro</a>
            </div>
          </div>

        <!-- Paginación -->
        <nav aria-label="Paginación" align="center">
            {{ $choferes->links() }}
        </nav>          

        <div class='table-responsive-sm'>
            <h2 class="text-primary">Listado de Choferes</h2>
            <table class="table table-hover" id="tabla">
                <caption align="top" caption-side="top"></caption>
              <thead>
                <tr>
                    <th class="text-center">Cédula</th>
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Teléfono</th>
                    <th class="text-center" colspan=3>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($choferes as $choferes)
                    <tr>
                        <td class="text-center"><a href="{{ route('choferes.show', $choferes->cedcho) }}">{{ number_format($choferes->cedcho, 0, ',', '.') }}</a></td>
                        <td class="text-center">{{ $choferes->nombre }}</td>
                        <td class="text-center">{{ $choferes->tel }}</td>
                        <td align="center" width="20px">
                            <a href="{{ route('choferes.show', $choferes->cedcho) }}" class="btn btn-info btn-sm" title="Ver: {{ $choferes->nombre }}" type="button">Ver</a>                      
                        </td>
                        <td align="center" width="20px">
                            <a href="{{ route('choferes.edit', $choferes->cedcho) }}" class="btn btn-success btn-sm" title="Editar: {{ $choferes->nombre }}" type="button">Editar</a>
                        </td>
                        <td align="center" width="20px">
                            <form action="{{action('ChoferesController@destroy', $choferes->cedcho)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit" title="Eliminar: {{ $choferes->nombre }}" onclick="return confirm('¿Seguro de querer eliminar este registro: {{ $choferes->nombre }}?')">Eliminar</button>
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
