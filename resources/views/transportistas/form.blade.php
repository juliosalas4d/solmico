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

        @if($transportistas->idtransp == NULL)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevo Transportista</h3>
                </div>
                <div class="panel-body">                    
                    <div class="table-container">
                        <form method="POST" action="{{ route('transportistas.store') }}" role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="POST">

                            <div class="form-group">
                                <label for="transportista">Razón Social</label>
                                <input type="text" name="transportista" id="transportista" class="form-control" value="" placeholder="Nombre o Razón Social">
                            </div>
                            
                            <div class="form-group">
                                <label for="racda">Nº RACDA</label>
                                <input type="text" name="racda" id="racda" class="form-control" value="" placeholder="Nº RACDA">
                            </div>

                            <div class="form-group">
                                <label for="cedrepre">Cédula de Identidad</label>
                                <input type="text" name="cedrepre" id="cedrepre" class="form-control" value="" placeholder="Cédula de Identidad del Representante Legal">
                            </div>

                            <div class="form-group">
                                <label for="repleg">Representante Legal</label>
                                <input type="text" name="repleg" id="repleg" class="form-control" value="" placeholder="Nombre del Representante Legal">
                            </div>

                            <div class="form-group">
                                <label for="cargo">Cargo</label>
                                <input type="text" name="cargo" id="cargo" class="form-control" value="" placeholder="Cargo del Representante Legal">
                            </div>

                            <div class="form-group">
                                <label for="tel">Teléfonos</label>
                                <input type="tel" name="tel" id="tel" class="form-control" value="" placeholder="Indique el Teléfono. Emeplo: +58 424-6883287">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="" placeholder="Dirección de correo electrónico"> 
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales"></textarea>
                            </div>

                            <div class="form-group" align="center">
                                <a class="button" href="{{ route('transportistas.index') }}">Atrás</a>
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
                    <h3 class="panel-title">Edición de Transportista</h3>
                </div>
                <div class="panel-body">                    
                    <div class="table-container">
                        <form method="POST" action="{{ route('transportistas.update', $transportistas->idtransp) }}"  role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">

                            <div class="form-group">
                                <label for="transportista">Razón Social</label>
                                <input type="text" name="transportista" id="transportista" class="form-control" value="{{$transportistas->transportista}}" placeholder="tRazón Social">
                            </div>
                            
                            <div class="form-group">
                                <label for="racda">Nº RACDA</label>
                                <input type="text" name="racda" id="racda" class="form-control" value="{{$transportistas->racda}}" placeholder="Nº RACDA">
                            </div>

                            <div class="form-group">
                                <label for="cedrepre">C.I Representante Legal</label>
                                <input type="text" name="cedrepre" id="cedrepre" class="form-control" value="{{$transportistas->cedrepre}}" placeholder="Cédula de Identidad del Representante Legal">
                            </div>

                            <div class="form-group">
                                <label for="repleg">Representante Legal</label>
                                <input type="text" name="repleg" id="repleg" class="form-control" value="{{$transportistas->repleg}}" placeholder="Representante Legal">
                            </div>

                            <div class="form-group">
                                <label for="cargo">Cargo Representante Legal</label>
                                <input type="text" name="cargo" id="cargo" class="form-control" value="{{$transportistas->cargo}}" placeholder="Cargo del Representante Legal">
                            </div>

                            <div class="form-group">
                                <label for="tel">Teléfonos</label>
                                <input type="tel" name="tel" id="tel" class="form-control" value="{{ $transportistas->tel }}" placeholder="Indique el Teléfono. Emeplo: +58 424-6883287">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{ $transportistas->email }}" placeholder="Dirección de correo electrónico"> 
                            </div>

                            <div class="form-group">
                                <label for="obs">Observaciones</label>
                                <textarea name="obs" class="form-control" placeholder="Observaciones generales">{{ $transportistas->obs }}</textarea>
                            </div>

                             <div class="form-group">
                                @if($transportistas->activo == 1)
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="{{ $transportistas->activo }}" checked>
                                @else
                                    <input type="checkbox" class="form-check-input" name="activo" id="activo" value="0">
                                @endif
                                ¿Registro Activo?
                            </div>

                            <div class="form-group" align="center">
                                <a class="button info" href="{{ route('transportistas.index') }}">Atrás</a>
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
