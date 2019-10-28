@extends('app')
@section('content')

<div class='table-responsive-sm'>
	<h2>Autorizado: {{ $autoriza->nombre }}</h2>
	<table class="table table-bordered" id="valores">
		<caption></caption>
		<tr>
			<th align="right">Cédula:</th>
			<td>{{ number_format($autoriza->cedaut, 0, ',', '.') }}</td>
		</tr>
		<tr>
			<th align="right">Gerencia:</th>
			<td>{{ $autoriza->ger }}</td>
		</tr>
		<tr>
			<th align="right">Cargo:</th>
			<td>{{ $autoriza->cargo }}</td>
		</tr>
		<tr>
			<th align="right">Teléfonos:</th>
			<td>{{ $autoriza->tel }}</td>
		</tr>
		<tr>
			<th align="right">Email:</th>
			<td>{{ $autoriza->email }}</td>
		</tr>
		<tr>
			<th align="right">Observaciones:</th>
			<td>{{ $autoriza->obs }}</td>
		</tr>
		<tr>
			<th align="right">Fecha de creación:</th>
			<td>{{ $autoriza->created_at }}</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<a href="{{ route('autoriza.index') }}" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-arrow-left"></span> Volver</a>
				<a href="{{ route('autoriza.show', $autoriza->cedaut) }}" type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon glyphicon-repeat"></span> Recargar</a></td>
		</tr>
	</table>
</div>
@endsection
