                            <div class="form-group">
                                <label for="idproyecto">Código del Proyecto</label>
                                <input type="text" name="idproyecto" id="idproyecto" class="form-control" value="" placeholder="Código del Proyecto">
                            </div>
                            
                            <div class="form-group">
                                <label for="descri">Descripción</label>
                                <textarea name="descri" id="descri" class="form-control" value="" placeholder="Descripción del Proyecto"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="codcli">Cliente</label>
                                <select class="form-control" name="codcli" id="codcli">
                                    <option value="" disabled="true" selected="true">Seleccione un Cliente</option>
                                      @foreach($clientem as $cliente)
                                        <option value="{{ $cliente->codcli }}">{{ $cliente->nombre }}</option>                                            
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="numcont">Nº de Contrato</label>
                                <input type="text" name="numcont" id="numcont" class="form-control" value="" placeholder="Nº de Contrato">
                            </div>

                            <div class="form-group">
                                <label for="fechacont">Fecha del Contrato</label>
                                <input type="date" name="fechacont" id="fechacont" class="form-control" value="" placeholder="Feha del Contrato">
                            </div>

                            <div class="form-group">
                                <label for="dur">Duración (Días)</label>
                                <input type="number" name="dur" id="dur" class="form-control" value="" placeholder="Duración en días calendario" min="0" step="1">
                            </div>

                            <div class="form-group">
                                <label for="montobol">Monto del Contrato (Bolívares)</label>
                                <input type="number" name="montobol" id="montobol" class="form-control" value="" placeholder="Monto del Contrato en Bolívares" min="0" step="0.01">
                            </div>

                            <div class="form-group">
                                <label for="montodiv">Monto del Contrato (Moneda Extrajera)</label>
                                <input type="number" name="montodiv" id="montodiv" class="form-control" value="" placeholder="Monto del Contrato en Moneda Extrajera" min="0" step="0.01">
                            </div>

                            <div class="form-group">
                                <label for="idmomeda">Moneda</label>
                                <select class="form-control" name="idmomeda" id="idmomeda">
                                    <option value="" disabled="true" selected="true">Seleccione una Moneda</option>
                                    @foreach($monedam as $moneda)
                                        <option value="{{ $moneda->idmomeda }}">{{ $moneda->moneda }}</option>                                            
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tasa">Tasa de Cambio</label>
                                <input type="number" name="tasa" id="tasa" class="form-control" value="" placeholder="Tasa de Cambio Oficial (BCV)" min="0" step="0.0001">
                            </div>

                            <div class="form-group">
                                <label for="fechatasa">Fecha de la Tasa</label>
                                <input type="date" class="form-control" name="fechatasa" id="fechatasa" value="" placeholder="Fecha de la Tasa">   
                            </div>

                            <div class="form-group">
                                <label for="impsino">Aplica el Impuesto?</label>
                                <input type="number" name="impsino" id="impsino" class="form-control" value="" placeholder="Aplica el Impuesto de Ley?" min="0" step="1">
                            </div>

                            <div class="form-group">
                                <label for="porimp">% del Impuesto de Ley</label>
                                <input type="number" name="porimp" id="porimp" class="form-control" value="" placeholder="% del Impuesto de Ley" min="0" step="0.01">
                            </div>

                            <div class="form-group">
                                <label for="nomimp">Nombre del Impuesto</label>
                                <input type="text" name="nomimp" id="nomimp" class="form-control" value="" placeholder="Nombre del Impuesto de Ley">
                            </div>

                            <div class="form-group">
                                <label for="idtipcont">Tipo de Contrato</label>
                                <select class="form-control" name="idtipcont" id="idtipcont">
                                    <option value="" disabled="true" selected="true">Seleccione un Tipo de Contrato</option>
                                      @foreach($tipocm as $tipocont)
                                        <option value="{{ $tipocont->idtipcont }}">{{ $tipocont->tipoc }}</option>
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="idpais">País</label>
                                <select class="form-control" name="idpais" id="idpais">
                                    <option value="" disabled="true" selected="true">Seleccione un País</option>
                                      @foreach($pais as $pais)
                                            <option value="{{ $pais->idpais }}">{{ $pais->pais }}</option>
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group" id='estados_div' style="display: none;">
                                <label for="idestado">Estado</label>
                                <select class="form-control" name="idestado" id="idestado">
                                    <option value="" disabled="true" selected="true">Seleccione un Estado</option>
                                </select>
                            </div>

                            <div class="form-group" id='municipios_div' style="display: none;">
                                <label for="idmunicipio">Municipio</label>
                                <select class="form-control" name="idmunicipio" id="idmunicipio">
                                    <option value="" disabled="true" selected="true">Seleccione un Municipio</option>
                                </select>
                            </div>

                            <div class="form-group" id='parroquias_div' style="display: none;">
                                <label for="idparroquia">Parroquia</label>
                                <select class="form-control" name="idparroquia" id="idparroquia">
                                    <option value="" disabled="true" selected="true">Seleccione una Parroquia</option>
                                </select>
                            </div>

                            <div class="form-group" id='ciudades_div' style="display: none;">
                                <label for="idciudad">Ciudad</label>
                                <select class="form-control" name="idciudad" id="idciudad">
                                    <option value="" disabled="true" selected="true">Seleccione una Ciudad</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" value="" placeholder="Dirección donde se realiza el Proyecto">
                            </div>

                            <div class="form-group">
                                <label for="estatus">Estatus</label>
                                <input type="number" name="estatus" id="estatus" class="form-control" value="" placeholder="Estatus del Contrato" step="1">
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" value="" placeholder="Observaciones generales"></textarea>
                            </div>
                            