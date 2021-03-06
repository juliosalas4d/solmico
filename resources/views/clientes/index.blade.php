@extends('app')
@section('content')

@if (Auth::guest()) 
    <p>Debe Iniciar Sesión para poder utilizar la aplicación</p>
@else
    @if($clientes->count()) 
        @if(Session::has('notice'))
            <div class="alert alert-success" role="alert">
                <p> <strong> {{ Session::get('notice') }} </strong> </p>
            </div>
        @endif
          <div class="pull-right">
            <div class="btn-group" role="group" aria-label="Nuevo registro">
              <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm" title="Nuevo registro">Nuevo Registro</a>
            </div>
          </div>

        <!-- Paginación -->
        <nav aria-label="Paginación" align="center">
            {{ $clientes->links() }}
        </nav>

        <div class='table-responsive-sm'>
            <h2 class="text-primary">Listado de Clientes</h2>
            <table class="table table-hover" id="tabla">
                <caption></caption>
              <thead>
                <tr>
                    <th class="text-center">Código</th>
                    <th class="text-center">RIF</th>
                    <th class="text-center">Razón Social</th>
                    <th class="text-center">Contacto</th>
                    <th class="text-center">Teléfonos</th>
                    <th class="text-center" colspan=3>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($clientes as $clientes)
                    <tr>
                        <td class="text-center"><a href="{{ route('clientes.show', $clientes->codcli) }}">{{ $clientes->codcli }}</a></td>
                        <td class="text-center">{{ $clientes->rif }}</td>
                        <td class="text-center">{{ $clientes->nombre }}</td>
                        <td class="text-center">{{ $clientes->contacto }}</td>
                        <td class="text-center">{{ $clientes->tel }}</td>
                        <td align="center" width="20px">
                            <a href="{{ route('clientes.show', $clientes->codcli ) }}" class="btn btn-info btn-sm" title="Ver: {{ $clientes->nombre }}" type="button">Ver</a>                      
                        </td>
                        <td align="center" width="20px">
                            <a href="{{ route('clientes.edit', $clientes->codcli ) }}" class="btn btn-success btn-sm" title="Editar: {{ $clientes->nombre }}" type="button">Editar</a>
                        </td>
                        <td align="center" width="20px">
                            <form action="{{action('ClientesController@destroy', $clientes->codcli)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit" title="Eliminar: {{ $clientes->nombre }}" onclick="return confirm('¿Seguro de querer eliminar este registro: {{ $clientes->nombre }}?')">Eliminar</button>
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
