@extends('app')
@section('content')

<div class='table-responsive-sm'>
    <h2>Producto: {{ $producto->idproducto }} - {{ $producto->producto }}</h2>
    <table class="table table-bordered" id="valores">
        <caption></caption>
        <tr>
            <th align="right">Unidad:</th>
            <td>{{ $unidad->unidad }}</td>
        </tr>
        <tr>
            <th align="right">Estado Físico:</th>
            <td>{{ $estadof->edofisico }}</td>
        </tr>
        <tr>
            <th align="right">Descripción General:</th>
            <td>{{ $producto->descri }}</td>
        </tr>
        <tr>
            <th align="right">Usos y Dosificaciones:</th>
            <td>{{ $producto->uso }}</td>
        </tr>
        <tr>
            <th align="right">Medidas de Seguridad:</th>
            <td>{{ $producto->medseg }}</td>
        </tr>      
        <tr>
            <th align="right">Observaciones:</th>
            <td>{{ $producto->obs }}</td>
        </tr>
        <tr>
            <th align="right">Fecha de creación:</th>
            <td>{{ $producto->created_at }}</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <a href="{{ route('productos.index') }}" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-arrow-left"></span>Volver</a>
                <a href="{{ route('productos.show', $producto->idproducto) }}" type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-repeat" aria-hiden='true'></span>Recargar</a>
                <button type="button" class="btn btn-warning btn-sm" title="Imprimir Documentos" data-toggle="modal" data-target="#imprimirModal">Imprimir</button>
            </td>
        </tr>
    </table>

    <!-- Formulario Imprimir Modal -->
    <div class="modal fade" id="imprimirModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Impresión de Documentos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Seleccione un documento para imprimir</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Documento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><a href="{{ route('rep_tec.pdf', $producto->idproducto) }}" target="blank">Reporte Técnico</a></th>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div> <!-- Fin Formulario -->
</div>
@endsection
