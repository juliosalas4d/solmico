<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Autoriza;
use App\Paises;

/**
 * Controlador de Autorizados
 */
class AutorizaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        $autoriza = Autoriza::where('deleted_at', NULL)->paginate(15);
        return view('autoriza.index', compact('autoriza'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $autoriza = new Autoriza();
        $pais = Paises::get();
        return view('autoriza.form', compact('autoriza', 'pais'));
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
        Autoriza::create($requestData);

        $this->validate($request,[ 'cedaut' =>'required', 'nombre'=>'required' ]);
        return redirect()->route('autoriza.index')->with('notice','Registro creado satisfactoriamente');

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
        $autoriza = Autoriza::find($id);
        return view('autoriza.show')->with('autoriza', $autoriza);

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
        $autoriza = Autoriza::find($id);
        $pais = Paises::get();
        return view('autoriza.form', compact('autoriza', 'pais'));
        
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
        $this->validate($request,[ 'nombre'=>'required'] );

        Autoriza::find($id)->update($request->all());
        return redirect()->route('autoriza.index')->with('notice','Registro actualizado satisfactoriamente');

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
        Autoriza::find($id)->delete();
        return redirect()->route('autoriza.index')->with('notice', 'Registro eliminado satisfactoriamente');
    }
}
