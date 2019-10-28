<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Choferes;
use App\Paises;

class ChoferesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        $choferes = Choferes::where('deleted_at', NULL)->paginate(15);
        return view('choferes.index', compact('choferes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $choferes = new Choferes();
        $pais = Paises::get();
        return view('choferes.form', compact('choferes', 'pais'));

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
        Choferes::create($requestData);

        $this->validate($request,[ 'cedcho' =>'required', 'nombre'=>'required' ]);
        return redirect()->route('choferes.index')->with('notice','Registro creado satisfactoriamente');

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
        $choferes = Choferes::find($id);
        $paises = Paises::get();
        /*
        $choferes = DB::table('choferes')
                ->join('paises', 'choferes.idpais', '=' , 'paises.idpais')
                ->select('choferes.*', 'paises.pais')
                ->where('choferes.cedcho', '=', $id)
                ->get();
        */

        return view('choferes.show', compact('choferes'));

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
        $choferes = Choferes::find($id);
        $pais = Paises::get();
        return view('choferes.form', compact('choferes', 'pais'));
        
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

        Choferes::find($id)->update($request->all());
        return redirect()->route('choferes.index')->with('notice','Registro actualizado satisfactoriamente');

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
        Choferes::find($id)->delete();
        return redirect()->route('choferes.index')->with('notice', 'Registro eliminado satisfactoriamente');
    }
}
