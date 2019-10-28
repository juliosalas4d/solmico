<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FieldRequest;
use App\Proyectos;
use App\Clientes;
use App\TipoContrato;
use App\Paises;
use App\Estados;
use App\Municipios;
use App\Parroquias;
use App\Ciudades;
use App\Monedas;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        //$proyectos = Proyectos::where('deleted_at', NULL)->paginate(15);
        //$cliente = Clientes::get();


        $proyectos = DB::table('proyectos')
                        ->join('clientes', 'proyectos.codcli', '=', 'clientes.codcli')
                        ->select('proyectos.*', 'clientes.nombre')
                        ->where('proyectos.activo', 1)
                        ->paginate(15);

        return view('proyectos.index', compact('proyectos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $proyecto = new Proyectos;
        $cliente = Clientes::get();
        $tipocont = TipoContrato::get();
        $pais = Paises::get();
        $esta = Estados::get();
        $munc = Municipios::get();
        $parr = Parroquias::get();
        $ciud = Ciudades::get();
        $moneda = Monedas::get();

        return view('proyectos.form', compact('proyecto', 'cliente', 'tipocont', 'pais', 'esta', 'munc', 'parr', 'ciud', 'moneda'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[ 'idproyecto' =>'required|max:8', 'descri' =>'required', 'codcli' =>'required', 'idtipcont' =>'required' ]);
        Proyectos::create($request);

        return redirect()->route('proyectos.index')->with('notice','Registro creado satistactoriamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Devuelve el registro seleccionado por el id.
        $proyecto = Proyectos::find($id);
        $cliente = DB::table('clientes')->where('codcli', $proyecto->codcli)->first();
        $tipocont = DB::table('tipocontrato')->where('idtipcont', $proyecto->idtipcont)->first();
        $pais = DB::table('paises')->where('idpais', $proyecto->idpais)->first();
        $esta = DB::table('estados')->where('idestado', $proyecto->idestado)->first();
        $munc = DB::table('municipios')->where('idmunicipio', $proyecto->idmunicipio)->first();
        $parr = DB::table('parroquias')->where('idparroquia', $proyecto->idparroquia)->first();
        $ciud = DB::table('ciudades')->where('idciudad', $proyecto->idciudad)->first();
        $moneda = DB::table('monedas')->where('idmoneda', $proyecto->idmoneda)->first();
        
        return view('proyectos.show', compact('proyecto', 'cliente', 'tipocont', 'pais', 'esta', 'munc', 'parr', 'ciud', 'moneda' ));

        //return view('proyectos.show', compact('proyecto' ));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $proyecto = Proyectos::find($id);
        $cliente = Clientes::get();
        $tipocont = TipoContrato::get();
        $pais = Paises::get();
        $esta = Estados::get();
        $munc = Municipios::get();
        $parr = Parroquias::get();
        $ciud = Ciudades::get();
        $moneda = Monedas::get();

        return view('proyectos.form', compact('proyecto', 'cliente', 'tipocont', 'pais', 'esta', 'munc', 'parr', 'ciud', 'moneda'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[ 'descri' =>'required', 'codcli' =>'required', 'idtipcont' =>'required' ]);

        Proyectos::find($id)->update($request->all());
        
        return redirect()->route('proyectos.index')->with('notice','Registro actualizado satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Proyectos::find($id)->delete();
        return redirect()->route('proyectos.index')->with('notice', 'Registro eliminado satisfactoriamente');

    }

}
