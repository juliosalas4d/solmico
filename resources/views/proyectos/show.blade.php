@extends('app')
@section('content')

<div class='table-responsive-sm'>
    <h2>Código: {{ $proyecto->idproyecto }}</h2>
    <table class="table table-bordered" id="valores">
        <caption></caption>
        <tr>
            <th align="right">Descripción:</th>
            <td>{{ $proyecto->descri }}</td>
        </tr>
        <tr>
            <th align="right">Cliente:</th>
            <td>{{ $proyecto->codcli }} - {{ $cliente->nombre}} </td>
        </tr>
        <tr>
            <th align="right">Nº de Contrato:</th>
            <td>{{ $proyecto->numcont }}</td>
        </tr>
        <tr>
            <th align="right">Fecha del Contrato:</th>
            <td>{{ date('d/m/Y', strtotime($proyecto->fechacont)) }}</td>
        </tr>
        <tr>
            <th align="right">Duración:</th>
            <td>{{ $proyecto->dur }} Días</td>
        </tr>
        <tr>
            <th align="right">Monto (Bolivares):</th>
            <td>{{ number_format($proyecto->montobol, '2', ',', '.') }}</td>
        </tr>
        <tr>
            <th align="right">Monto ({{ $moneda->moneda }}):</th>
            <td>{{ number_format($proyecto->montodiv, '2', ',', '.') }}</td>
        </tr>
        @if($proyecto->tasa != 0)  
            <tr>
                <th align="right">Tasa:</th>
                <td>{{ number_format($proyecto->tasa, '5', ',', '.') }} ({{ date('d/m/Y', strtotime($proyecto->fechatasa)) }})</td>
            </tr>
        @endif
        @if($proyecto->impsino == 1)
            <tr>
                <th align="right">Impuesto:</th>
                <td>({{ $proyecto->porimp }}%) {{ $proyecto->nomimp }}</td>
            </tr>
        @endif
        <tr>
            <th align="right">Tipo de Contrato:</th>
            <td>{{ $tipocont->tipoc }}</td>
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
            <th align="right">Dirección:</th>
            <td>{{ $proyecto->direccion }}</td>
        </tr>
        <tr>
            <th align="right">Estatus:</th>
            <td>{{ $proyecto->status }}</td>
        </tr>
        <tr>
            <th align="right">Observaciones:</th>
            <td>{{ $proyecto->obs }}</td>
        </tr>
        <tr>
            <th align="right">Fecha de creación:</th>
            <td>{{ $proyecto->created_at }}</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <a href="{{ route('proyectos.index') }}" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-arrow-left"></span>Volver</a>
                <a href="{{ route('proyectos.show', $proyecto->codcli) }}" type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-repeat" aria-hiden='true'></span>Recargar</a>
            </td>
        </tr>
    </table>
</div>
@endsection
