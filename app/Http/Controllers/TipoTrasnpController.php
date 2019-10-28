<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TipoTransp;

class TipoTraspController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        $tipotranp = TipoTranp::where('deleted_at', NULL)->paginate(15);
        return view('tipotranp.index', compact('tipotranp'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $tipotranp = new TipoTranp();
        return view('tipotranp.create', compact('tipotranp'));

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
        $this->validate($request,[ 'idtransp' =>'required', 'tipotra'=>'required' ]);
        TipoTranp::create($requestData);

        return redirect()->route('tipotranp.index')->with('notice','Registro creado satisfactoriamente');

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
        $tipotranp = TipoTranp::find($id);
        return view('tipotranp.show', compact('tipotranp'));

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
        $tipotranp = TipoTranp::find($id);
        return view('tipotranp.edit', compact('tipotranp'));
        
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
        $this->validate($request,[ 'tipotra'=>'required'] );

        TipoTranp::find($id)->update($request->all());
        return redirect()->route('tipotranp.index')->with('notice','Registro actualizado satisfactoriamente');

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
        TipoTranp::find($id)->delete();
        return redirect()->route('tipotranp.index')->with('notice', 'Registro eliminado satisfactoriamente');
    }
}
