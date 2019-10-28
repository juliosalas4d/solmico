@extends('app')
@section('content')

<div class='table-responsive-sm'>
    <h2>Nº despacho: {{ number_format($despacho->id, 0, '', '000') }}</h2>
    <table class="table table-bordered" id="valores">
        <caption></caption>
        <tr>
            <th align="right">Fecha:</th>
            <td>{{ date('d/m/Y', strtotime($despacho->fechasal)) }}</td>
        </tr>
        <tr>
            <th align="right">Proyecto:</th>
            <td>{{ $proyecto->idproyecto }} - {{ $proyecto->descri }}</td>
        </tr>
        <tr>
            <th align="right">Producto:</th>
            <td>{{ $producto->producto }}</td>
        </tr>
        <tr>
            <th align="right">Nº de Lote:</th>
            <td>{{ $lote->lote }}</td>
        </tr>
        <tr>
            <th align="right">Cantidad despachada:</th>
            <td>{{ number_format($despacho->cant_des, '0', ',', '.') }} {{ $unidad->unidad }}</td>
        </tr>
        <tr>
            <th align="right">Cantidad entregada:</th>
            <td>{{ number_format($despacho->cant_ent, '0', ',', '.') }} {{ $unidad->unidad }}</td>
        </tr>
        <tr>
            <th align="right">Área de Entrega 1:</th>
            <td>{{ $despacho->arearec_1 }}</td>
        </tr>
        @if($despacho->arearec_2 !== NULL)
        <tr>
            <th align="right">Área de Entrega 2:</th>
            <td>{{ $despacho->arearec_2 }}</td>
        </tr>
        @endif
        @if($despacho->arearec_3 !== NULL)
        <tr>
            <th align="right">Área de Entrega 3:</th>
            <td>{{ $despacho->arearec_3 }}</td>
        </tr>
        @endif
        <tr>
            <th align="right">Transportista:</th>
            <td>{{ $transportista->transportista }}</td>
        </tr>
        <tr>
            <th align="right">Vehículo:</th>
            <td>{{ $despacho->placach }} - {{ $chuto->descri }}</td>
        </tr>
        @if($despacho->placare !== NULL)
        <tr>
            <th align="right">Relolque (Si aplica):</th>
            <td>{{ $despacho->placare }}</td>
        </tr>
        @endif
        <tr>
            <th align="right">Chofer:</th>
            <td>{{ number_format($despacho->cedcho, '0', '', '.') }} - {{ $chofer->nombre }}</td>
        </tr>
        <tr>
            <th align="right">Despachador:</th>
            <td>{{ number_format($despacho->cedaut, '0', '', '.') }} - {{ $autorizado->nombre }} </td>
        </tr>
        @if($despacho->prescintos !== NULL)
        <tr>
            <th align="right">Prescintos:</th>
            <td>{{ $despacho->prescintos }}</td>
        </tr>
        @endif
        @if($despacho->boleto !== NULL)
        <tr>
            <th align="right">Nº boleto:</th>
            <td>{{ $despacho->boleto }}</td>
        </tr>
        @endif
        @if($despacho->tara != 0)
        <tr>
            <th align="right">Peso tara:</th>
            <td>{{ number_format($despacho->tara, '2', ',', '.') }}</td>
        </tr>
        @endif
        @if($despacho->bruto != 0)
        <tr>
            <th align="right">Peso bruto:</th>
            <td>{{ number_format($despacho->bruto, '2', ',', '.') }}</td>
        </tr>
        @endif
        @if($despacho->nde !== NULL)
        <tr>
            <th align="right">Nº Nota de Entrega:</th>
            <td>{{ $despacho->nde }}</td>
        </tr>
        @endif
        <tr>
            <th align="right">Observaciones:</th>
            <td>{{ $despacho->obs }}</td>
        </tr>
        <tr>
            <th align="right">Fecha de creación:</th>
            <td>{{ $despacho->created_at }}</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <a href="{{ route('despachos.index') }}" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-arrow-left"></span>Volver</a>
                <a href="{{ route('despachos.show', $despacho->iddesp) }}" type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-repeat" aria-hiden='true'></span>Recargar</a>
                <button type="button" class="btn btn-warning btn-sm" title="Imprimir Planillas" data-toggle="modal" data-target="#imprimirModal">Imprimir</button>
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
                                <th scope="row"><a href="{{ route('fgc160.pdf', $despacho->id) }}" target="blank">FGC-160 - Certificado de Análisis</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="{{ route('fgc161.pdf', $despacho->id) }}" target="blank">FGC-161 - Guía de Despacho</a></th>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="{{ route('hdr.pdf', $despacho->id) }}" target="blank"><span class="glyphicon glyphicon-download-alt"></span>Hoja de Ruta</a></th>
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
