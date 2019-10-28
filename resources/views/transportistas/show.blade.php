@extends('app')
@section('content')

<div class='table-responsive-sm'>
    <h2>Razón Social: {{ $transportistas->transportista }}</h2>
    <table class="table table-bordered" id="valores">
        <caption></caption>
        <tr>
            <th align="right">Id:</th>
            <td>{{ $transportistas->idtransp }}</td>
        </tr>
        <tr>
            <th align="right">Nº RACDA:</th>
            <td>{{ $transportistas->racda }}</td>
        </tr>
        <tr>
            <th align="right">Cédula Rep. Legal:</th>
            <td>{{ $transportistas->cedrepre }}</td>
        </tr>
        <tr>
            <th align="right">Representante Legal:</th>
            <td>{{ $transportistas->repleg }}</td>
        </tr>
        <tr>
        <th align="right">Cargo:</th>
            <td>{{ $transportistas->cargo }}</td>
        </tr>        
        <tr>
            <th align="right">Teléfonos:</th>
            <td>{{ $transportistas->tel }}</td>
        </tr>
        <tr>
            <th align="right">Email:</th>
            <td>{{ $transportistas->email }}</td>
        </tr>
        <tr>
            <th align="right">Observaciones:</th>
            <td>{{ $transportistas->obs }}</td>
        </tr>
        <tr>
            <th align="right">Fecha de creación:</th>
            <td>{{ $transportistas->created_at }}</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <a href="{{ route('transportistas.index') }}" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-arrow-left"></span>Volver</a>
                <a href="{{ route('transportistas.show', $transportistas->idtransp) }}" type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-repeat" aria-hiden='true'></span>Recargar</a>
            </td>
        </tr>
    </table>
</div>
@endsection
