@extends('app')
@section('content')

<section class="content">
	<div class="col-md-12">
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		@if(Session::has('notice'))
			<div class="alert alert-success">
				{{Session::get('notice')}}
			</div>
		@endif

		@if($autoriza->cedaut == NULL)
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Autorizado</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('autoriza.store') }}" role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="POST">

							<div class="form-group">
								<label for="cedaut">Cédula de Identidad</label>
								<input type="number" name="cedaut" id="cedaut" class="form-control" value="" placeholder="Cédula de Identidad (Solo números)" required="true">
							</div>

							<div class="form-group">
								<label for="nombre">Nombres</label>
								<input type="text" name="nombre" id="nombre" class="form-control" value="" placeholder="Nombre y Apellido"  required="true">
							</div>
							
							<div class="form-group">
								<label for="idpais">País de Origen</label>
								<select class="form-control" name="idpais" id="idpais">
									<option value="" disabled="true" selected="true">Seleccione un País</option>
									  @foreach($pais as $pais)
									  	@if( $pais->idpais == 229)
											<option value="{{ $pais->idpais }}" selected>{{ $pais->pais }}</option>
										@else
											<option value="{{ $pais->idpais }}">{{ $pais->pais }}</option>
										@endif
									  @endforeach
								</select>
							</div>

							<div class="form-group">
								<label for="ger">Gerencia</label>
								<input type="text" name="ger" id="ger" class="form-control" value="" placeholder="Indique a que Gerencia pertenece el Autorizado">
							</div>

							<div class="form-group">
								<label for="cargo">Cargo</label>
								<input type="text" name="cargo" id="cargo" class="form-control" value="" placeholder="Indique el Cargo del Autorizado">
							</div>							

							<div class="form-group">
								<label for="tel">Teléfonos</label>
								<input type="tel" name="tel" id="tel" class="form-control" value="" placeholder="Indique el Teléfono. Emeplo: +58 424-1234567" pattern="+[0-9]{2} [0-9]{3}-[0-9]{7}">
							</div>	

							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="" placeholder="Dirección de correo electrónico">	
							</div>

							<div class="form-group">
								<label for="obs">Observaciones</label>
								<textarea name="obs" class="form-control" placeholder="Observaciones generales"></textarea>
							</div>

							<div class="form-group" align="center">
								<a class="button" href="{{ route('autoriza.index') }}">Atrás</a>
								<input class="button warning" type="reset" value="Refrescar">
								<input class="button success" type="submit" value="Guardar">
							</div>		  
						</form>						
					</div>
				</div>
			</div>
		@else

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Edición de Autorizado</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('autoriza.update',$autoriza->cedaut) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">

							<div class="form-group">
								<label for="nombre">Nombres</label>
								<input type="text" name="nombre" id="nombre" class="form-control" value="{{$autoriza->nombre}}" placeholder="Nombre y Apellido">
							</div>
							
							<div class="form-group">
								<label for="idpais">País de Origen</label>
								<select class="form-control" name="idpais" id="idpais">
									<option value="" disabled="true" selected="true">Seleccione un País</option>
									  @foreach($pais as $pais)
									  	@if( $autoriza->idpais  ==  $pais->idpais )
											<option value="{{ $autoriza->idpais }}" selected>{{ $pais->pais }}</option>
									  	@else
											<option value="{{ $pais->idpais }}">{{ $pais->pais }}</option>
										@endif
									  @endforeach
								</select>
							</div>

							<div class="form-group">
								<label for="ger">Gerencia</label>
								<input type="text" name="ger" id="ger" class="form-control" value="{{ $autoriza->ger }}" placeholder="Indique a que Gerencia pertenece el Autorizado">
							</div>

							<div class="form-group">
								<label for="cargo">Cargo</label>
								<input type="text" name="cargo" id="cargo" class="form-control" value="{{ $autoriza->cargo }}" placeholder="Indique el Cargo del Autorizado">
							</div>

							<div class="form-group">
								<label for="tel">Teléfonos</label>
								<input type="tel" name="tel" id="tel" class="form-control" value="{{ $autoriza->tel }}" placeholder="Indique el Teléfono. Emeplo: +58 424-6883287" pattern="+[0-9]{2} [0-9]{3}-[0-9]{7}">
							</div>	

							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{ $autoriza->email }}" placeholder="Dirección de correo electrónico">	
							</div>

							<div class="form-group">
								<label for="obs">Observaciones</label>
								<textarea name="obs" class="form-control" placeholder="Observaciones generales">{{ $autoriza->obs }}</textarea>
							</div>

							<div class="form-group" align="center">
								<a class="button info" href="{{ route('autoriza.index') }}">Atrás</a>
								<button class="button success" type="submit" >Actualizar</button>
							</div>		  
						</form>						
					</div>
				</div>
			</div>
		@endif
	</div>
</section>

@endsection
