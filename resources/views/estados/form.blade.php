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

        @if($pais->idpais == NULL)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevo País</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('paises.store') }}" role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="POST">

                            <div class="form-group">
                                <label for="pais">País</label>
                                <input type="text" name="pais" id="pais" class="form-control" value="" placeholder="Nombre del País">
                            </div>
                            
                            <div class="form-group">
                                <label for="descri">Descripción</label>
                                <input type="text" name="descri" id="descri" class="form-control" value="" placeholder="Descripción del País">
                            </div>

                            <div class="form-group">
                                <label for="ididioma">Idioma Oficial</label>
                                <select class="form-control" name="ididioma" id="ididioma">
                                    <option value="">Seleccione un idioma</option>
                                      @foreach($idioma as $idioma)
                                            <option value="{{ $idioma->ididioma }}">{{ $idioma->idioma }}</option>
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="idmoneda">Moneda de curso legal</label>
                                <select class="form-control" name="idmoneda" id="idmoneda">
                                    <option value="">Seleccione una moneda</option>
                                      @foreach($moneda as $moneda)
                                            <option value="{{ $moneda->idmoneda }}">{{ $moneda->moneda }}</option>
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="codpais">Código ISO</label>
                                <input type="text" name="codpais" id="codpais" class="form-control" value="" placeholder="Código ISO del País">
                            </div>

                            <div class="form-group">
                                <label for="codtel">Código Telefónico</label>
                                <input type="codtel" name="codtel" id="codtel" class="form-control" value="" placeholder="Formato del código telefónico">
                            </div>

                            <div class="form-group">
                                <label for="ibanpais">Código IBAN</label>
                                <input type="ibanpais" class="form-control" name="ibanpais" id="ibanpais" value="" placeholder="Código IBAN del País (Si aplica)"> 
                            </div>

                            <div class="form-group">
                                <label for="ibandigitos">Cantidad de dígitos IBAN</label>
                                <input type="number" class="form-control" name="ibandigitos" id="ibandigitos" aria-describedby="ibanpaisHelp" value="" placeholder="Código IBAN del País (Si aplica)"> 
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales"></textarea>
                            </div>

                            <div class="form-group" align="center">
                                <a class="button" href="{{ route('paises.index') }}">Atrás</a>
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
                    <h3 class="panel-title">Edición de País</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('paises.update', $pais->idpais) }}"  role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">

                            <div class="form-group">
                                <label for="pais">País</label>
                                <input type="text" name="pais" id="pais" class="form-control" value="{{ $pais->pais }}" placeholder="Nombre del País">
                            </div>
                            
                            <div class="form-group">
                                <label for="descri">Descripción</label>
                                <input type="text" name="descri" id="descri" class="form-control" value="{{ $pais->descri }}" placeholder="Descripción del País">
                            </div>

                            <div class="form-group">
                                <label for="ididioma">Idioma Oficial</label>
                                <select class="form-control" name="ididioma" id="ididioma" placeholder="Seleccione un Idioma">
                                    <option value=""></option>
                                      @foreach($idioma as $idioma)
                                        @if( $pais->ididioma  ==  $idioma->ididioma )
                                            <option value="{{ $pais->ididioma }}" selected>{{ $idioma->idioma }}</option>
                                        @else
                                            <option value="{{ $idioma->ididioma }}">{{ $idioma->idioma }}</option>
                                        @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="idmoneda">Moneda de curso legal</label>
                                <select class="form-control" name="idmoneda" id="idmoneda" placeholder="Seleccione una moneda">
                                    <option value=""></option>
                                      @foreach($moneda as $moneda)
                                        @if( $pais->idmoneda  ==  $moneda->idmoneda )
                                            <option value="{{ $pais->idmoneda }}" selected>{{ $moneda->moneda }}</option>
                                        @else
                                            <option value="{{ $moneda->idmoneda }}">{{ $moneda->moneda }}</option>
                                        @endif
                                      @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="codpais">Código ISO</label>
                                <input type="text" name="codpais" id="codpais" class="form-control" value="{{ $pais->codpais }}" placeholder="Código ISO del País">
                            </div>

                            <div class="form-group">
                                <label for="codtel">Código Telefónico</label>
                                <input type="tel" name="codtel" id="codtel" class="form-control" value="{{ $pais->codtel }}" placeholder="Formato del código telefónico">
                            </div>

                            <div class="form-group">
                                <label for="ibanpais">Código IBAN</label>
                                <input type="text" class="form-control" name="ibanpais" id="ibanpais" value="{{ $pais->ibanpais }}" placeholder="Código IBAN del País (Si aplica)"> 
                            </div>

                            <div class="form-group">
                                <label for="ibandigitos">Cantidad de dígitos IBAN</label>
                                <input type="number" class="form-control" name="ibandigitos" id="ibandigitos" aria-describedby="ibanpaisHelp" value="{{ $pais->ibandigitos }}" placeholder="Código IBAN del País (Si aplica)"> 
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales">{{ $pais->obs }}</textarea>
                            </div>

                             <div class="form-group">
                                @if($pais->activo == 1)
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="{{ $pais->activo }}" checked>
                                @else
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="0">
                                @endif
                                ¿Registro Activo?
                            </div>

                            <div class="form-group" align="center">
                                <a class="button info" href="{{ route('paises.index') }}">Atrás</a>
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
