<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Unidad;

class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        $unidad = Unidad::where('deleted_at', NULL)->paginate(15);
        return view('unidad.index', compact('unidad'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $unidad = new Unidad();
        return view('unidad.create', compact('unidad'));

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
        Unidad::create($requestData);

        $this->validate($request,[ 'idunidad' =>'required', 'unidad'=>'required', 'siglas'=>'required' ]);
        
        return redirect()->route('unidad.index')->with('notice','Registro creado satisfactoriamente');

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
        $unidad = Unidad::find($id);
        return view('unidad.show', compact('unidad'));

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
        $unidad = Unidad::find($id);
        return view('unidad.edit', compact('unidad'));
        
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
        $this->validate($request,[ 'idunidad' =>'required', 'unidad'=>'required', 'siglas'=>'required' ]);

        Unidad::find($id)->update($request->all());
        return redirect()->route('unidad.index')->with('notice','Registro actualizado satisfactoriamente');

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
        Unidad::find($id)->delete();
        return redirect()->route('unidad.index')->with('notice', 'Registro eliminado satisfactoriamente');
    }
}
