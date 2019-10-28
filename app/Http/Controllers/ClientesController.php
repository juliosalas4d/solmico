<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Clientes;
use App\Paises;
use App\Estados;
use App\Municipios;
use App\Parroquias;
use App\Ciudades;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        $clientes = Clientes::where('deleted_at', NULL)->paginate(15);
        return view('clientes.index', compact('clientes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $cliente = new Clientes();
        $pais = Paises::get();
        $esta = Estados::get();
        $munc = Municipios::get();
        $parr = Parroquias::get();
        $ciud = Ciudades::get();

        return view('clientes.form', compact('cliente', 'pais', 'esta', 'munc', 'parr', 'ciud'));

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
        $requestData = $request->all();
        Clientes::create($requestData);

        $this->validate($request,[ 'codcli' =>'required', 'nombre'=>'required' ]);
        
        return redirect()->route('clientes.index')->with('notice','Registro creado satisfactoriamente');

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
        $cliente = Clientes::find($id);
        $pais = DB::table('paises')->where('idpais', $cliente->idpais)->first();
        $esta = DB::table('estados')->where('idestado', $cliente->idestado)->first();
        $munc = DB::table('municipios')->where('idmunicipio', $cliente->idmunicipio)->first();
        $parr = DB::table('parroquias')->where('idparroquia', $cliente->idparroquia)->first();
        $ciud = DB::table('ciudades')->where('idciudad', $cliente->idciudad)->first();
        
        return view('clientes.show', compact('cliente', 'pais', 'esta', 'munc', 'parr', 'ciud'));

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
        $cliente = clientes::find($id);
        $pais = Paises::get();
        $esta = Estados::get();
        $munc = Municipios::get();
        $parr = Parroquias::get();
        $ciud = Ciudades::get();
        return view('clientes.form', compact('cliente', 'pais', 'esta', 'munc', 'parr', 'ciud'));
        
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
        $this->validate($request,[ 'nombre' =>'required' ]);

        Clientes::find($id)->update($request->all());
        return redirect()->route('clientes.index')->with('notice','Registro actualizado satisfactoriamente');

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
        Clientes::find($id)->delete();
        return redirect()->route('clientes.index')->with('notice', 'Registro eliminado satisfactoriamente');
    }
}
