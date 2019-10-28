<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Autoriza;
use App\Choferes;
use App\Despachos;
use App\Lotes;
use App\Productos;
use App\Transportistas;
use App\Unidad;
use App\Vehiculos;
use App\EstadoFisico;
use App\TipoTransp;
use App\Paises;
use App\Proyectos;
use App\Clientes;
use App\Monedas;
use App\TipoContrato;
use PDF;

class Fgc161Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        //$despachos = Despachos::where('deleted_at', NULL)->paginate(15);


        $despachos = DB::table('despachos')
                        ->join('lotes', 'despachos.idlote', '=', 'lotes.idlote')
                        ->join('productos', 'despachos.idproducto', '=', 'productos.idproducto')
                        ->join('unidad', 'despachos.idunidad', '=', 'unidad.idunidad')
                        ->join('proyectos', 'despachos.idproyecto', '=', 'proyectos.idproyecto')
                        ->select('despachos.*', 'lotes.lote', 'productos.producto', 'unidad.unidad', 'proyectos.idproyecto', 'proyectos.descri')
                        ->where('despachos.deleted_at', NULL)
                        ->orderBy('iddesp', 'desc')
                        ->paginate(15);


        return view('fgc161.fgc161', compact('despachos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $despacho = new Despachos();
        $autorizado = Autoriza::get();
        $chofer = Choferes::get();
        $lote = DB::table('lotes')->where('activo', '=', 1)->get();
        $producto = Productos::get();
        $transportista = Transportistas::get();
        $unidad = Unidad::get();
        $proyecto = Proyectos::get();

        $chuto = DB::table('vehiculos')
                        ->join('tipotransp', 'vehiculos.idtiptra', '=', 'tipotransp.idtiptra')
                        ->select('vehiculos.*', 'tipotransp.esremolque')
                        ->where('tipotransp.esremolque', '=', 0)
                        ->get();

        $remolque = DB::table('vehiculos')
                        ->join('tipotransp', 'vehiculos.idtiptra', '=', 'tipotransp.idtiptra')
                        ->select('vehiculos.*', 'tipotransp.esremolque')
                        ->where('tipotransp.esremolque', '=', 1)
                        ->get();

        $borrados = Despachos::onlyTrashed()->count();
        $nd = Despachos::count() + $borrados;

        //Variables para los formularios modales
        $productom = Productos::get();
        $unidadm = Unidad::get();
        $estadof = EstadoFisico::get();
        $tipo = TipoTransp::get();
        $transpm = Transportistas::get();
        $pais = Paises::get();
        $proyectom = Proyectos::get();
        $clientem = Clientes::get();
        $monedam = Monedas::get();
        $tipocm = TipoContrato::get();

        return view('despachos.form', compact('despacho', 'autorizado', 'chofer', 'lote', 'producto', 'transportista', 'unidad', 'chuto', 'remolque', 'nd', 'productom', 'unidadm', 'estadof', 'tipo', 'transpm', 'pais', 'proyecto', 'proyectom', 'clientem', 'monedam', 'tipocm' ));

        //return view('despachos.form', compact('despacho', 'autorizado', 'chofer', 'lote', 'producto', 'transportista', 'unidad', 'chuto', 'remolque', 'nd'));

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
        Despachos::create($requestData);

        $this->validate($request,[ 'iddesp'=>'required', 'fechasal'=>'required', 'idproducto'=>'required', 'idproyecto'=>'required', 'idlote'=>'required', 'arearec_1'=>'required', 'cant_des'=>'required', 'idunidad'=>'required', 'idtransp'=>'required', 'placach'=>'required', 'cedcho'=>'required', 'cedaut'=>'required' ]);
        
        return redirect()->route('despachos.index')->with('notice','Registro creado satisfactoriamente');

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
        $despacho = Despachos::find($id);
        $autorizado = DB::table('autoriza')->where('cedaut', $despacho->cedaut)->first();
        $chofer = DB::table('choferes')->where('cedcho', $despacho->cedcho)->first();
        $lote = DB::table('lotes')->where('idlote', $despacho->idlote)->first();
        $producto = DB::table('productos')->where('idproducto', $despacho->idproducto)->first();
        $transportista = DB::table('transportistas')->where('idtransp', $despacho->idtransp)->first();
        $unidad = DB::table('unidad')->where('idunidad', $despacho->idunidad)->first();
        $chuto = DB::table('vehiculos')->where('placas', $despacho->placach)->first();
        $tipoch = DB::table('tipotransp')->where('idtiptra', $chuto->idtiptra)->first();
        $proyecto = DB::table('proyectos')->where('idproyecto', $despacho->idproyecto)->first();
        $cliente = DB::table('clientes')->where('codcli', $proyecto->codcli)->first();
        

        if ($despacho->placare != NULL) {
            $remo = DB::table('vehiculos')->where('placas', $despacho->placare)->first();
            $tipore = DB::table('tipotransp')->where('idtiptra', $remo->idtiptra)->value('tipotra');
            $modelore = DB::table('vehiculos')->where('placas', $despacho->placare)->value('modelo');
        } else {
                $remo = NULL;
                $tipore = NULL;
                $modelore = NULL;
        }
        
        
        return view('fgc161.show', compact('despacho', 'autorizado', 'chofer', 'lote', 'producto', 'transportista', 'unidad', 'chuto', 'remo', 'proyecto', 'cliente', 'tipoch', 'tipore' ,'modelore'));

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
        $despacho = Despachos::find($id);
        $autorizado = Autoriza::get();
        $chofer = Choferes::get();
        $lote = DB::table('lotes')->where('activo', '=', 1)->get();
        $producto = Productos::get();
        $transportista = Transportistas::get();
        $unidad = Unidad::get();
        $proyecto = Proyectos::get();

        $chuto = DB::table('vehiculos')
                        ->join('tipotransp', 'vehiculos.idtiptra', '=', 'tipotransp.idtiptra')
                        ->select('vehiculos.*', 'tipotransp.esremolque')
                        ->where('tipotransp.esremolque', '=', 0)
                        ->get();

        $remolque = DB::table('vehiculos')
                        ->join('tipotransp', 'vehiculos.idtiptra', '=', 'tipotransp.idtiptra')
                        ->select('vehiculos.*', 'tipotransp.esremolque')
                        ->where('tipotransp.esremolque', '=', 1)
                        ->get();

        //Variables para los formularios modales
        $productom = Productos::get();
        $unidadm = Unidad::get();
        $estadof = EstadoFisico::get();
        $tipo = TipoTransp::get();
        $transpm = Transportistas::get();
        $pais = Paises::get();
        $proyectom = Proyectos::get();
        $clientem = Clientes::get();
        $monedam = Monedas::get();
        $tipocm = TipoContrato::get();

        return view('despachos.form', compact('despacho', 'autorizado', 'chofer', 'lote', 'producto', 'transportista', 'unidad', 'chuto', 'remolque', 'productom', 'unidadm', 'estadof', 'tipo', 'transpm', 'pais', 'proyecto', 'proyectom', 'clientem', 'monedam', 'tipocm' ));
        
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
        $this->validate($request,[ 'fechasal'=>'required', 'idproducto'=>'required', 'idlote'=>'required', 'arearec_1'=>'required', 'cant_des'=>'required', 'idunidad'=>'required', 'idtransp'=>'required', 'placach'=>'required', 'cedcho'=>'required', 'cedaut'=>'required' ]);

        Despachos::find($id)->update($request->all());
        return redirect()->route('despachos.index')->with('notice','Registro actualizado satisfactoriamente');

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
        Despachos::find($id)->delete();
        return redirect()->route('despachos.index')->with('notice', 'Registro eliminado satisfactoriamente');
    }

}
