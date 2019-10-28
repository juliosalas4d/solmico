                            <div class="form-group">
                                <label for="lote">Lote</label>
                                <input type="text" name="lote" id="lote" class="form-control" value="" placeholder="Número de Lote. Ejemplo: SOL-00-000000">
                            </div>

                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input type="date" name="fecha" id="fecha" class="form-control" value="" placeholder="Fecha del Lote">
                            </div>
                            
                            <div class="form-group">
                                <label for="idproducto">Produto</label>
                                <select class="form-control" name="idproducto" id="idproducto">
                                    <option value="">Seleccione un Producto</option>
                                      @foreach($productom as $producto)
                                            <option value="{{ $producto->idproducto }}">{{ $producto->producto }}</option>
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="idunidad">Unidad</label>
                                <select class="form-control" name="idunidad" id="idunidad">
                                    <option value="">Seleccione una Unidad</option>
                                      @foreach($unidadm as $unidad)
                                            <option value="{{ $unidad->idunidad }}">{{ $unidad->unidad }}</option>
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="cant">Cantidad</label>
                                <input type="number" name="cant" id="cant" class="form-control" value="" placeholder="Cantidad del lote">
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales"></textarea>
                            </div>
