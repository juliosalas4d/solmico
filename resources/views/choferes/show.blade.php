@extends('app')
@section('content')

<div class='table-responsive-sm'>
	<h2>Chofer: {{ $choferes->nombre }}</h2>
	<table class="table table-bordered" id="valores">
		<caption></caption>
		<tr>
			<th align="right">Cédula:</th>
			<td>{{ number_format($choferes->cedcho, 0, ',', '.') }}</td>
		</tr>
		<tr>
			<th align="right">País de origen:</th>
			<td>{{ $choferes->idpais }}</td>
		</tr>
		<tr>
			<th align="right">Teléfonos:</th>
			<td>{{ $choferes->tel }}</td>
		</tr>
		<tr>
			<th align="right">Email:</th>
			<td>{{ $choferes->email }}</td>
		</tr>
		<tr>
			<th align="right">Observaciones:</th>
			<td>{{ $choferes->obs }}</td>
		</tr>
		<tr>
			<th align="right">Fecha de creación:</th>
			<td>{{ $choferes->created_at }}</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<a href="{{ route('choferes.index') }}" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-arrow-left"></span>Volver</a>
				<a href="{{ route('choferes.show', $choferes->cedcho) }}" type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon glyphicon-repeat" aria-hiden='true'></span>Recargar</a>
			</td>		
		</tr>
	</table>
</div>

@endsection
