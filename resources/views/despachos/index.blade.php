@extends('app')
@section('content')

@if (Auth::guest()) 
    <p>Debe Iniciar Sesión para poder utilizar la aplicación</p>
@else
    @if($despachos->count()) 
        @if(Session::has('notice'))
            <div class="alert alert-success" role="alert">
                <p> <strong> {{ Session::get('notice') }} </strong> </p>
            </div>
        @endif
          <div class="pull-right">
            <div class="btn-group" role="group" aria-label="Nuevo registro">
              <a href="{{ route('despachos.create') }}" class="btn btn-primary btn-sm" title="Nuevo registro">Nuevo Registro</a>
            </div>
          </div>

        <!-- Paginación -->
        <nav aria-label="Paginación" align="center">
            {{ $despachos->links() }}
        </nav>

        <div class='table-responsive-sm'>
            <h2 class="text-primary">Despachos de Productos Químicos</h2>
            <table class="table table-hover" id="tabla">
                <caption></caption>
              <thead>
                <tr>
                    <th class="text-center">Despacho</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Producto</th>
                    <th class="text-center">Proyecto</th>
                    <th class="text-center">Despachado</th>
                    <th class="text-center">Unidad</th>
                    <th class="text-center">Entregado</th>
                    <th class="text-center" colspan=3>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($despachos as $despachos)
                    <tr>
                        <td class="text-center"><a href="{{ route('despachos.show', $despachos->id) }}">{{ $despachos->iddesp }}</a></td>
                        <td class="text-center">{{date('d/m/Y', strtotime($despachos->fechasal))}}</td>
                        <td class="text-center">{{ $despachos->producto }}</td>
                        <td class="text-center" title="{{ $despachos->descri }}">{{ $despachos->idproyecto }}</td>
                        <td class="text-center">{{ number_format($despachos->cant_des, 0, ',', '.') }}</td>
                        <td class="text-center">{{ $despachos->unidad }}</td>
                        <td class="text-center">{{ number_format($despachos->cant_ent, 0, ',', '.') }}</td>
                        <td align="center" width="20px">
                            <a href="{{ route('despachos.show', $despachos->id ) }}" class="btn btn-info btn-sm" title="Ver: {{ $despachos->iddesp }}" type="button">Ver</a>                      
                        </td>
                        <td align="center" width="20px">
                            <a href="{{ route('despachos.edit', $despachos->id ) }}" class="btn btn-success btn-sm" title="Editar: {{ $despachos->id }}" type="button">Editar</a>
                        </td>
                        <td align="center" width="20px">
                            <form action="{{action('DespachosController@destroy', $despachos->id)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit" title="Eliminar: {{ $despachos->id }}" onclick="return confirm('¿Seguro de querer eliminar este registro: {{ $despachos->id }}?')">Eliminar</button>
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
