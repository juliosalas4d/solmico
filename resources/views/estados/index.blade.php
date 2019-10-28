@extends('app')
@section('content')

<div class="container">
      <div class="col-lg-6">
        <h2>Laravel 5.5 JQuery Ajax Example</h2>
        <form method="POST" action="" role="form">
                            {{ csrf_field() }}

          <div class="form-group">
            <label for="">País</label>
            <select class="form-control" name="idpais" id="idpais">
              <option value="0" disable="true" selected="true"> Seleccione un País </option>
                @foreach ($paises as $key => $value)
                  <option value="{{$value->idpais}}">{{ $value->pais }}</option>
                @endforeach
            </select>
          </div>

           <div class="form-group" id='estados_div' style="display: none;"> 
          <!--<div class="form-group" id='estados_div'>-->
            <label for="">Estados</label>
            <select class="form-control" name="idestado" id="idestado">
              <option value="0" disable="true" selected="true"> Seleccione un Estado </option>
            </select>
          </div>

          <div class="form-group" id='municipios_div' style="display: none;">
            <label for="">Municipios</label>
            <select class="form-control" name="idmunicipio" id="idmunicipio">
              <option value="0" disable="true" selected="true"> Selecione un Municipio </option>
            </select>
          </div>

          <div class="form-group" id='parroquias_div' style="display: none;">
            <label for="">Parroquias</label>
            <select class="form-control" name="idparroquia" id="idparroquia">
              <option value="0" disable="true" selected="true"> Selecione una Parroquia </option>
            </select>
          </div>

          <div class="form-group" id='ciudades_div' style="display: none;">
            <label for="">Ciudades</label>
            <select class="form-control" name="idciudad" id="idciudad">
              <option value="0" disable="true" selected="true"> Selecione una Ciudad </option>
            </select>
          </div>

        </form>
        
        <a href="#"> Presióname! </a>
      </div>
    </div>

@endsection
