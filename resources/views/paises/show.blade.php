@extends('app')
@section('content')

<div class='table-responsive-sm'>
    <h2>País: {{ $pais->pais }}</h2>
    <table class="table table-bordered" id="valores">
        <caption></caption>
        <tr>
            <th align="right">Id:</th>
            <td>{{ $pais->idpais }}</td>
        </tr>
        <tr>
            <th align="right">Idioma:</th>
            <td>{{ $pais->ididioma }}</td>
        </tr>
        <tr>
            <th align="right">Moneda:</th>
            <td>{{ $pais->idmoneda }}</td>
        </tr>
        <tr>
            <th align="right">Descripción del País:</th>
            <td>{{ $pais->descri }}</td>
        </tr>
        <tr>
        <th align="right">Código ISO:</th>
            <td>{{ $pais->codpais }}</td>
        </tr>        
        <tr>
            <th align="right">Código Teléfono:</th>
            <td>{{ $pais->codtel }}</td>
        </tr>
        <tr>
            <th align="right">Dígitos IBAN:</th>
            <td>{{ $pais->ibandigitos }}</td>
        </tr>
        <tr>
            <th align="right">País IBAN:</th>
            <td>{{ $pais->ibanpais }}</td>
        </tr>        
        <tr>
            <th align="right">Observaciones:</th>
            <td>{{ $pais->obs }}</td>
        </tr>
        <tr>
            <th align="right">Fecha de creación:</th>
            <td>{{ $pais->created_at }}</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <a href="{{ route('paises.index') }}" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-arrow-left"></span>Volver</a>
                <a href="{{ route('paises.show', $pais->idpais) }}" type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-repeat" aria-hiden='true'></span>Recargar</a>
            </td>
        </tr>
    </table>
</div>
@endsection
