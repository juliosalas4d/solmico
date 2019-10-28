<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vehiculos;
use App\TipoTransp;
use App\Transportistas;
use App\Unidad;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        $vehiculos = DB::table('vehiculos')
                        ->join('tipotransp', 'vehiculos.idtiptra', '=', 'tipotransp.idtiptra')
                        ->join('transportistas', 'vehiculos.idtransp', '=', 'transportistas.idtransp')
                        ->select('vehiculos.*', 'tipotransp.tipotra', 'transportistas.transportista')
                        ->where('vehiculos.deleted_at', NULL)
                        ->paginate(15);

        return view('vehiculos.index', compact('vehiculos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $vehiculo = new Vehiculos();
        $tipo = TipoTransp::get();
        $transportista = Transportistas::get();
        $unidad = Unidad::get();
        return view('vehiculos.form', compact('vehiculo', 'tipo', 'transportista', 'unidad'));

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
        Vehiculos::create($requestData);

        $this->validate($request,[ 'placas' =>'required', 'descri'=>'required', 'idtiptra'=>'required', 'idtransp'=>'required', 'idunidad'=>'required' ]);
        
        return redirect()->route('vehiculos.index')->with('notice','Registro creado satisfactoriamente');

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
        $vehiculo = Vehiculos::find($id);
        $tipo = DB::table('tipotransp')->where('idtiptra', $vehiculo->idtiptra)->first();
        $tp = DB::table('transportistas')->where('idtransp', $vehiculo->idtransp)->first();
        $unidad = DB::table('unidad')->where('idunidad', $vehiculo->idunidad)->first();
        
        return view('vehiculos.show', compact('vehiculo', 'tipo', 'tp', 'unidad'));

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
        $vehiculo = Vehiculos::find($id);
        $tipo = TipoTransp::get();
        $transportista = Transportistas::get();
        $unidad = Unidad::get();
        return view('vehiculos.form', compact('vehiculo', 'tipo', 'transportista', 'unidad'));
        
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
        $this->validate($request,[ 'placas' =>'required', 'descri'=>'required', 'idtiptra'=>'required', 'idtransp'=>'required', 'idunidad'=>'required' ]);

        Vehiculos::find($id)->update($request->all());
        return redirect()->route('vehiculos.index')->with('notice','Registro actualizado satisfactoriamente');

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
        Vehiculos::find($id)->delete();
        return redirect()->route('vehiculos.index')->with('notice', 'Registro eliminado satisfactoriamente');
    }
}
