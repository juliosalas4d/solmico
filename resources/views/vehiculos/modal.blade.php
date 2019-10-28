                            <div class="form-group">
                                <label for="placas">Placas</label>
                                <input type="text" name="placas" id="placas" class="form-control" value="" placeholder="Placas de la unidad">
                            </div>
                            
                            <div class="form-group">
                                <label for="descri">Descripción</label>
                                <input type="text" name="descri" id="descri" class="form-control" value="" placeholder="Descripción">
                            </div>

                            <div class="form-group">
                                <label for="idtiptra">Tipo de Transporte</label>
                                <select class="form-control" name="idtiptra" id="idtiptra">
                                    <option value="" disabled="true" selected="true">Seleccione un Tipo</option>
                                      @foreach($tipo as $tipo)
                                            <option value="{{ $tipo->idtiptra }}">{{ $tipo->tipotra }}</option>
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="idtransp">Transportista</label>
                                <select class="form-control" name="idtransp" id="idtransp">
                                    <option value="" disabled="true" selected="true">Seleccione un Transportista</option>
                                      @foreach($transpm as $transportista)
                                            <option value="{{ $transportista->idtransp }}">{{ $transportista->transportista }}</option>
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="clase">Clase</label>
                                <input type="text" name="clase" id="clase" class="form-control" value="" placeholder="Clase">
                            </div>

                            <div class="form-group">
                                <label for="marca">Marca</label>
                                <input type="marca" name="marca" id="marca" class="form-control" value="" placeholder="Marca">
                            </div>

                            <div class="form-group">
                                <label for="ano">Año</label>
                                <input type="number" class="form-control" name="ano" id="ano" value="" placeholder="Año"> 
                            </div>

                            <div class="form-group">
                                <label for="capacidad">Capacidad</label>
                                <input type="number" class="form-control" name="capacidad" id="capacidad" value="" placeholder="Capacidad"> 
                            </div>

                            <div class="form-group">
                                <label for="idunidad">Unidad</label>
                                <select class="form-control" name="idunidad" id="idunidad">
                                    <option value="" disabled="true" selected="true">Seleccione una Unidad</option>
                                      @foreach($unidadm as $unidad)
                                            <option value="{{ $unidad->idunidad }}">{{ $unidad->unidad }}</option>
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="modelo">Modelo</label>
                                <input type="text" class="form-control" name="modelo" id="modelo" value="" placeholder="Modelo"> 
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales"></textarea>
                            </div>