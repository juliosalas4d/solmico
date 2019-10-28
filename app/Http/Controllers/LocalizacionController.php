<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Paises;
use App\Estados;
use App\Municipios;
use App\Parroquias;
use App\Ciudades;

class LocalizacionController extends Controller
{
    public function paises(){
      $paises = Paises::all();
      return view('estados.index', compact('paises'));
    }

    public function pais(){
      $pais = Paises::all();
      return response()->json($pais);
    }

    public function estados(){
    	$pais_id = Input::get('pais_id');
		  $estados = Estados::where('idpais', '=', $pais_id)->get();
		  return response()->json($estados);
    }

    public function municipios(){
      $estado_id = Input::get('estado_id');
      $municipios = Municipios::where('idestado', '=', $estado_id)->get();
      return response()->json($municipios);
    }

    public function parroquias(){
      $municipio_id = Input::get('municipio_id');
      $parroquias = Parroquias::where('idmunicipio', '=', $municipio_id)->get();
      return response()->json($parroquias);
    }

    public function ciudades(){
      $municipio_id = Input::get('municipio_id');
      $ciudades = Ciudades::where('idmunicipio', '=', $municipio_id)->get();
      return response()->json($ciudades);
    }
}
