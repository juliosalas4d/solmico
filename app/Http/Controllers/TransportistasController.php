<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transportistas;
use Session;

class TransportistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        $transportistas = Transportistas::where('deleted_at', NULL)->paginate(15);
        return view('transportistas.index', compact('transportistas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $transportistas = new Transportistas();
        //return view('transportistas.create', compact('transportistas'));
        return view('transportistas.form', compact('transportistas'));

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
        Transportistas::create($requestData);

        $this->validate($request,[ 'idtransp' =>'required', 'transportista'=>'required' ]);
        
        return redirect()->route('transportistas.index')->with('notice','Registro creado satisfactoriamente');

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
        $transportistas = Transportistas::find($id);
        return view('transportistas.show', compact('transportistas'));

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
        $transportistas = Transportistas::find($id);
        //return view('transportistas.edit', compact('transportistas'));
        return view('transportistas.form', compact('transportistas'));
        
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
        $this->validate($request,[ 'transportista'=>'required' ]);

        Transportistas::find($id)->update($request->all());
        return redirect()->route('transportistas.index')->with('notice','Registro actualizado satisfactoriamente');

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
        Transportistas::find($id)->delete();
        return redirect()->route('transportistas.index')->with('notice', 'Registro eliminado satisfactoriamente');
    }
}
