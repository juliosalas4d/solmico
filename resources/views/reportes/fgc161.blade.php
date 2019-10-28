<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"
   "http://www.w3.org/TR/REC-html40/strict.dtd">

{{-- <!doctype html> --}}
<html lang="es" class="no-js">
<head>
    <title>@yield('meta_title', setting('site.title'))</title>
    <meta name="description" content="@yield('meta_description', setting('site.description')) - {{ setting('site.title') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph -->
    <meta property="og:site_name" content="{{ setting('site.title') }}" />
    <meta property="og:title" content="@yield('meta_title')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="@yield('meta_image', url('/') . '/images/apple-touch-icon.png')" />
    <meta property="og:description" content="@yield('meta_description', setting('site.description'))" />

    <!-- Icons -->
    <meta name="msapplication-TileImage" content="{{ url('/') }}/ms-tile-icon.png" />
    <meta name="msapplication-TileColor" content="#8cc641" />
    <link rel="shortcut icon" href="{{ url('/') }}/images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="{{ url('/') }}/images/apple-touch-icon.png" />

    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <style id="Despachos">
	<!--table
		{mso-displayed-decimal-separator:"\,";
		mso-displayed-thousand-separator:"\.";}
        .head
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}
        .titulo_head
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:16.0pt;
            font-weight:700;
            font-style:bold;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}
        .titulo
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:18.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}
        .titulo_despa
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}
        .titulo_campo
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            background:#D9D9D9;
            mso-pattern:black none;
            mso-protection:locked hidden;
            white-space:normal;}
        .campo
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            text-transform: uppercase;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .campo_despa
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:"\#\,\#\#0";
            text-align:left;
            text-transform: uppercase;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}
        .campo_guia
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:12.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:0000;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .niveles
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            background:#D9D9D9;
            mso-pattern:black none;
            mso-protection:locked hidden;
            white-space:normal;}
        .tanque
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .campo_tanque
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:"\#\,\#\#0\.0";
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .total_tanque
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:right;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .firma
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}
        .campo_firma
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}

        .parametro
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        -->
	</style>
    </head>

    <body>
        <div id="Despacho" align=center>
            <table border=0 cellpadding=0 cellspacing=0 width=550 style='border-collapse:collapse;table-layout:fixed;width:550pt'>
                <col width=40>
                <col width=30>
                <col width=30>
                <col width=30>
                <col width=30>
                <col width=30>
                <col width=30>
                <col width=30>
                <col width=30>
                <col width=30>
                <tr>
                    <td colspan=2 class=head>
                        <img src="{{ public_path('images/SOLMICO.png') }}" alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" style='width:100.0pt;height:15.0pt'>
                    </td>
                    <td colspan=6 class=titulo_head>GUÍA DE DESPACHO DE PRODUCTOS QUÍMICOS</td>
                    <td colspan=2 class=head>FGC-161 <br>
                        Ver.1
                    </td>
                </tr>
                <tr>
                    <td colspan=2 class=titulo_campo style='height:15.0pt'>Nº GUÍA</td>
                    <td colspan=6 class=titulo_campo >Nº PEDIDO</td>
                    <td colspan=2 class=titulo_campo >FECHA</td>
                </tr>
                <tr>
                    <td colspan=2 class=campo_guia style='height:20pt'>{{ $despacho->iddesp }}</td>
                    <td colspan=6 class=campo >
                        @if($proyecto->numcont == NULL)
                            PEDIDO Nº: {{ $proyecto->pedido }}
                        @else
                            CONTRATO Nº: {{ $proyecto->numcont }} - PEDIDO Nº: {{ $proyecto->pedido }}
                        @endif
                    </td>
                    <td colspan=2 class=campo >{{ date('d/m/Y', strtotime($despacho->fechasal)) }}</td>
                </tr>
                <tr>
                    <td colspan=8 class=titulo_campo style='height:15.0pt'>CLIENTE</td>
                    <td colspan=2 class=titulo_campo >RIF</td>
                </tr>
                <tr>
                    <td colspan=8 class=campo style='height:20pt'>{{ $cliente->nombre }}</td>
                    <td colspan=2 class=campo >{{ $cliente->rif }}</td>
                </tr>
                <tr>
                    <td colspan=10 class=titulo_campo style='height:15.0pt'>ÁREA DE DESPACHO</td>
                </tr>
                <tr>
                    <td colspan=10 class=campo style='height:20pt'>PLANTA INDUSTRIALIZADORA SOLMICO, C.A. (Nº DI/B-111)</td>
                </tr>
                <tr>
                    <td colspan=5 class=titulo_campo style='height:15.0pt'>DESCRIPCIÓN DEL PRODUCTO</td>
                    <td colspan=2 class=titulo_campo >Nº LOTE</td>
                    <td class=titulo_campo >UNIDAD</td>
                    <td colspan=2 class=titulo_campo >DESPACHADO</td>
                </tr>
                <tr>
                    <td colspan=5 class=campo style='height:20pt'>{{ $producto->producto }}</td>
                    <td colspan=2 class=campo >{{ $lote->lote }}</td>
                    <td class=campo  >{{ $unidad->unidad }}</td>
                    <td colspan=2 class=campo >{{ number_format($despacho->cant_des, '0', ',', '.') }}</td>
                </tr>
                <tr>
                    <td colspan=2 class=titulo_campo style='height:15.0pt'>PLACAS</td>
                    <td colspan=2 class=titulo_campo >TIPO</td>
                    <td colspan=6 class=titulo_campo >DESCRIPCIÓN DE LA UNIDAD</td>
                </tr>
                <tr>
                    <td colspan=2 class=campo style='height:20pt'>
                        @if($despacho->placare != NULL)
                            {{ $despacho->placach }} / {{ $despacho->placare }}
                        @else
                            {{ $despacho->placach }}
                        @endif
                    </td>
                    <td colspan=2 class=campo >
                        @if($despacho->placare != NULL)
                            {{ $chuto->tipotra }} / {{ $remolque->tipotra }}
                        @else
                            {{ $chuto->tipotra }}
                        @endif
                    </td>
                    <td colspan=6 class=campo >
                        @if($despacho->placare != NULL)
                            {{ $chuto->modelo }} / {{ $remolque->modelo }}
                        @else
                            {{ $chuto->modelo }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan=2 class=titulo_campo style='height:15.0pt'>C.I. COFER</td>
                    <td colspan=6 class=titulo_campo >NOMBRE DEL CONDUCTOR</td>
                    <td colspan=2 class=titulo_campo >FIRMA</td>
                </tr>
                <tr>
                    <td colspan=2 class=campo style='height:20pt'>{{ number_format($despacho->cedcho, '0', '', '.') }}</td>
                    <td colspan=6 class=campo >{{ $chofer->nombre }}</td>
                    <td colspan=2 class=campo >&nbsp;</td>
                </tr>
                <tr>
                    <td colspan=10 class=titulo_campo style='height:15.0pt'>SITIO DE ENTREGA</td>
                </tr>
                <tr>
                    <td colspan=10 class=campo style='height:20pt'>
                        @if($despacho->arearec_3 != NULL)
                            {{ $despacho->arearec_1 }} / {{ $despacho->arearec_2 }} / {{ $despacho->arearec_3 }}
                        @elseif($despacho->arearec_2 != NULL)
                            {{ $despacho->arearec_1 }} / {{ $despacho->arearec_2 }}
                        @else
                            {{ $despacho->arearec_1 }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan=10 class=titulo_campo style='height:15.0pt'>CANTIDADES ENTREGADAS</td>
                </tr>
                <tr>
                    <td colspan=2 rowspan=2 class=titulo_campo style='height:40.0pt'>TANQUES</td>
                    <td colspan=2 class=campo style='height:20pt'>&nbsp;</td>
                    <td colspan=2 class=campo>&nbsp;</td>
                    <td colspan=2 class=campo>&nbsp;</td>
                    <td colspan=2 class=campo>&nbsp;</td>
                </tr>
                <tr>
                    <td class=niveles style='height:20pt'>NIVEL INICIAL</td>
                    <td class=niveles >NIVEL FINAL</td>
                    <td class=niveles >NIVEL INICIAL</td>
                    <td class=niveles >NIVEL FINAL</td>
                    <td class=niveles >NIVEL INICIAL</td>
                    <td class=niveles >NIVEL FINAL</td>
                    <td class=niveles >NIVEL INICIAL</td>
                    <td class=niveles >NIVEL FINAL</td>
                </tr>
                <tr>
                    <td colspan=2 class=tanque style='height:20pt'>CINTA INGRESADA:</td>
                    <td class=campo_tanque style='height:20pt'>&nbsp;</td>
                    <td class=campo_tanque style='height:20pt'>&nbsp;</td>
                    <td class=campo_tanque style='height:20pt'>&nbsp;</td>
                    <td class=campo_tanque style='height:20pt'>&nbsp;</td>
                    <td class=campo_tanque style='height:20pt'>&nbsp;</td>
                    <td class=campo_tanque style='height:20pt'>&nbsp;</td>
                    <td class=campo_tanque style='height:20pt'>&nbsp;</td>
                    <td class=campo_tanque style='height:20pt'>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan=2 class=tanque style='height:20pt'0>CINTA MOJADA:</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan=2 class=tanque style='height:20pt'>NIVEL:</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan=2 class=tanque style='height:20pt'>VOLUMEN:</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                    <td class=campo_tanque>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan=2 class=tanque style='height:20pt'>ENTREGADO POR TANQUE:</td>
                    <td colspan=2 class=campo>&nbsp;</td>
                    <td colspan=2 class=campo>&nbsp;</td>
                    <td colspan=2 class=campo>&nbsp;</td>
                    <td colspan=2 class=campo>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan=2 class=total_tanque style='height:20pt'>TOTAL ENTREGADO:</td>
                    <td colspan=8 class=campo style='height:20pt; font-size:12.0pt'>
                        @if($despacho->cant_ent != 0)
                            {{ number_format($despacho->cant_ent, '0', ',', '.') }} {{ $unidad->unidad }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan=10 class=titulo_campo style='height:15.0pt'>OBSERVACIONES GENERALES</td>
                </tr>
                <tr>
                    <td colspan=10 class=tanque style='height:100pt'>{{ $despacho->obs }}</td>
                </tr>
                <tr>
                    <td colspan=5 class=titulo_campo style='height:15pt'>DESPACHADO POR</td>
                    <td colspan=5 class=titulo_campo>RECIBIDO POR</td>
                </tr>
                <tr>
                    <td class=titulo_despa style='height:15pt'>NOMBRE:</td>
                    <td colspan=4 class=campo_despa>{{ $autorizado->nombre }}</td>
                    <td class=titulo_despa>NOMBRE:</td>
                    <td colspan=4 class=campo_despa style='border-right:.5pt solid black'></td>
                </tr>
                <tr>
                    <td class=titulo_despa style='height:15pt'>CARGO:</td>
                    <td colspan=4 class=campo_despa>{{ $autorizado->cargo }}</td>
                    <td class=titulo_despa>CARGO:</td>
                    <td colspan=4 class=campo_despa style='border-right:.5pt solid black'></td>
                </tr>
                <tr>
                    <td class=titulo_despa style='height:15pt'>C.I.:</td>
                    <td colspan=4 class=campo_despa>{{ number_format($despacho->cedaut, '0', '', '.') }}</td>
                    <td class=titulo_despa>C.I.:</td>
                    <td colspan=4 class=campo_despa style='border-right:.5pt solid black'></td>
                </tr>
                <tr>
                    <td class=firma style='height:30.0pt'>FIRMA:</td>
                    <td colspan=4 class=campo_firma style='border-right:.5pt solid black'>&nbsp;</td>
                    <td class=firma style='height:30.0pt'>FIRMA:</td>
                    <td colspan=4 class=campo_firma style='border-right:.5pt solid black'>&nbsp;</td>
                </tr>

            </table>
        </div>
    </body>
</html>
