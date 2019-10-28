<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Equipos;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        $equipos = Equipos::where('deleted_at', NULL)->paginate(15);
        return view('equipos.index', compact('equipos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $equipos = new Equipos();
        $pais = Paises::get();
        return view('equipos.create', compact('equipos', 'pais'));
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
        Equipos::create($requestData);

        $this->validate($request,[ 'cedaut' =>'required', 'nombre'=>'required' ]);
        return redirect()->route('equipos.index')->with('notice','Registro creado satisfactoriamente');

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
        $equipos = Equipos::find($id);
        return view('equipos.show')->with('equipos', $equipos);
        //return view('equipos.index', compact('equipos'));

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
        $equipos = Equipos::find($id);
        $pais = Paises::get();
        return view('equipos.edit', compact('equipos', 'pais'));
        
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

        Equipos::find($id)->update($request->all());
        return redirect()->route('equipos.index')->with('notice','Registro actualizado satisfactoriamente');

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
        Equipos::find($id)->delete();
        return redirect()->route('equipos.index')->with('notice', 'Registro eliminado satisfactoriamente');
    }
}
