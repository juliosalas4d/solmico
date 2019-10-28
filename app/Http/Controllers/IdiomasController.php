<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Idiomas;
use App\Paises;

class IdiomasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        $idiomas = Idiomas::where('deleted_at', NULL)->paginate(15);
        return view('idiomas.index', compact('idiomas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $idioma = new Idiomas();
        $pais = Paises::get();
        return view('idiomas.form', compact('idioma', 'pais'));

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
        Idiomas::create($requestData);

        $this->validate($request,[ 'ididioma' =>'required', 'idioma'=>'required' ]);
        return redirect()->route('idiomas.index')->with('notice','Registro creado satisfactoriamente');

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
        $idioma = Idiomas::find($id);
                
        return view('idiomas.show', compact('idioma'));

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
        $idioma = Idiomas::find($id);
        $pais = Paises::get();
        return view('idiomas.form', compact('idioma', 'pais'));
        
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
        $this->validate($request,[ 'idioma'=>'required'] );

        Idiomas::find($id)->update($request->all());
        return redirect()->route('idiomas.index')->with('notice','Registro actualizado satisfactoriamente');

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
        Idiomas::find($id)->delete();
        return redirect()->route('idiomas.index')->with('notice', 'Registro eliminado satisfactoriamente');
    }
}
