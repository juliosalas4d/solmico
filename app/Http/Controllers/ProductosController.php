<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Productos;
use App\EstadoFisico;
use App\Unidad;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devolverá todos los registros
        $productos = DB::table('productos')
                        ->join('edofisico', 'productos.idedofisico', '=', 'edofisico.idedofisico')
                        ->join('unidad', 'productos.idunidad', '=', 'unidad.idunidad')
                        ->select('productos.*', 'edofisico.edofisico', 'unidad.unidad')
                        ->where('productos.deleted_at', NULL)
                        ->paginate(15);

        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Crear un nuevo registro
        $producto = new Productos();
        $estadof = EstadoFisico::get();
        $unidad = Unidad::get();
        return view('productos.form', compact('producto', 'estadof', 'unidad'));
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
        
        Productos::create($requestData);

        $this->validate($request,[ 'producto'=>'required', 'idunidad'=>'required', 'idedofisico'=>'required' ]);
        return redirect()->route('productos.index')->with('notice','Registro creado satisfactoriamente');
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
        $producto = Productos::find($id);
        $estadof = DB::table('edofisico')->where('idedofisico', $producto->idedofisico)->first();
        $unidad = DB::table('unidad')->where('idunidad', $producto->idunidad)->first();
        return view('productos.show', compact('producto', 'estadof', 'unidad'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Productos::find($id);
        $estadof = EstadoFisico::get();
        $unidad = Unidad::get();
        return view('productos.form', compact('producto', 'estadof', 'unidad'));
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
        $this->validate($request,[ 'producto'=>'required', 'idunidad'=>'required', 'idedofisico'=>'required' ] );

        Productos::find($id)->update($request->all());
        return redirect()->route('productos.index')->with('notice','Registro actualizado satisfactoriamente');
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
        Productos::find($id)->delete();
        return redirect()->route('productos.index')->with('notice', 'Registro eliminado satisfactoriamente');
    }

}
