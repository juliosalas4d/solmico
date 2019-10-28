@extends('app')
@section('content')

@if (Auth::guest()) 
    <p>Debe Iniciar Sesión para poder utilizar la aplicación</p>
@else
    @if($productos->count()) 
        @if(Session::has('notice'))
            <div class="alert alert-success" role="alert">
                <p> <strong> {{ Session::get('notice') }} </strong> </p>
            </div>
        @endif
          <div class="pull-right">
            <div class="btn-group" role="group" aria-label="Nuevo registro">
              <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm" title="Nuevo registro">Nuevo Registro</a>
            </div>
          </div>

        <!-- Paginación -->
        <nav aria-label="Paginación" align="center">
            {{ $productos->links() }}
        </nav>

        <div class='table-responsive-sm'>
            <h2 class="text-primary">Listado de Productos</h2>
            <table class="table table-hover" id="tabla">
                <caption></caption>
              <thead>
                <tr>
                    <th class="text-center">Producto</th>
                    <th class="text-center">Unidad</th>
                    <th class="text-center">Estado Físico</th>
                    <th class="text-center" colspan=3>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($productos as $productos)
                    <tr>
                        <td class="text-center"><a href="{{ route('productos.show', $productos->idproducto) }}">{{ $productos->producto }}</a></td>
                        <td class="text-center">{{ $productos->unidad }}</td>
                        <td class="text-center">{{ $productos->edofisico }}</td>
                        <td align="center" width="20px">
                            <a href="{{ route('productos.show', $productos->idproducto ) }}" class="btn btn-info btn-sm" title="Ver: {{ $productos->producto }}" type="button">Ver</a>                      
                        </td>
                        <td align="center" width="20px">
                            <a href="{{ route('productos.edit', $productos->idproducto ) }}" class="btn btn-success btn-sm" title="Editar: {{ $productos->producto }}" type="button">Editar</a>
                        </td>
                        <td align="center" width="20px">
                            <form action="{{action('ProductosController@destroy', $productos->idproducto)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit" title="Eliminar: {{ $productos->producto }}" onclick="return confirm('¿Seguro de querer eliminar este registro: {{ $productos->producto }}?')">Eliminar</button>
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
