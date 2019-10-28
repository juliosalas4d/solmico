@extends('app')
@section('content')

<div class='table-responsive-sm'>
    <h2>Lote: {{ $lote->lote }}</h2>
    <table class="table table-bordered" id="valores">
        <caption></caption>
        <tr>
            <th align="right">Fecha:</th>
            <td>{{ $lote->fecha }}</td>
        </tr>
        <tr>
            <th align="right">Producto:</th>
            <td>{{ $producto->producto }}</td>
        </tr>
        <tr>
            <th align="right">Unidad:</th>
            <td>{{ $unidad->unidad }}</td>
        </tr>
        <tr>
            <th align="right">Cantidad:</th>
            <td>{{ $lote->cant }}</td>
        </tr>        
        <tr>
            <th align="right">Observaciones:</th>
            <td>{{ $lote->obs }}</td>
        </tr>
        <tr>
            <th align="right">Fecha de creación:</th>
            <td>{{ $lote->created_at }}</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <a href="{{ route('lotes.index') }}" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-arrow-left"></span>Volver</a>
                <a href="{{ route('lotes.show', $lote->idlote) }}" type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-repeat" aria-hiden='true'></span>Recargar</a>
            </td>
        </tr>
    </table>
</div>
@endsection
