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

        @if($despacho->iddesp == NULL)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevo Despacho</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('despachos.store') }}" role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="POST">

                            <div class="form-group">
                                <label for="iddesp">Nº Despacho</label>
                                <input type="number" name="iddesp" id="iddesp" class="form-control" value="{{ $nd + 1}}" placeholder="Nº del Despacho" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="fechasal">Fecha</label>
                                <input type="date" name="fechasal" id="fechasal" class="form-control" value="" placeholder="Fecha" required>
                            </div>

                            <div class="form-group">
                                <label for="idproducto">Producto</label>
                                <select class="form-control" name="idproducto" id="idproducto" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Producto</option>
                                      @foreach($producto as $producto)
                                            <option value="{{ $producto->idproducto }}">{{ $producto->producto }}</option>
                                      @endforeach
                                </select>
                                <!-- Botón de Nuevo Producto en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#productoModal">
                                    Nuevo Producto
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="idproyecto">Proyecto</label>
                                <select class="form-control" name="idproyecto" id="idproyecto" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Proyecto</option>
                                      @foreach($proyecto as $proyecto)
                                            <option value="{{ $proyecto->idproyecto }}" title="{{ $proyecto->descri }}">{{ $proyecto->idproyecto }} - {{ $proyecto->descri }}</option>
                                      @endforeach
                                </select>
                                <!-- Botón de Nuevo Proyecto en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#proyectoModal">
                                    Nuevo Proyecto
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="idlote">Lote</label>
                                <select class="form-control" name="idlote" id="idlote" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Lote</option>
                                        @foreach($lote as $lote)
                                            <option value="{{ $lote->idlote }}">{{ $lote->lote }}</option>
                                      @endforeach
                                </select>
                                <!-- Botón de Nuevo Lote en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#loteModal">
                                    Nuevo Lote
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="arearec_1">Área de Recepción Nº 1</label>
                                <input type="text" name="arearec_1" id="arearec_1" class="form-control" value="" placeholder="Área de Recepción Nº 1" autocomplete="true" required>
                            </div>

                            <div class="form-group">
                                <label for="arearec_2">Área de Recepción Nº 2</label>
                                <input type="text" name="arearec_2" id="arearec_2" class="form-control" value="" placeholder="Área de Recepción Nº 2" autocomplete="true">
                            </div>

                            <div class="form-group">
                                <label for="arearec_3">Área de Recepción Nº 3</label>
                                <input type="text" name="arearec_3" id="arearec_3" class="form-control" value="" placeholder="Área de Recepción Nº 3">
                            </div>

                            <div class="form-group">
                                <label for="cant_des">Volumen Despachado</label>
                                <input type="number" name="cant_des" id="cant_des" class="form-control" value="" placeholder="Volumen Despacho" min="0" step="1" required>
                            </div>

                            <div class="form-group">
                                <label for="idunidad">Unidad</label>
                                <select class="form-control" name="idunidad" id="idunidad" required>
                                    <option value="" disabled="true" selected="true">Seleccione una Unidad</option>
                                        @foreach($unidad as $unidad)
                                            <option value="{{ $unidad->idunidad }}">{{ $unidad->unidad }}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="idtransp">Transportista</label>
                                <select class="form-control" name="idtransp" id="idtransp" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Transportista</option>
                                        @foreach($transportista as $transportista)
                                            <option value="{{ $transportista->idtransp }}">{{ $transportista->transportista }}</option>
                                        @endforeach
                                </select>
                                <!-- Botón de Nuevo Transportista en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#transportistaModal">
                                    Nuevo Transportista
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="placach">Vehículo</label>
                                <select class="form-control" name="placach" id="placach" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Vehículo</option>
                                        @foreach($chuto as $chuto)
                                            <option value="{{ $chuto->placas }}">{{ $chuto->placas }} - {{ $chuto->descri }}</option>
                                        @endforeach
                                </select>
                                <!-- Botón de Nuevo Lote en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#vehiculoModal">
                                    Nuevo Vehículo
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="placare">Remolque (Si aplica)</label>
                                <select class="form-control" name="placare" id="placare">
                                    <option value="" disabled="true" selected="true">Seleccione un Remolque</option>
                                        @foreach($remolque as $remolque)
                                            <option value="{{ $remolque->placas }}">{{ $remolque->placas }} - {{ $remolque->descri }}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="cedcho">Chofer</label>
                                <select class="form-control" name="cedcho" id="cedcho" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Chofer</option>
                                        @foreach($chofer as $chofer)
                                            <option value="{{ $chofer->cedcho }}">{{ number_format($chofer->cedcho, 0, ',', '.') }} - {{ $chofer->nombre }}</option>
                                        @endforeach
                                </select>
                                <!-- Botón de Nuevo Lote en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#choferModal">
                                  Nuevo Chofer
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="cedaut">Despachador</label>
                                <select class="form-control" name="cedaut" id="cedaut" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Despachador</option>
                                        @foreach($autorizado as $autorizado)
                                            <option value="{{ $autorizado->cedaut }}">{{ number_format($autorizado->cedaut, 0, ',', '.') }} - {{ $autorizado->nombre }}</option>
                                        @endforeach
                                </select>
                                <!-- Botón de Nuevo Autorizado en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#autorizaModal">
                                  Nuevo Despachador
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="prescintos">Prescintos</label>
                                <input type="text" name="prescintos" id="prescintos" class="form-control" value="" placeholder="Ingrese los números de los Prescintos">
                            </div>

                            <div class="form-group">
                                <label for="boleto">Boleto Romana</label>
                                <input type="text" name="boleto" id="boleto" class="form-control" value="" placeholder="Nº del Boleto">
                            </div>

                            <div class="form-group">
                                <label for="tara">Peso Tara</label>
                                <input type="number" class="form-control" name="tara" id="tara" value="0" placeholder="Peso de Tara" min="0">   
                            </div>

                            <div class="form-group">
                                <label for="bruto">Peso Bruto</label>
                                <input type="number" name="bruto" id="bruto" class="form-control" value="0" placeholder="Peso bruto" min="0">
                            </div>

                            <div class="form-group">
                                <label for="nde">Nota de Entrega</label>
                                <input type="text" name="nde" id="nde" class="form-control" value="" placeholder="Nota de Entrega">
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales"></textarea>
                            </div>

                            <div class="form-group" align="center">
                                <a class="button" href="{{ route('despachos.index') }}">Atrás</a>
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
                    <h3 class="panel-title">Edición de Despacho</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('despachos.update', $despacho->iddesp) }}"  role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">
                            
                            <div class="form-group">
                                <label for="iddesp">Nº Despacho</label>
                                <input type="number" name="iddesp" id="iddesp" class="form-control" value="{{ $despacho->iddesp }}" placeholder="Nº del Despacho" disabled="true" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="fechasal">Fecha</label>
                                <input type="date" name="fechasal" id="fechasal" class="form-control" value="{{ $despacho->fechasal }}" placeholder="Fecha" required>
                            </div>

                            <div class="form-group">
                                <label for="idproducto">Producto</label>
                                <select class="form-control" name="idproducto" id="idproducto" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Producto</option>
                                      @foreach($producto as $producto)
                                        @if( $despacho->idproducto  ==  $producto->idproducto )
                                            <option value="{{ $despacho->idproducto }}" selected>{{ $producto->producto }}</option>
                                        @else
                                            <option value="{{ $producto->idproducto }}">{{ $producto->producto }}</option>
                                        @endif
                                      @endforeach
                                </select>
                                <!-- Botón de Nuevo Producto en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#productoModal">
                                    Nuevo Producto
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="idproyecto">Proyecto</label>
                                <select class="form-control" name="idproyecto" id="idproyecto" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Proyecto</option>
                                      @foreach($proyecto as $proyecto)
                                        @if( $despacho->idproyecto  ==  $proyecto->idproyecto )
                                            <option value="{{ $despacho->idproyecto }}"  title="{{ $proyecto->descri }}" selected>{{ $proyecto->idproyecto }}</option>
                                        @else
                                            <option value="{{ $proyecto->idproyecto }}" title="{{ $proyecto->descri }}">{{ $proyecto->idproyecto }} - {{ $proyecto->descri }}</option>
                                        @endif
                                      @endforeach
                                </select>
                                <!-- Botón de Nuevo Proyecto en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#proyectoModal">
                                    Nuevo Proyecto
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="idlote">Lote</label>
                                <select class="form-control" name="idlote" id="idlote" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Lote</option>
                                        @foreach($lote as $lote)
                                            @if( $despacho->idlote  ==  $lote->idlote )
                                                <option value="{{ $despacho->idlote }}" selected>{{ $lote->lote }}</option>
                                            @else
                                                <option value="{{ $lote->idlote }}">{{ $lote->lote }}</option>
                                            @endif
                                        @endforeach
                                </select>
                                <!-- Botón de Nuevo Lote en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#loteModal">
                                    Nuevo Lote
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="arearec_1">Área de Recepción Nº 1</label>
                                <input type="text" name="arearec_1" id="arearec_1" class="form-control" value="{{ $despacho->arearec_1 }}" placeholder="Área de Recepción Nº 1" autocomplete="true" required>
                            </div>

                            <div class="form-group">
                                <label for="arearec_2">Área de Recepción Nº 2</label>
                                <input type="text" name="arearec_2" id="arearec_2" class="form-control" value="{{ $despacho->arearec_2 }}" placeholder="Área de Recepción Nº 2" autocomplete="true">
                            </div>

                            <div class="form-group">
                                <label for="arearec_3">Área de Recepción Nº 3</label>
                                <input type="text" name="arearec_3" id="arearec_3" class="form-control" value="{{ $despacho->arearec_3 }}" placeholder="Área de Recepción Nº 3">
                            </div>

                            <div class="form-group">
                                <label for="cant_des">Volumen Despachado</label>
                                <input type="number" name="cant_des" id="cant_des" class="form-control" value="{{ $despacho->cant_des }}" placeholder="Volumen Despacho" min="0" step="1" required>
                            </div>

                            <div class="form-group">
                                <label for="idunidad">Unidad</label>
                                <select class="form-control" name="idunidad" id="idunidad" required>
                                    <option value="" disabled="true" selected="true">Seleccione una Unidad</option>
                                        @foreach($unidad as $unidad)
                                            @if( $despacho->idunidad  ==  $unidad->idunidad )
                                                <option value="{{ $despacho->idunidad }}" selected>{{ $unidad->unidad }}</option>
                                            @else
                                                <option value="{{ $unidad->idunidad }}">{{ $unidad->unidad }}</option>
                                            @endif
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="cant_ent">Volumen Entregado</label>
                                <input type="number" name="cant_ent" id="cant_ent" class="form-control" value="{{ $despacho->cant_ent }}" placeholder="Volumen Entregado" min="0" step="1" required>
                            </div>

                            <div class="form-group">
                                <label for="idtransp">Transportista</label>
                                <select class="form-control" name="idtransp" id="idtransp" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Transportista</option>
                                        @foreach($transportista as $transportista)
                                            @if( $despacho->idtransp  ==  $transportista->idtransp )
                                                <option value="{{ $despacho->idtransp }}" selected>{{ $transportista->transportista }}</option>
                                            @else
                                                <option value="{{ $transportista->idtransp }}">{{ $transportista->transportista }}</option>
                                            @endif
                                        @endforeach
                                </select>
                                <!-- Botón de Nuevo Transportista en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#transportistaModal">
                                    Nuevo Transportista
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="placach">Vehículo</label>
                                <select class="form-control" name="placach" id="placach" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Vehículo</option>
                                        @foreach($chuto as $chuto)
                                            @if( $despacho->placach  ==  $chuto->placas )
                                                <option value="{{ $despacho->placach }}" selected>{{ $despacho->placach }} - {{ $chuto->descri }}</option>
                                            @else
                                                <option value="{{ $chuto->placas }}">{{ $chuto->placas }} - {{ $chuto->descri }}}</option>
                                            @endif
                                        @endforeach
                                </select>
                                <!-- Botón de Nuevo Lote en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#vehiculoModal">
                                    Nuevo Vehículo
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="placare">Remolque (Si aplica)</label>
                                <select class="form-control" name="placare" id="placare">
                                    <option value="" disabled="true" selected="true">Seleccione un Remolque</option>
                                        @foreach($remolque as $remolque)
                                            @if( $despacho->placare  ==  $remolque->placas )
                                                <option value="{{ $despacho->placare }}" selected>{{ $despacho->placare }} - {{ $remolque->descri }}</option>
                                            @else
                                                <option value="{{ $remolque->placas }}">{{ $remolque->placas }} - {{ $remolque->descri }}}</option>
                                            @endif
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="cedcho">Chofer</label>
                                <select class="form-control" name="cedcho" id="cedcho" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Chofer</option>
                                        @foreach($chofer as $chofer)
                                            @if( $despacho->cedcho  ==  $chofer->cedcho )
                                                <option value="{{ $despacho->cedcho }}" selected>{{ number_format($chofer->cedcho, 0, ',', '.') }} - {{ $chofer->nombre }}</option>
                                            @else
                                                <option value="{{ $chofer->cedcho }}">{{ number_format($chofer->cedcho, 0, ',', '.') }} - {{ $chofer->nombre }}</option>
                                            @endif
                                        @endforeach
                                </select>
                                <!-- Botón de Nuevo Lote en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#choferModal">
                                  Nuevo Chofer
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="cedaut">Despachador</label>
                                <select class="form-control" name="cedaut" id="cedaut" required>
                                    <option value="" disabled="true" selected="true">Seleccione un Despachador</option>
                                        @foreach($autorizado as $autorizado)
                                            @if( $despacho->cedaut  ==  $autorizado->cedaut )
                                                <option value="{{ $despacho->cedaut }}" selected>{{ number_format($autorizado->cedaut, 0, ',', '.') }} - {{ $autorizado->nombre }}</option>
                                            @else
                                                <option value="{{ $autorizado->cedaut }}">{{ number_format($autorizado->cedaut, 0, ',', '.') }} - {{ $autorizado->nombre }}</option>
                                            @endif
                                        @endforeach
                                </select>
                                <!-- Botón de Nuevo Autorizado en Formulario Modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#autorizaModal">
                                  Nuevo Despachador
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="prescintos">Prescintos</label>
                                <input type="text" name="prescintos" id="prescintos" class="form-control" value="{{ $despacho->prescintos }}" placeholder="Ingrese los números de los Prescintos">
                            </div>

                            <div class="form-group">
                                <label for="boleto">Boleto Romana</label>
                                <input type="text" name="boleto" id="boleto" class="form-control" value="{{ $despacho->boleto }}" placeholder="Nº del Boleto">
                            </div>

                            <div class="form-group">
                                <label for="tara">Peso Tara</label>
                                <input type="number" class="form-control" name="tara" id="tara" value="{{ $despacho->tara }}" placeholder="Peso de Tara" min="0">   
                            </div>

                            <div class="form-group">
                                <label for="bruto">Peso Bruto</label>
                                <input type="number" name="bruto" id="bruto" class="form-control" value="{{ $despacho->bruto }}" placeholder="Peso bruto" min="0">
                            </div>

                            <div class="form-group">
                                <label for="nde">Nota de Entrega</label>
                                <input type="text" name="nde" id="nde" class="form-control" value="{{ $despacho->nde }}" placeholder="Nota de Entrega">
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales">{{ $despacho->obs }}</textarea>
                            </div>

                             <div class="form-group">
                                @if($despacho->activo == 1)
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="{{ $despacho->activo }}" checked>
                                @else
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="0">
                                @endif
                                ¿Registro Activo?
                            </div>

                            <div class="form-group" align="center">
                                <a class="button info" href="{{ route('despachos.index') }}">Atrás</a>
                                <button class="button success" type="submit" >Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        @endif

                            <!-- Formulario Nuevo Producto Modal -->
                            <form method="POST" name="form_modal" id="form-modal" action="{{ route('productos.store') }}" role="form">
                            {{ csrf_field() }}
                                <input name="_method" type="hidden" value="POST">
                                <div class="modal fade" id="productoModal" tabindex="-1" role="dialog" aria-labelledby="productoModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="productoModalLabel">Nuevo Producto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <!-- Aqui comienza el Modal -->
                                        
                                        @include('/productos/modal')

                                        <!-- Aqui finaliza el Modal -->
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <input class="btn btn-success" type="submit" id="submit-form" value="Guardar">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </form> <!-- Fin Formulario -->

                            <!-- Formulario Nuevo Lote Modal -->
                            <form method="GET" name="form_modal" id="form-modal" action="{{ route('lotes.store') }}" role="form">
                            {{ csrf_field() }}
                                <input name="_method" type="hidden" value="GET">
                                <div class="modal fade" id="loteModal" tabindex="-1" role="dialog" aria-labelledby="loteModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="loteModalLabel">Nuevo Lote</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <!-- Aqui comienza el Modal -->

                                        @include('/lotes/modal')

                                        <!-- Aqui finaliza el Modal -->

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <input class="btn btn-success" type="submit" id="submit-form" value="Guardar">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </form> <!-- Fin formulario -->

                            <!-- Formulario Nuevo Transportista Modal -->
                            <form method="POST" name="form_modal" id="form-modal" action="{{ route('productos.store') }}" role="form">
                            {{ csrf_field() }}
                                <input name="_method" type="hidden" value="POST">
                                <div class="modal fade" id="transportistaModal" tabindex="-1" role="dialog" aria-labelledby="transportistaModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="productoModalLabel">Nuevo Transportista</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <!-- Aqui comienza el Modal -->
                                        
                                        @include('/transportistas/modal')

                                        <!-- Aqui finaliza el Modal -->
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <input class="btn btn-success" type="submit" id="submit-form" value="Guardar">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </form> <!-- Fin Formulario -->

                            <!-- Formulario Nuevo Vehiculo Modal -->
                            <form method="GET" name="form_modal" id="form-modal" action="{{ route('lotes.store') }}" role="form">
                            {{ csrf_field() }}
                                <input name="_method" type="hidden" value="GET">
                                <div class="modal fade" id="vehiculoModal" tabindex="-1" role="dialog" aria-labelledby="vehiculoModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="loteModalLabel">Nuevo Vehículo</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <!-- Aqui comienza el Modal -->

                                        @include('/vehiculos/modal')

                                        <!-- Aqui finaliza el Modal -->

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <input class="btn btn-success" type="submit" id="submit-form" value="Guardar">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </form> <!-- Fin Formulario -->

                            <!-- Formulario Nuevo Chofer Modal -->
                            <form method="POST" name="form_modal" id="form-modal" action="{{ route('productos.store') }}" role="form">
                            {{ csrf_field() }}
                                <input name="_method" type="hidden" value="POST">
                                <div class="modal fade" id="choferModal" tabindex="-1" role="dialog" aria-labelledby="chiferModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="productoModalLabel">Nuevo Chofer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <!-- Aqui comienza el Modal -->
                                        
                                        @include('/choferes/modal')

                                        <!-- Aqui finaliza el Modal -->
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <input class="btn btn-success" type="submit" id="submit-form" value="Guardar">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </form> <!-- Fin Formulario -->

                            <!-- Formulario Nuevo Autorizado Modal -->
                            <form method="GET" name="form_modal" id="form-modal" action="{{ route('lotes.store') }}" role="form">
                            {{ csrf_field() }}
                                <input name="_method" type="hidden" value="GET">
                                <div class="modal fade" id="autorizaModal" tabindex="-1" role="dialog" aria-labelledby="autorizaModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="loteModalLabel">Nuevo Despachador</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <!-- Aqui comienza el Modal -->

                                        @include('/autoriza/modal')

                                        <!-- Aqui finaliza el Modal -->

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <input class="btn btn-success" type="submit" id="submit-form" value="Guardar">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </form> <!-- Fin Formulario Nuevo LoteModal -->

                            <!-- Formulario Nuevo Producto Modal -->
                            <form method="POST" name="form_modal" id="form-modal" action="{{ route('proyectos.store') }}" role="form">
                            {{ csrf_field() }}
                                <input name="_method" type="hidden" value="POST">
                                <div class="modal fade" id="proyectoModal" tabindex="-1" role="dialog" aria-labelledby="proyectoModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="proyectoModalLabel">Nuevo Proyecto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <!-- Aqui comienza el Modal -->
                                        
                                        @include('/proyectos/modal')

                                        <!-- Aqui finaliza el Modal -->
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <input class="btn btn-success" type="submit" id="submit-form" value="Guardar">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </form> <!-- Fin Formulario -->

    </div>
</section>

@endsection
