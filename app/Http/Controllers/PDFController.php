<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Autoriza;
use App\Choferes;
use App\Despachos;
use App\Lotes;
use App\Productos;
use App\Transportistas;
use App\Unidad;
use App\Vehiculos;
use App\EstadoFisico;
use App\TipoTransp;
use App\Paises;
use App\Parametros;
use App\Proyectos;
use App\Clientes;
use App\Monedas;
use App\TipoContrato;
use PDF;

class PDFController extends Controller
{
    /**
     * Muestra la plantilla HTML del FGC-160 (Certificado de Análisis de Laboratorio) a imprimir.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function htmlfgc160($id)
    {
        // Devuelve el registro seleccionado por el id.
        $despacho = Despachos::find($id);
        $lote = DB::table('lotes')->where('idlote', $despacho->idlote)->first();
        $producto = DB::table('productos')->where('idproducto', $despacho->idproducto)->first();
        $unidad = DB::table('unidad')->where('idunidad', $despacho->idunidad)->first();
        $proyecto = DB::table('proyectos')->where('idproyecto', $despacho->idproyecto)->first();
        $cliente = DB::table('clientes')->where('codcli', $proyecto->codcli)->first();

        $param1 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam1)
                        ->first();

        $param2 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam2)
                        ->first();                        

        $param3 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam3)
                        ->first();

        $param4 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam4)
                        ->first(); 

        $param5 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam5)
                        ->first();

        $param6 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam6)
                        ->first();

        $param7 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam7)
                        ->first();

        $param8 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam8)
                        ->first();

        $param9 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam9)
                        ->first();

        $param10 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam10)
                        ->first();

        return view('reportes/fgc160', compact('despacho', 'lote', 'producto', 'unidad', 'proyecto', 'cliente', 'param1', 'param2', 'param3', 'param4', 'param5', 'param6', 'param7', 'param8', 'param9', 'param10'));

    }

    /**
     * Descarga el archivo pdf del FGC-160 (Certificado de Análisis de Laboratorio).
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function generatefgc160($id)
    {
        $data = ['title' => 'CERTIFICADO DE ANÁLISIS DE LABORATORIO', 'id' => $id];

        // Devuelve el registro seleccionado por el id.
        $despacho = Despachos::find($id);
        $lote = DB::table('lotes')->where('idlote', $despacho->idlote)->first();
        $producto = DB::table('productos')->where('idproducto', $despacho->idproducto)->first();
        $unidad = DB::table('unidad')->where('idunidad', $despacho->idunidad)->first();
        $proyecto = DB::table('proyectos')->where('idproyecto', $despacho->idproyecto)->first();
        $cliente = DB::table('clientes')->where('codcli', $proyecto->codcli)->first();

        $param1 = DB::table('vista_productos')
                        ->where('idproducto', $producto->idproducto)
                        ->where('idparam', $lote->idparam1)
                        ->first();

        $param2 = DB::table('vista_productos')
                        ->where('idproducto', $producto->idproducto)
                        ->where('idparam', $lote->idparam2)
                        ->first();                       

        $param3 = DB::table('vista_productos')
                        ->where('idproducto', $producto->idproducto)
                        ->where('idparam', $lote->idparam3)
                        ->first(); 

        $param4 = DB::table('vista_productos')
                        ->where('idproducto', $producto->idproducto)
                        ->where('idparam', $lote->idparam4)
                        ->first(); 

        $param5 = DB::table('vista_productos')
                        ->where('idproducto', $producto->idproducto)
                        ->where('idparam', $lote->idparam5)
                        ->first();

        $param6 = DB::table('vista_productos')
                        ->where('idproducto', $producto->idproducto)
                        ->where('idparam', $lote->idparam6)
                        ->first();

        $param7 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam7)
                        ->first();

        $param8 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam8)
                        ->first();

        $param9 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam9)
                        ->first();

        $param10 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam10)
                        ->first();

        $pdf = PDF::loadview('reportes/fgc160', compact('despacho', 'lote', 'producto', 'unidad', 'proyecto', 'cliente', 'param1', 'param2', 'param3', 'param4', 'param5', 'param6', 'param7', 'param8', 'param9', 'param10'));

        $nombre = $despacho->id.' - FGC-160 - '.' ('.date('d-m-Y').')'.'.pdf';
        //return $pdf->download($nombre);
        return $pdf->setPaper('Letter', 'portrait')->stream($nombre);

    }

    /**
     * Muestra la plantilla HTML del FGC-1601 (Guía de Despacho) a imprimir.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function htmlfgc161($id)
    {
        // Devuelve el registro seleccionado por el id.
        $despacho = Despachos::find($id);
        $lote = DB::table('lotes')->where('idlote', $despacho->idlote)->first();
        $producto = DB::table('productos')->where('idproducto', $despacho->idproducto)->first();
        $unidad = DB::table('unidad')->where('idunidad', $despacho->idunidad)->first();
        $proyecto = DB::table('proyectos')->where('idproyecto', $despacho->idproyecto)->first();
        $cliente = DB::table('clientes')->where('codcli', $proyecto->codcli)->first();
        $chofer = DB::table('choferes')->where('cedcho', $despacho->cedcho)->first();
        $autorizado = DB::table('autoriza')->where('cedaut', $despacho->cedaut)->first();
        $chuto = DB::table('vehiculos')
                        ->join('tipotransp', 'vehiculos.idtiptra', '=', 'tipotransp.idtiptra')
                        ->select('vehiculos.*', 'tipotransp.tipotra', 'tipotransp.esremolque')
                        ->where('vehiculos.placas', '=', $despacho->placach)
                        ->where('tipotransp.esremolque', '=', 0)
                        ->first();
        $remolque = DB::table('vehiculos')
                        ->join('tipotransp', 'vehiculos.idtiptra', '=', 'tipotransp.idtiptra')
                        ->select('vehiculos.*', 'tipotransp.tipotra', 'tipotransp.esremolque')
                        ->where('vehiculos.placas', '=', $despacho->placare)
                        ->where('tipotransp.esremolque', '=', 1)
                        ->first();

        return view('reportes/fgc161', compact('despacho', 'lote', 'producto', 'unidad', 'proyecto', 'cliente', 'chofer', 'autorizado', 'chuto', 'remolque'));
    }

    /**
     * Descarga el archivo pdf del FGC-1610 (Guía de Despacho).
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function generatefgc161($id)
    {
        $data = ['title' => 'GUÍA DE DESPACHO', 'id' => $id];

        // Devuelve el registro seleccionado por el id.
        $despacho = Despachos::find($id);
        $lote = DB::table('lotes')->where('idlote', $despacho->idlote)->first();
        $producto = DB::table('productos')->where('idproducto', $despacho->idproducto)->first();
        $unidad = DB::table('unidad')->where('idunidad', $despacho->idunidad)->first();
        $proyecto = DB::table('proyectos')->where('idproyecto', $despacho->idproyecto)->first();
        $cliente = DB::table('clientes')->where('codcli', $proyecto->codcli)->first();
        $chofer = DB::table('choferes')->where('cedcho', $despacho->cedcho)->first();
        $autorizado = DB::table('autoriza')->where('cedaut', $despacho->cedaut)->first();
        $chuto = DB::table('vehiculos')
                        ->join('tipotransp', 'vehiculos.idtiptra', '=', 'tipotransp.idtiptra')
                        ->select('vehiculos.*', 'tipotransp.tipotra', 'tipotransp.esremolque')
                        ->where('vehiculos.placas', '=', $despacho->placach)
                        ->where('tipotransp.esremolque', '=', 0)
                        ->first();
        $remolque = DB::table('vehiculos')
                        ->join('tipotransp', 'vehiculos.idtiptra', '=', 'tipotransp.idtiptra')
                        ->select('vehiculos.*', 'tipotransp.tipotra', 'tipotransp.esremolque')
                        ->where('vehiculos.placas', '=', $despacho->placare)
                        ->where('tipotransp.esremolque', '=', 1)
                        ->first();

        $pdf = PDF::loadview('reportes/fgc161', compact('despacho', 'lote', 'producto', 'unidad', 'proyecto', 'cliente', 'chofer', 'autorizado', 'chuto', 'remolque'));

        $nombre = $despacho->id.' - FGC-161 - '.' ('.date('d-m-Y').')'.'.pdf';
        
        //return $pdf->download('fgc160-$despacho->id.pdf');
        //return $pdf->download($nombre);
        return $pdf->setPaper('Letter', 'portrait')->stream($nombre);
    }

    /**
     * Muestra la plantilla HTML del HDR (Hoja de Ruta) a imprimir.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function htmlhdr($id)
    {
        // Devuelve el registro seleccionado por el id.
        $despacho = Despachos::find($id);
        $lote = DB::table('lotes')->where('idlote', $despacho->idlote)->first();
        $producto = DB::table('productos')->where('idproducto', $despacho->idproducto)->first();
        $unidad = DB::table('unidad')->where('idunidad', $despacho->idunidad)->first();
        $proyecto = DB::table('proyectos')->where('idproyecto', $despacho->idproyecto)->first();
        $cliente = DB::table('clientes')->where('codcli', $proyecto->codcli)->first();
        $chofer = DB::table('choferes')->where('cedcho', $despacho->cedcho)->first();
        $autorizado = DB::table('autoriza')->where('cedaut', $despacho->cedaut)->first();
        $chuto = DB::table('vehiculos')
                        ->join('tipotransp', 'vehiculos.idtiptra', '=', 'tipotransp.idtiptra')
                        ->select('vehiculos.*', 'tipotransp.tipotra', 'tipotransp.esremolque')
                        ->where('vehiculos.placas', '=', $despacho->placach)
                        ->where('tipotransp.esremolque', '=', 0)
                        ->first();
        $remolque = DB::table('vehiculos')
                        ->join('tipotransp', 'vehiculos.idtiptra', '=', 'tipotransp.idtiptra')
                        ->select('vehiculos.*', 'tipotransp.tipotra', 'tipotransp.esremolque')
                        ->where('vehiculos.placas', '=', $despacho->placare)
                        ->where('tipotransp.esremolque', '=', 1)
                        ->first();

        return view('reportes/hdr', compact('despacho', 'lote', 'producto', 'unidad', 'proyecto', 'cliente', 'chofer', 'autorizado', 'chuto', 'remolque'));
    }

    /**
     * Descarga el archivo pdf del HDR (Hoja de Ruta) al computador.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function generatehdr($id)
    {
        $data = ['title' => 'HOJA DE RUTA', 'id' => $id];

        // Devuelve el registro seleccionado por el id.
        $despacho = Despachos::find($id);
        $lote = DB::table('lotes')->where('idlote', $despacho->idlote)->first();
        $producto = DB::table('productos')->where('idproducto', $despacho->idproducto)->first();
        $unidad = DB::table('unidad')->where('idunidad', $despacho->idunidad)->first();
        $proyecto = DB::table('proyectos')->where('idproyecto', $despacho->idproyecto)->first();
        $cliente = DB::table('clientes')->where('codcli', $proyecto->codcli)->first();
        $chofer = DB::table('choferes')->where('cedcho', $despacho->cedcho)->first();
        $autorizado = DB::table('autoriza')->where('cedaut', $despacho->cedaut)->first();
        $chuto = DB::table('vehiculos')
                        ->join('tipotransp', 'vehiculos.idtiptra', '=', 'tipotransp.idtiptra')
                        ->select('vehiculos.*', 'tipotransp.tipotra', 'tipotransp.esremolque')
                        ->where('vehiculos.placas', '=', $despacho->placach)
                        ->where('tipotransp.esremolque', '=', 0)
                        ->first();
        $remolque = DB::table('vehiculos')
                        ->join('tipotransp', 'vehiculos.idtiptra', '=', 'tipotransp.idtiptra')
                        ->select('vehiculos.*', 'tipotransp.tipotra', 'tipotransp.esremolque')
                        ->where('vehiculos.placas', '=', $despacho->placare)
                        ->where('tipotransp.esremolque', '=', 1)
                        ->first();

        $pdf = PDF::loadview('reportes/hdr', compact('despacho', 'lote', 'producto', 'unidad', 'proyecto', 'cliente', 'chofer', 'autorizado', 'chuto', 'remolque'));                        
        $nombre = $despacho->id.'- hdr - '.' ('.date('d-m-Y').')'.'.pdf';
        
        //return $pdf->download($nombre);
        return $pdf->setPaper('Letter', 'portrait')->stream($nombre);
    }

    /**
     * Muestra la plantilla HTML del Reporte Técnico del Producto a imprimir.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function htmlrep_tec($id)
    {
        // Devuelve el registro seleccionado por el id.
        $producto = Productos::find($id);
        $despacho = DB::table('despachos')->where('idproducto', $producto->idproducto)->first();
        $lote = DB::table('lotes')->where('idlote', $despacho->idlote)->first();
        


        $param1 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam1)
                        ->first();

        $param2 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam2)
                        ->first();                        

        $param3 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam3)
                        ->first();

        $param4 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam4)
                        ->first(); 

        $param5 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam5)
                        ->first();

        $param6 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam6)
                        ->first();

        $param7 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam7)
                        ->first();

        $param8 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam8)
                        ->first();

        $param9 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam9)
                        ->first();

        $param10 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam10)
                        ->first();

        return view('reportes/rep_tec', compact('despacho', 'lote', 'producto', 'unidad', 'proyecto', 'cliente', 'chofer', 'autorizado', 'chuto', 'remolque',  'param1', 'param2', 'param3', 'param4', 'param5', 'param6', 'param7', 'param8', 'param9', 'param10'));
    }

    /**
     * Descarga el archivo pdf del Reporte Técnico al computador.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function generaterep_tec($id)
    {
        $data = ['title' => 'REOIRTE TÉCNICO', 'id' => $id];

        // Devuelve el registro seleccionado por el id.
        $producto = Productos::find($id);
        $despacho = DB::table('despachos')->where('idproducto', $producto->idproducto)->first();
        $lote = DB::table('lotes')->where('idlote', $despacho->idlote)->first();
        $unidad = DB::table('unidad')->where('idunidad', $producto->idunidad)->first();

        $param1 = DB::table('vista_productos')
                        ->where('idproducto', $producto->idproducto)
                        ->where('idparam', $lote->idparam1)
                        ->first();

        $param2 = DB::table('vista_productos')
                        ->where('idproducto', $producto->idproducto)
                        ->where('idparam', $lote->idparam2)
                        ->first();                       

        $param3 = DB::table('vista_productos')
                        ->where('idproducto', $producto->idproducto)
                        ->where('idparam', $lote->idparam3)
                        ->first(); 

        $param4 = DB::table('vista_productos')
                        ->where('idproducto', $producto->idproducto)
                        ->where('idparam', $lote->idparam4)
                        ->first(); 

        $param5 = DB::table('vista_productos')
                        ->where('idproducto', $producto->idproducto)
                        ->where('idparam', $lote->idparam5)
                        ->first();

        $param6 = DB::table('vista_productos')
                        ->where('idproducto', $producto->idproducto)
                        ->where('idparam', $lote->idparam6)
                        ->first();

        $param7 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam7)
                        ->first();

        $param8 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam8)
                        ->first();

        $param9 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam9)
                        ->first();

        $param10 = DB::table('paramxprod')
                        ->join('parametros', 'paramxprod.idparam', '=', 'parametros.idparam')
                        ->select('paramxprod.*', 'parametros.parametro')
                        ->where('idproducto', $despacho->idproducto)
                        ->where('paramxprod.idparam', $lote->idparam10)
                        ->first();

        $pdf = PDF::loadview('reportes/rep_tec', compact('despacho', 'lote', 'producto', 'unidad', 'param1', 'param2', 'param3', 'param4', 'param5', 'param6', 'param7', 'param8', 'param9', 'param10'));                        
        $nombre = $producto->producto.'- rep_tec - '.' ('.date('d-m-Y').')'.'.pdf';
        
        //return $pdf->setPaper('Letter', 'portrait')->download($nombre);
        return $pdf->setPaper('Letter', 'portrait')->stream($nombre);
    }

}

