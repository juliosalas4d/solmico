@extends('app')
@section('content')

@if (Auth::guest()) 
    <p>Debe Iniciar Sesión para poder utilizar la aplicación</p>
@else
    @if($lotes->count()) 
        @if(Session::has('notice'))
            <div class="alert alert-success" role="alert">
                <p> <strong> {{ Session::get('notice') }} </strong> </p>
            </div>
        @endif
          <div class="pull-right">
            <div class="btn-group" role="group" aria-label="Nuevo registro">
              <a href="{{ route('lotes.create') }}" class="btn btn-primary btn-sm" title="Nuevo registro">Nuevo Registro</a>
            </div>
          </div>

        <!-- Paginación -->
        <nav aria-label="Paginación" align="center">
            {{ $lotes->links() }}
        </nav>

        <div class='table-responsive-sm'>
            <h2 class="text-primary">Listado de lotes</h2>
            <table class="table table-hover" id="tabla">
                <caption></caption>
              <thead>
                <tr>
                    <th class="text-center">Lote</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Producto</th>
                    <th class="text-center">Unidad</th>
                    <th class="text-center">Despachado</th>
                    <th class="text-center" colspan=3>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($lotes as $lotes)
                    <tr>
                        <td class="text-center"><a href="{{ route('lotes.show', $lotes->idlote) }}">{{ $lotes->lote }}</a></td>
                        <td class="text-center">{{ $lotes->fecha }}</td>
                        <td class="text-center">{{ $lotes->producto }}</td>
                        <td class="text-center">{{ $lotes->unidad }}</td>
                        <td class="text-center">{{ number_format($lotes->cant, 0, ',', '.') }}</td>
                        <td align="center" width="20px">
                            <a href="{{ route('lotes.show', $lotes->idlote ) }}" class="btn btn-info btn-sm" title="Ver: {{ $lotes->lote }}" type="button">Ver</a>                      
                        </td>
                        <td align="center" width="20px">
                            <a href="{{ route('lotes.edit', $lotes->idlote ) }}" class="btn btn-success btn-sm" title="Editar: {{ $lotes->lote }}" type="button">Editar</a>
                        </td>
                        <td align="center" width="20px">
                            <form action="{{action('LotesController@destroy', $lotes->idlote)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit" title="Eliminar: {{ $lotes->lote }}" onclick="return confirm('¿Seguro de querer eliminar este registro: {{ $lotes->lote }}?')">Eliminar</button>
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
