@extends('app')
@section('content')

<div class='table-responsive-sm'>
    <h2>Vehículo: {{ $vehiculo->descri }}</h2>
    <table class="table table-bordered" id="valores">
        <caption></caption>
        <tr>
            <th align="right">Placas:</th>
            <td>{{ $vehiculo->placas }}</td>
        </tr>
        <tr>
            <th align="right">Tipo de Transporte:</th>
            <td>{{ $tipo->tipotra }}</td>
        </tr>
        <tr>
            <th align="right">Transportista:</th>
            <td>{{ $tp->transportista }}</td>
        </tr>
        <tr>
            <th align="right">Clase:</th>
            <td>{{ $vehiculo->clase }}</td>
        </tr>
        <tr>
        <th align="right">Marca:</th>
            <td>{{ $vehiculo->marca }}</td>
        </tr>        
        <tr>
            <th align="right">Año:</th>
            <td>{{ $vehiculo->ano }}</td>
        </tr>
        <tr>
            <th align="right">Capacidad:</th>
            <td>{{ $vehiculo->capacidad }}</td>
        </tr>
        <tr>
            <th align="right">Unidad:</th>
            <td>{{ $unidad->siglas }} ({{ $unidad->unidad }})</td>
        </tr>
        <tr>
            <th align="right">Color:</th>
            <td>{{ $vehiculo->color }}</td>
        </tr>        
        <tr>
            <th align="right">Modelo:</th>
            <td>{{ $vehiculo->modelo }}</td>
        </tr>
        <tr>
            <th align="right">Observaciones:</th>
            <td>{{ $vehiculo->obs }}</td>
        </tr>
        <tr>
            <th align="right">Fecha de creación:</th>
            <td>{{ $vehiculo->created_at }}</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <a href="{{ route('vehiculos.index') }}" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-arrow-left"></span>Volver</a>
                <a href="{{ route('vehiculos.show', $vehiculo->placas) }}" type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-repeat" aria-hiden='true'></span>Recargar</a>
            </td>
        </tr>
    </table>
</div>
@endsection
