<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Lotes;
use App\Productos;
use App\Unidad;
use App\Parametros;

class LotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        //$lotes = lotes::where('deleted_at', NULL)->paginate(15);

        $lotes = DB::table('lotes')
                        ->join('productos', 'lotes.idproducto', '=', 'productos.idproducto')
                        ->join('unidad', 'lotes.idunidad', '=', 'unidad.idunidad')
                        ->select('lotes.*', 'productos.producto', 'unidad.unidad')
                        ->where('lotes.deleted_at', NULL)
                        ->orderBy('idlote', 'desc')
                        ->paginate(15);

        return view('lotes.index', compact('lotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $lote = new lotes();
        $producto = Productos::get();
        $unidad = Unidad::get();
        $parametros = Parametros::get();
        return view('lotes.form', compact('lote', 'producto', 'unidad', 'parametros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Almacena la data del registro
        $requestData = $request->all();

        $this->validate($request,[ 'lote'=>'required', 'fecha'=>'required', 'idproducto'=>'required', 'idunidad'=>'required', 'cant'=>'required' ]);
        
        lotes::create($requestData);

        return redirect()->route('lotes.index')->with('notice','Registro creado satisfactoriamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Devuelve el registro seleccionado por el id.
        $lote = lotes::find($id);
        $producto = DB::table('productos')->where('idproducto', $lote->idproducto)->first();
        $unidad = DB::table('unidad')->where('idunidad', $lote->idunidad)->first();
        return view('lotes.show', compact('lote', 'producto', 'unidad'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lote = lotes::find($id);
        $producto = Productos::get();
        $unidad = Unidad::get();
        $parametros = Parametros::get();
        return view('lotes.form', compact('lote', 'producto', 'unidad', 'parametros'));
        //return view('lotes.form', compact('lote'));
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
        $this->validate($request,[ 'lote'=>'required', 'fecha'=>'required', 'idproducto'=>'required', 'idunidad'=>'required', 'cant'=>'required' ] );

        lotes::find($id)->update($request->all());
        return redirect()->route('lotes.index')->with('notice','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Elimina permanentemente el registro de la base de datos
        lotes::find($id)->delete();
        return redirect()->route('lotes.index')->with('notice', 'Registro eliminado satisfactoriamente');
    }

}
