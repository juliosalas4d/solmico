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

        @if($lote->idlote == NULL)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevo Lote</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('lotes.store') }}" role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="POST">

                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="lote">Lote</label>
                                        <input type="text" name="lote" id="lote" class="form-control" value="" placeholder="Número de Lote. Ejemplo: SOL-00-000000">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="fecha">Fecha</label>
                                        <input type="date" name="fecha" id="fecha" class="form-control" value="" placeholder="Fecha del Lote">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="idproducto">Produto</label>
                                        <select class="form-control" name="idproducto" id="idproducto">
                                            <option value="">Seleccione un Producto</option>
                                            @foreach($producto as $producto)
                                                    <option value="{{ $producto->idproducto }}">{{ $producto->producto }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="idunidad">Unidad</label>
                                        <select class="form-control" name="idunidad" id="idunidad">
                                            <option value="">Seleccione una Unidad</option>
                                              @foreach($unidad as $unidad)
                                                    <option value="{{ $unidad->idunidad }}">{{ $unidad->unidad }}</option>
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="cant">Cantidad</label>
                                        <input type="number" name="cant" id="cant" class="form-control" value="" placeholder="Cantidad del Lote">
                                    </div>
                                </div>
                            </div>

                            <label class="h2" aling="center">Análisis de Laboratorio</label>
                            <div class="row"> <!-- Títulos -->
                                <div class="col-sm">
                                    <label>Parámetros</label>
                                </div>
                                <div class="col-sm">
                                    <label>Valores</label>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 1 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam1" id="idparam1" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor1" id="valor1" class="form-control" value="" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>


                            <div class="row"> <!-- Parámetro 2 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam2" id="idparam2" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor2" id="valor2" class="form-control" value="" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 3 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam3" id="idparam3" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor3" id="valor3" class="form-control" value="" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 4 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam4" id="idparam4" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor4" id="valor4" class="form-control" value="" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 5 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam5" id="idparam5" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor5" id="valor5" class="form-control" value="" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> <!-- Parámetro 6 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam6" id="idparam6" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor6" id="valor6" class="form-control" value="" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 7 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam7" id="idparam7" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor7" id="valor7" class="form-control" value="" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 8 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam8" id="idparam8" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor8" id="valor8" class="form-control" value="" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 9 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam9" id="idparam9" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor9" id="valor9" class="form-control" value="" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 10 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam10" id="idparam10" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor10" id="valor10" class="form-control" value="" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales"></textarea>
                            </div>

                            <div class="form-group" align="center">
                                <a class="button" href="{{ route('lotes.index') }}">Atrás</a>
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
                    <h3 class="panel-title">Edición de Lote</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('lotes.update', $lote->idlote) }}"  role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">

                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="lote">Lote</label>
                                        <input type="text" name="lote" id="lote" class="form-control" value="{{ $lote->lote }}" placeholder="Número de Lote. Ejemplo: SOL-00-000000">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="fecha">Fecha</label>
                                        <input type="date" name="fecha" id="fecha" class="form-control" value="{{ $lote->fecha }}" placeholder="Fecha del Lote">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="idproducto">Producto</label>
                                        <select class="form-control" name="idproducto" id="idproducto" placeholder="Seleccione un Producto">
                                            <option value=""></option>
                                              @foreach($producto as $producto)
                                                @if( $lote->idproducto  ==  $producto->idproducto )
                                                    <option value="{{ $lote->idproducto }}" selected>{{ $producto->producto }}</option>
                                                @else
                                                    <option value="{{ $producto->idproducto }}">{{ $producto->producto }}</option>
                                                @endif
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="idunidad">Unidad</label>
                                        <select class="form-control" name="idunidad" id="idunidad" placeholder="Seleccione una Unidad">
                                            <option value=""></option>
                                              @foreach($unidad as $unidad)
                                                @if( $lote->idunidad  ==  $unidad->idunidad )
                                                    <option value="{{ $lote->idunidad }}" selected>{{ $unidad->unidad }}</option>
                                                @else
                                                    <option value="{{ $unidad->idunidad }}">{{ $unidad->unidad }}</option>
                                                @endif
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="cant">Cantidad</label>
                                        <input type="number" name="cant" id="cant" class="form-control" value="{{ $lote->cant }}" placeholder="Cantidad del Lote">
                                    </div>
                                </div>
                            </div>
                            
                            <label class="h2" aling="center">Análisis de Laboratorio</label>
                            <div class="row"> <!-- Títulos -->
                                <div class="col-sm">
                                    <label>Parámetros</label>
                                </div>
                                <div class="col-sm">
                                    <label>Valores</label>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 1 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam1" id="idparam1" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                @if( $lote->idparam1  ==  $parametro->idparam )
                                                    <option value="{{ $lote->idparam1 }}" selected>{{ $parametro->parametro }}</option>
                                                @else
                                                    <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                                @endif
                                              @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor1" id="valor1" class="form-control" value="{{ $lote->valor1 }}" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>


                            <div class="row"> <!-- Parámetro 2 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam2" id="idparam2" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                @if( $lote->idparam2  ==  $parametro->idparam )
                                                    <option value="{{ $lote->idparam2 }}" selected>{{ $parametro->parametro }}</option>
                                                @else
                                                    <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                                @endif
                                              @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor2" id="valor2" class="form-control" value="{{ $lote->valor2 }}" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 3 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam3" id="idparam3" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                @if( $lote->idparam3  ==  $parametro->idparam )
                                                    <option value="{{ $lote->idparam3 }}" selected>{{ $parametro->parametro }}</option>
                                                @else
                                                    <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                                @endif
                                              @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor3" id="valor3" class="form-control" value="{{ $lote->valor3 }}" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 4 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam4" id="idparam4" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                @if( $lote->idparam4  ==  $parametro->idparam )
                                                    <option value="{{ $lote->idparam4 }}" selected>{{ $parametro->parametro }}</option>
                                                @else
                                                    <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                                @endif
                                              @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor4" id="valor4" class="form-control" value="{{ $lote->valor4 }}" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 5 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam5" id="idparam5" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                @if( $lote->idparam5  ==  $parametro->idparam )
                                                    <option value="{{ $lote->idparam5 }}" selected>{{ $parametro->parametro }}</option>
                                                @else
                                                    <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                                @endif
                                              @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor5" id="valor5" class="form-control" value="{{ $lote->valor5 }}" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> <!-- Parámetro 6 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam6" id="idparam6" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                @if( $lote->idparam6  ==  $parametro->idparam )
                                                    <option value="{{ $lote->idparam6 }}" selected>{{ $parametro->parametro }}</option>
                                                @else
                                                    <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                                @endif
                                              @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor6" id="valor6" class="form-control" value="{{ $lote->valor6 }}" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 7 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam7" id="idparam7" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                @if( $lote->idparam7  ==  $parametro->idparam )
                                                    <option value="{{ $lote->idparam7 }}" selected>{{ $parametro->parametro }}</option>
                                                @else
                                                    <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                                @endif
                                              @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor7" id="valor7" class="form-control" value="{{ $lote->valor7 }}" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 8 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam8" id="idparam8" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                @if( $lote->idparam8  ==  $parametro->idparam )
                                                    <option value="{{ $lote->idparam8 }}" selected>{{ $parametro->parametro }}</option>
                                                @else
                                                    <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                                @endif
                                              @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor8" id="valor8" class="form-control" value="{{ $lote->valor8 }}" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 9 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam9" id="idparam9" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                @if( $lote->idparam9  ==  $parametro->idparam )
                                                    <option value="{{ $lote->idparam9 }}" selected>{{ $parametro->parametro }}</option>
                                                @else
                                                    <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                                @endif
                                              @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor9" id="valor9" class="form-control" value="{{ $lote->valor9 }}" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>

                            <div class="row"> <!-- Parámetro 10 -->
                                <div class="col-sm">
                                    <div class="form-group">
                                        <select class="form-control" name="idparam10" id="idparam10" placeholder="Seleccione un Parámetro">
                                            <option value=""></option>
                                              @foreach($parametros as $parametro)
                                                @if( $lote->idparam10  ==  $parametro->idparam )
                                                    <option value="{{ $lote->idparam10 }}" selected>{{ $parametro->parametro }}</option>
                                                @else
                                                    <option value="{{ $parametro->idparam }}">{{ $parametro->parametro }}</option>
                                                @endif
                                              @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <input type="text" name="valor10" id="valor10" class="form-control" value="{{ $lote->valor10 }}" placeholder="Valor del Parámetro">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales">{{ $lote->obs }}</textarea>
                            </div>

                             <div class="form-group">
                                @if($lote->activo == 1)
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="{{ $lote->activo }}" checked>
                                @else
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="0">
                                @endif
                                ¿Registro Activo?
                            </div>

                            <div class="form-group" align="center">
                                <a class="button info" href="{{ route('lotes.index') }}">Atrás</a>
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
