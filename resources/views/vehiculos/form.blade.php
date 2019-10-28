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

        @if($vehiculo->placas == NULL)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevo Vehículo</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('vehiculos.store') }}" role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="POST">

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
                                      @foreach($transportista as $transportista)
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
                                      @foreach($unidad as $unidad)
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

                            <div class="form-group" align="center">
                                <a class="button" href="{{ route('vehiculos.index') }}">Atrás</a>
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
                    <h3 class="panel-title">Edición de Vehículo</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('vehiculos.update', $vehiculo->placas) }}"  role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">

                            <div class="form-group">
                                <label for="placas">Placas</label>
                                <input type="text" name="placas" id="placas" class="form-control" value="{{ $vehiculo->placas }}" placeholder="Placas">
                            </div>
                            
                            <div class="form-group">
                                <label for="descri">Descripción</label>
                                <input type="text" name="descri" id="descri" class="form-control" value="{{ $vehiculo->descri }}" placeholder="Descripción">
                            </div>

                            <div class="form-group">
                                <label for="idtiptra">Tipo de Transporte</label>
                                <select class="form-control" name="idtiptra" id="idtiptra">
                                    <option value="" disabled="true" selected="true">Tipo de Transporte</option>
                                      @foreach($tipo as $tipo)
                                        @if( $vehiculo->idtiptra  ==  $tipo->idtiptra )
                                            <option value="{{ $vehiculo->idtiptra }}" selected>{{ $tipo->tipotra }}</option>
                                        @else
                                            <option value="{{ $tipo->idtiptra }}">{{ $tipo->tipotra }}</option>
                                        @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="idtransp">Transportista</label>
                                <select class="form-control" name="idtransp" id="idtransp">
                                    <option value="" disabled="true" selected="true">Seleccione un Transportista</option>
                                      @foreach($transportista as $transportista)
                                        @if( $vehiculo->idtransp  ==  $transportista->idtransp )
                                            <option value="{{ $vehiculo->idtransp }}" selected>{{ $transportista->transportista }}</option>
                                        @else
                                            <option value="{{ $transportista->idtransp }}">{{ $transportista->transportista }}</option>
                                        @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="clase">Clase</label>
                                <input type="text" name="clase" id="clase" class="form-control" value="{{ $vehiculo->clase }}" placeholder="Clase">
                            </div>

                            <div class="form-group">
                                <label for="marca">Marca</label>
                                <input type="tel" name="marca" id="marca" class="form-control" value="{{ $vehiculo->marca }}" placeholder="Marca">
                            </div>

                            <div class="form-group">
                                <label for="ano">Año</label>
                                <input type="number" class="form-control" name="ano" id="ano" value="{{ $vehiculo->ano }}" placeholder="Año"> 
                            </div>

                            <div class="form-group">
                                <label for="capacidad">Capacidad</label>
                                <input type="number" class="form-control" name="capacidad" id="capacidad" value="{{ $vehiculo->capacidad }}" placeholder="Capacidad"> 
                            </div>

                            <div class="form-group">
                                <label for="idunidad">Unidad de carga</label>
                                <select class="form-control" name="idunidad" id="idunidad">
                                    <option value="" disabled="true" selected="true">Seleccione una Unidad</option>
                                      @foreach($unidad as $unidad)
                                        @if( $vehiculo->idunidad  ==  $unidad->idunidad )
                                            <option value="{{ $vehiculo->idunidad }}" selected>{{ $unidad->unidad }}</option>
                                        @else
                                            <option value="{{ $unidad->idunidad }}">{{ $unidad->unidad }}</option>
                                        @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="modelo">Modelo</label>
                                <input type="text" class="form-control" name="modelo" id="modelo" value="{{ $vehiculo->modelo }}" placeholder="Modelo"> 
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales">{{ $vehiculo->obs }}</textarea>
                            </div>

                             <div class="form-group">
                                @if($vehiculo->activo == 1)
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="{{ $vehiculo->activo }}" checked>
                                @else
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="0">
                                @endif
                                ¿Registro Activo?
                            </div>

                            <div class="form-group" align="center">
                                <a class="button info" href="{{ route('vehiculos.index') }}">Atrás</a>
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
