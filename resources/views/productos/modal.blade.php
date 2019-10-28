                            <div class="form-group">
                                <label for="producto">Producto</label>
                                <input type="text" name="producto" id="producto" class="form-control" value="" placeholder="Nombre del Producto">
                            </div>

                            <div class="form-group">
                                <label for="idunidad" disabled="true" selected="true">Seleccione una Unidad</label>
                                <select class="form-control" name="idunidad" id="idunidad">
                                    <option value="">Seleccione una Unidad</option>
                                      @foreach($unidadm as $unidad)
                                            <option value="{{ $unidad->idunidad }}">{{ $unidad->unidad }}</option>
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="idedofisico">Estado Físico</label>
                                <select class="form-control" name="idedofisico" id="idedofisico">
                                    <option value="" disabled="true" selected="true">Seleccione un Estado</option>
                                      @foreach($estadof as $estado)
                                            <option value="{{ $estado->idedofisico }}">{{ $estado->edofisico }}</option>
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales"></textarea>
                            </div>