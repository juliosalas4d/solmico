@extends('app')
@section('content')

<div class='table-responsive-sm'>
    <h2>Razón Social: {{ $cliente->nombre }}</h2>
    <table class="table table-bordered" id="valores">
        <caption></caption>
        <tr>
            <th align="right">RIF:</th>
            <td>{{ $cliente->rif }}</td>
        </tr>
        <tr>
            <th align="right">Cédula de Identidad:</th>
            <td>{{ $cliente->cedula }}</td>
        </tr>
        <tr>
            <th align="right">Persona contacto:</th>
            <td>{{ $cliente->contacto }}</td>
        </tr>
        <tr>
            <th align="right">Dirección:</th>
            <td>{{ $cliente->direccion }}</td>
        </tr>
        <tr>
            <th align="right">País:</th>
            <td>{{ $pais->pais }}</td>
        </tr>
        <tr>
        <th align="right">Estado:</th>
            <td>{{ $esta->estado }}</td>
        </tr>        
        <tr>
            <th align="right">Municipio:</th>
            <td>{{ $munc->municipio }}</td>
        </tr>
        <tr>
            <th align="right">Parroquia:</th>
            <td>{{ $parr->parroquia }}</td>
        </tr>
        <tr>
            <th align="right">Ciudad:</th>
            <td>{{ $ciud->ciudad }}</td>
        </tr>
        <tr>
            <th align="right">Teléfonos:</th>
            <td>{{ $cliente->tel }}</td>
        </tr>
        <tr>
            <th align="right">Fax:</th>
            <td>{{ $cliente->fax }}</td>
        </tr>
        <tr>
            <th align="right">email:</th>
            <td>{{ $cliente->email }}</td>
        </tr>
        <tr>
            <th align="right">Web:</th>
            <td>{{ $cliente->www }}</td>
        </tr>
        <tr>
            <th align="right">Observaciones:</th>
            <td>{{ $cliente->obs }}</td>
        </tr>
        <tr>
            <th align="right">Fecha de creación:</th>
            <td>{{ $cliente->created_at }}</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <a href="{{ route('clientes.index') }}" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-arrow-left"></span>Volver</a>
                <a href="{{ route('clientes.show', $cliente->codcli) }}" type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-repeat" aria-hiden='true'></span>Recargar</a>
            </td>
        </tr>
    </table>
</div>
@endsection
