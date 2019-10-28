<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Paises;
use App\Idiomas;
use App\Monedas;

class PaisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        //$paises = Paises::where('deleted_at', NULL)->paginate(15);

        $paises = DB::table('paises')
                        ->join('idiomas', 'paises.ididioma', '=', 'idiomas.ididioma')
                        ->select('paises.*', 'idiomas.idioma')
                        ->where('paises.deleted_at', NULL)
                        ->paginate(15);

        return view('paises.index', compact('paises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $pais = new Paises();
        $idioma = Idiomas::get();
        $moneda = Monedas::get();
        return view('paises.form', compact('pais', 'idioma', 'moneda'));
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
        
        Paises::create($requestData);

        $this->validate($request,[ 'idpais' =>'required', 'pais'=>'required', 'descri'=>'required', 'codpais'=>'required' ]);
        return redirect()->route('paises.index')->with('notice','Registro creado satisfactoriamente');
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
        $pais = Paises::find($id);
        return view('paises.show')->with('pais', $pais);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pais = Paises::find($id);
        $idioma = Idiomas::get();
        $moneda = Monedas::get();
        return view('paises.form', compact('pais', 'idioma', 'moneda'));
        //return view('paises.form', compact('pais'));
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
        $this->validate($request,[ 'pais'=>'required', 'descri'=>'required', 'codpais'=>'required' ] );

        Paises::find($id)->update($request->all());
        return redirect()->route('paises.index')->with('notice','Registro actualizado satisfactoriamente');
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
        Paises::find($id)->delete();
        return redirect()->route('paises.index')->with('notice', 'Registro eliminado satisfactoriamente');
    }
}
