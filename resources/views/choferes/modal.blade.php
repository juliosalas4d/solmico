							<div class="form-group">
								<label for="cedcho">Cédula de Identidad</label>
								<input type="number" name="cedcho" id="cedcho" class="form-control" value="" placeholder="Cédula de Identidad (Solo números)" required="true">
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
								<label for="tel">Teléfonos</label>
								<input type="tel" name="tel" id="tel" class="form-control" value="" placeholder="Indique el Teléfono. Emeplo: +58 424-1234567">
							</div>	

							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="" placeholder="Dirección de correo electrónico">	
							</div>

							<div class="form-group">
								<label for="obs">Observaciones</label>
								<textarea name="obs" class="form-control" placeholder="Observaciones generales"></textarea>
							</div>