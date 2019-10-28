@extends('app')
@section('content')

<section class="content">
    <div class="col-md-50">
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

        @if($producto->idproducto == NULL)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevo Producto</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('productos.store') }}" role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="POST">

                            <div class="form-group">
                                <label for="producto">Producto</label>
                                <input type="text" name="producto" id="producto" class="form-control" value="" placeholder="Nombre del Producto">
                            </div>

                            <div class="form-group">
                                <label for="idunidad" disabled="true" selected="true">Seleccione una Unidad</label>
                                <select class="form-control" name="idunidad" id="idunidad">
                                    <option value="">Seleccione una Unidad</option>
                                      @foreach($unidad as $unidad)
                                            <option value="{{ $unidad->idunidad }}">{{ $unidad->unidad }}</option>
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="idedofisico">Estado Físico</label>
                                <select class="form-control" name="idedofisico" id="idedofisico">
                                    <option value="" disabled="true" selected="true">Seleccione un Estado</option>
                                      @foreach($estadof as $estado)
                                            <option value="{{ $estado->edofisico }}">{{ $estado->edofisico }}</option>
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="descri">Descripción General del Producto</label>
                                <textarea name="descri" class="form-control" placeholder="Descripción del Producto"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="uso">Usos y Dosificaciones</label>
                                <textarea name="uso" class="form-control" placeholder="Usos y Dosificaciones"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="medseg">Medidas de Seguridad</label>
                                <textarea name="medseg" class="form-control" placeholder="Medidas de Seguridad"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales"></textarea>
                            </div>

                            <div class="form-group" align="center">
                                <a class="btn btn-info" href="{{ route('productos.index') }}">Atrás</a>
                                <input class="btn btn-warning" type="reset" value="Refrescar">
                                <input class="btn btn-success" type="submit" value="Guardar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        @else

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Edición de Producto</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('productos.update', $producto->idproducto) }}"  role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">

                            <div class="form-group">
                                <label for="producto">Producto</label>
                                <input type="text" name="producto" id="producto" class="form-control" value="{{ $producto->producto }}" placeholder="Nimbre del Producto">
                            </div>

                            <div class="form-group">
                                <label for="idunidad">Unidad</label>
                                <select class="form-control" name="idunidad" id="idunidad">
                                    <option value="" disabled="true" selected="true">Seleccione una Unidad</option>
                                      @foreach($unidad as $unidad)
                                        @if( $producto->idunidad  ==  $unidad->idunidad )
                                            <option value="{{ $producto->idunidad }}" selected>{{ $unidad->unidad }}</option>
                                        @else
                                            <option value="{{ $unidad->idunidad }}">{{ $unidad->unidad }}</option>
                                        @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="idedofisico">Estado Físico</label>
                                <select class="form-control" name="idedofisico" id="idedofisico">
                                    <option value="" disabled="true" selected="true">Seleccione un Estado</option>
                                      @foreach($estadof as $estado)
                                        @if( $producto->idedofisico  ==  $estado->idedofisico )
                                            <option value="{{ $producto->idedofisico }}" selected>{{ $estado->edofisico }}</option>
                                        @else
                                            <option value="{{ $estado->idedofisico }}">{{ $estado->edofisico }}</option>
                                        @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="descri">Descripción General del Producto</label>
                                <textarea name="descri" class="form-control" placeholder="Descripción del Producto">{{ $producto->descri }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="uso">Usos y Dosificaciones</label>
                                <textarea name="uso" class="form-control" placeholder="Usos y Dosificaciones">{{ $producto->uso }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="medseg">Medidas de Seguridad</label>
                                <textarea name="medseg" class="form-control" placeholder="Medidas de Seguridad">{{ $producto->medseg }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales">{{ $producto->obs }}</textarea>
                            </div>

                             <div class="form-group">
                                @if($producto->activo == 1)
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="{{ $producto->activo }}" checked>
                                @else
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="0">
                                @endif
                                ¿Registro Activo?
                            </div>

                            <div class="form-group" align="center">
                                <a class="btn btn-info" href="{{ route('productos.index') }}">Atrás</a>
                                <button class="btn btn-success" type="submit" >Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        @endif

    </div>
</section>

@endsection
