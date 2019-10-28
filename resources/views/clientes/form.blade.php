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

        @if($cliente->codcli == NULL)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevo Cliente</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('clientes.store') }}" role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="POST">

                            <div class="form-group">
                                <label for="codcli">Código</label>
                                <input type="text" name="codcli" id="codcli" class="form-control" value="" placeholder="Código del Cliente">
                            </div>

                            <div class="form-group">
                                <label for="rif">Nº RIF</label>
                                <input type="text" name="rif" id="rif" class="form-control" value="" placeholder="Nº del RIF (Sin guines ni espacios). Ejemplo: J123456789">
                            </div>
                            
                            <div class="form-group">
                                <label for="nombre">Razón Social</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="" placeholder="Nombre o Razón Social">
                            </div>

                            <div class="form-group">
                                <label for="direccion">Dirección Fiscal</label>
                                <textarea name="direccion" class="form-control" placeholder="Dirección fiscal"></textarea>
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
                                <label for="tel">Teléfonos</label>
                                <input type="tel" name="tel" id="tel" class="form-control" value="" placeholder="Indique el Teléfono. Emeplo: +58 424-1234567">
                            </div>

                            <div class="form-group">
                                <label for="fax">Fax</label>
                                <input type="tel" name="fax" id="fax" class="form-control" value="" placeholder="Indique el Nº de Fax. Emeplo: +58 424-1234567">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="" placeholder="Dirección de correo electrónico">   
                            </div>

                            <div class="form-group">
                                <label for="www">Página Web</label>
                                <input type="url" name="www" id="www" class="form-control" value="" placeholder="Direción Web">
                            </div>

                            <div class="form-group">
                                <label for="contacto">Persona contacto</label>
                                <input type="text" name="contacto" id="contacto" class="form-control" value="" placeholder="Persona contacto">
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales"></textarea>
                            </div>

                            <div class="form-group" align="center">
                                <a class="button" href="{{ route('clientes.index') }}">Atrás</a>
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
                    <h3 class="panel-title">Edición de Cliente</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('clientes.update', $cliente->codcli) }}"  role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">

                            <div class="form-group">
                                <label for="rif">RIF</label>
                                <input type="text" name="rif" id="rif" class="form-control" value="{{ $cliente->rif }}" placeholder="Nº del RIF">
                            </div>
                            
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $cliente->nombre }}" placeholder="Nombre o Razón Social">
                            </div>

                            <div class="form-group">
                                <label for="direccion">Dirección Fiscal</label>
                                <textarea name="direccion" class="form-control" value="{{ $cliente->direccion }}" placeholder="Dirección fiscal"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="idpais">País</label>
                                <select class="form-control" name="idpais" id="idpais">
                                    <option value="" disabled="true" selected="true">Seleccione un País</option>
                                      @foreach($pais as $pais)
                                        @if( $cliente->idpais  ==  $pais->idpais )
                                            <option value="{{ $cliente->idpais }}" selected>{{ $pais->pais }}</option>
                                        @else
                                            <option value="{{ $pais->idpais }}">{{ $pais->pais }}</option>
                                        @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group" id='estados_div' style="display: none;">
                                <label for="idestado">Estado</label>
                                <select class="form-control" name="idestado" id="idestado">
                                    <option value="" disabled="true" selected="true">Seleccione un Estado</option>
                                    @foreach($esta as $esta)
                                        @if( $cliente->idestado  ==  $esta->idestado )
                                            <option value="{{ $cliente->idestado }}" selected>{{ $esta->estado }}</option>
                                        @else
                                            <option value="{{ $esta->idestado }}">{{ $esta->estado }}</option>
                                        @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group" id='municipios_div' style="display: none;">
                                <label for="idmunicipio">Municipio</label>
                                <select class="form-control" name="idmunicipio" id="idmunicipio">
                                    <option value="" disabled="true" selected="true">Seleccione un Municipio</option>
                                      @foreach($munc as $munc)
                                        @if( $cliente->idmunicipio  ==  $munc->idmunicipio )
                                            <option value="{{ $cliente->idmunicipio }}" selected>{{ $munc->municipio }}</option>
                                        @else
                                            <option value="{{ $munc->idmunicipio }}">{{ $munc->municipio }}</option>
                                        @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group" id='parroquias_div' style="display: none;">
                                <label for="idparroquia">Parroquia</label>
                                <select class="form-control" name="idparroquia" id="idparroquia">
                                    <option value="" disabled="true" selected="true">Seleccione una Parroquia</option>
                                      @foreach($parr as $parr)
                                        @if( $cliente->idparroquia  ==  $parr->idparroquia )
                                            <option value="{{ $cliente->idparroquia }}" selected>{{ $parr->parroquia }}</option>
                                        @else
                                            <option value="{{ $parr->idparroquia }}">{{ $parr->parroquia }}</option>
                                        @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group" id='ciudades_div' style="display: none;">
                                <label for="idciudad">Ciudad</label>
                                <select class="form-control" name="idciudad" id="idciudad">
                                    <option value=""  disabled="true" selected="true">Seleccione una Ciudad</option>
                                      @foreach($ciud as $ciud)
                                        @if( $cliente->idciudad  ==  $ciud->idciudad )
                                            <option value="{{ $cliente->idciudad }}" selected>{{ $ciud->ciudad }}</option>
                                        @else
                                            <option value="{{ $ciud->idciudad }}">{{ $ciud->ciudad }}</option>
                                        @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tel">Teléfonos</label>
                                <input type="tel" name="tel" id="tel" class="form-control" value="{{ $cliente->tel }}" placeholder="Indique el Teléfono. Emeplo: +58 424-1234567">
                            </div>

                            <div class="form-group">
                                <label for="fax">Fax</label>
                                <input type="tel" name="fax" id="fax" class="form-control" value="{{ $cliente->fax }}" placeholder="Indique el Nº de Fax. Emeplo: +58 424-1234567">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{ $cliente->email }}" placeholder="Dirección de correo electrónico">   
                            </div>

                            <div class="form-group">
                                <label for="www">Página Web</label>
                                <input type="url" name="www" id="www" class="form-control" value="{{ $cliente->www }}" placeholder="Direción Web">
                            </div>

                            <div class="form-group">
                                <label for="contacto">Persona contacto</label>
                                <input type="text" name="contacto" id="contacto" class="form-control" value="{{ $cliente->contacto }}" placeholder="Persona contacto">
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" value="{{ $cliente->obs }}" placeholder="Observaciones generales"></textarea>
                            </div>

                             <div class="form-group">
                                @if($cliente->activo == 1)
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="{{ $cliente->activo }}" checked>
                                @else
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="0">
                                @endif
                                ¿Registro Activo?
                            </div>

                            <div class="form-group" align="center">
                                <a class="button info" href="{{ route('clientes.index') }}">Atrás</a>
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
